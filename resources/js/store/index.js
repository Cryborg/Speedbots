
import Vue from 'vue'
import Vuex from 'vuex'
import user from './modules/user'
import galaxy from './modules/galaxy'
import VuexPersistence from 'vuex-persist'


Vue.use(Vuex)

const vuexLocal = new VuexPersistence({
  storage: window.localStorage,
  reducer: (state) => ({ user: state.user }),
})
 

export default new Vuex.Store({
  modules: {
    user,
    galaxy
  },
  plugins: [vuexLocal.plugin]
})