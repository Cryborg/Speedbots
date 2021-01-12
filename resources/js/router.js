import Vue from 'vue'
import VueRouter from 'vue-router'

import AuthLogin from './components/Auth/AuthLogin'
import AuthRegister from './components/Auth/AuthRegister'

Vue.use(VueRouter);


export default new VueRouter({
    routes : [
      { path: '/', component: AuthLogin },
      { path: '/register', component: AuthRegister }
    ]
  });