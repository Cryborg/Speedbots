import Vue from 'vue'
import VueRouter from 'vue-router'

import { isAuthentificated, hasLoadSystems } from './router-guard'

import AuthBox from './components/Auth/AuthBox'
import AppComponent from './components/AppComponent'
import Galaxy from './components/Galaxy/Galaxy'

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
    },
    {
      path: '/galaxies',
      component: Galaxy,
      name : 'galaxies' ,
      beforeEnter : isAuthentificated,
    }
  ],
});
