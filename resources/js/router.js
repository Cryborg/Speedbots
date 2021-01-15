import Vue from 'vue'
import VueRouter from 'vue-router'

import { isAuthentificated } from './router-guard'

import AuthBox from './components/Auth/AuthBox'
import AuthLogout from './components/Auth/AuthLogout'
import AppComponent from './components/AppComponent'

Vue.use(VueRouter);

export default new VueRouter({
  routes : [
    {
      path: '/auth/login/',
      component: AuthBox,
      name : 'login'
    },
    {
      path: '/auth/register/',
      component: AuthBox,
      name : 'register'
    },
    {
      path: '/',
      component: AppComponent,
      name : 'app' ,
      beforeEnter : isAuthentificated,
    }
  ],
});
