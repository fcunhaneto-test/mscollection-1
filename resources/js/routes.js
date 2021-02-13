import VueRouter from "vue-router";

import Movies from "./frontend/Movies";
const routes = [
    {
        path: '/',
        component: Movies,
        name: 'home'
    },
    {
        path: '/filmes/:media_id',
        component: Movies,
        name: 'movies'
    },
    {
        path: '/series/:media_id',
        component: Movies,
        name: 'series'
    },
];

const router = new VueRouter({
    mode: "history",
    routes
})

export default router;
