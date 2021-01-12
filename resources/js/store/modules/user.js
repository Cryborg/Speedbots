// initial state
const state = () => ({
  token: '',
})

// getters
const getters = {

}

// actions
const actions = {
    login( { commit }, data ){
        axios.post('/api/login', data)
        .then(function (response) {
            commit("setToken", response.data.token);
        })
        .catch(function (error) {
            console.log(error);
        });
    },
    register( { commit }, data ){
      axios.post('/api/register', data)
      .then(function (response) {
          commit("setToken", response.data.token);
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