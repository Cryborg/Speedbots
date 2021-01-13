import store from './store'

export const isAuthentificated = function (to, from, next) {
    if (!store.getters['user/loggedIn']) {
        next({
          path: '/auth/login',
          query: { redirect: to.fullPath }
        })
    } else {
        next()
    }
}