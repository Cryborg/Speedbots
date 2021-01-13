import router from '../../router'

// initial state
const state = () => ({
  token: '',
})

// getters
const getters = {
    loggedIn(state){
      return state.token !== '';
    }
}

// actions
const actions = {
    login( { commit }, data ){
        axios.post('/api/login', data)
        .then(function (response) {
            commit("setToken", response.data.token);
            router.push({name : 'app'})
        })
        .catch(function (error) {
            console.log(error);
        });
    },
    register( { commit, dispatch }, data ){
      console.log(data);
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
}

// mutations
const mutations = {
  setToken (state, token) {
    state.token = token
  },
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}