import Vue from 'vue'
import Router from 'vue-router'
//import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import(/* webpackChunkName: "about" */ './views/Home.vue')
    },
    {
      path: '/arquetipo',
      name: 'arquetipo',
      component: () => import(/* webpackChunkName: "about" */ './views/Arquetipos.vue')
    },
    {
      path: '/descargar',
      name: 'descargar',
      component: () => import(/* webpackChunkName: "about" */ './views/Descargar.vue')
    },
    {
      path: '/cargar',
      name: 'cargar',
      component: () => import(/* webpackChunkName: "about" */ './views/Cargar.vue')
    },
    {
      path: '/about',
      name: 'about',
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    }
  ]
})
