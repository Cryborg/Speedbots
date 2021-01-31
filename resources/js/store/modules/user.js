import router from '../../router'

// initial state
const state = () => ({
  token      : null,
  details    : {},
  location   : null,
  mothership : null
})

// getters
const getters = {
    loggedIn(state){
      return state.token && state.token !== '';
    },
    getToken(state){
      return state.token;
    },
    getShips(state) {
      return state.details.ships
    },
    getMothership(state) {
      return state.mothership;
    },
    getMothershipLocation(state) {
      return state.mothership.in_orbit_of;
    },
    getLocation(state) {
      return state.details.location;
    }
}

// actions
const actions = {
    login( { commit, dispatch }, data ){
        axios.post('/api/login', data)
        .then(function (response) {
            commit("setToken", response.data.token);
            dispatch('details', response.data.token);
            router.push({name : 'app'})
        })
        .catch(function (error) {
            console.log(error);
        });
    },
    register( { dispatch }, data ){
      axios.post('/api/register', data)
      .then(function (response) {
          dispatch('login', {
            email : data.email,
            password : data.password
          });
      })
      .catch(function (error) {
          console.log(error);
      });
    },
    logout( { commit, rootGetters}, data ){
      axios.post('/api/logout', data, {
        headers: {
          Authorization: 'Bearer ' + rootGetters['user/getToken']
        }
      })
      .then(function (response) {
        commit("setToken", null);
        router.push({name : 'login'})
      })
      .catch(function (error) {
          console.log(error);
      });
    },
    details( { commit, rootGetters }) {
      axios.get('/api/user', {
        headers: {
          Authorization: 'Bearer ' + rootGetters['user/getToken']
        }
      })
      .then(function (response) {
        commit("setDetails", response.data.details);
        commit("setMothership", response.data.details.ships)
      })
      .catch(function (error) {
          console.log(error);
      });
    }
}

// mutations
const mutations = {
  setToken (state, token) {
    state.token = token
  },
  setDetails (state, details) {
    state.details = details;
  },
  setMothership (state, ships) {
    let mothership = ships.filter(function (ship) {
      return ship.class === 'mothership';
    });
    state.mothership = mothership[0];
  }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}