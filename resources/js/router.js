import Vue from 'vue'
import VueRouter from 'vue-router'

import LoginBodyComponent from './components/LoginRegister/LoginBodyComponent'
import RegisterBodyComponent from './components/LoginRegister/RegisterBodyComponent'

Vue.use(VueRouter);


export default new VueRouter({
    routes : [
      { path: '/login', component: LoginBodyComponent },
      { path: '/register', component: RegisterBodyComponent }
    ]
  });