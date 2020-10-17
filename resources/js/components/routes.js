import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from '../home/Home'
import ExampleComponent from './ExampleComponent'

const musicjerkRoutes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/albums',
        name: 'albums',
        component: ExampleComponent,
        props: { title: "This is the SPA home" }
    },
    {
        path: '/login',
        name: 'login',
        component: ExampleComponent
    },
]

const router = new VueRouter({
    mode: 'history',
    routes: musicjerkRoutes,
})

export { router }
