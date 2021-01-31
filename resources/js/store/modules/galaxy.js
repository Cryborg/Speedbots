import router from '../../router'

// initial state
const state = () => ({
  systems  : {},
})

// getters
const getters = {
    getSystems : (state) => (galaxyId) =>  {
        return state.systems[galaxyId];
    },
}

// actions
const actions = {
    async populateGalaxy( { commit, rootGetters }, galaxyId ){
        return axios.get('/api/galaxies/' + galaxyId + '/stellar_systems', {
            headers: {
              Authorization: 'Bearer ' + rootGetters['user/getToken']
            }
        })
        .then(function (response) {
            commit("setSystems", {
                'systems'  : response.data,
                'galaxyId' : galaxyId
            });
        })
        .catch(function (error) {
            console.log(error);
        });
    },
}

// mutations
const mutations = {
    setSystems(state, options) {
        state.systems[options.galaxyId] = {};

        options.systems.forEach(system => {
            state.systems[options.galaxyId][system.id] = system;
        });
    }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}