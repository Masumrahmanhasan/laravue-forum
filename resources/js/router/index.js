import {createRouter, createWebHistory} from "vue-router";
import Home from '../pages/Home.vue'
import Signup from '../pages/Signup.vue'
import Discussions from '../pages/Discussions.vue'
import Login from "../pages/admin/Login.vue";
const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/discussions',
            name: 'discussions',
            component: Discussions
        },
        {
            path: '/signup',
            name: 'signup',
            component: Signup
        },
        {
            path: '/admin/login',
            name: 'admin-login',
            component: Login
        }
    ]
})

export default router
