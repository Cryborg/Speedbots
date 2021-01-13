
import Vue from 'vue'
import Vuex from 'vuex'
import user from './modules/user'
import VuexPersistence from 'vuex-persist'


Vue.use(Vuex)

const vuexLocal = new VuexPersistence({
  storage: window.localStorage,
  reducer: (state) => ({ user: state.user }), //only save navigation module
})
 

export default new Vuex.Store({
  modules: {
    user,
  },
  plugins: [vuexLocal.plugin]
})