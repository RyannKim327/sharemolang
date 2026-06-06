import { createRouter, createWebHistory } from 'vue-router';
import Home from './views/Home.vue';
import Login from './views/Login.vue';
import Register from './views/Register.vue';
import Upload from './views/Upload.vue';
import Drive from './views/Drive.vue';

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    },
    {
        path: '/upload',
        name: 'upload',
        component: Upload
    },
    {
        path: '/drive',
        name: 'drive',
        component: Drive
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
