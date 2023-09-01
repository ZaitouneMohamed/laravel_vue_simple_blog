import { createRouter, createWebHistory } from "vue-router";

import Home from "./components/Home/Home.vue";
import Posts from "./components/posts/Index.vue";

const routes = [
    {
        path: "/admin/",
        component: Home,
        beforeEnter: (to, from, next) => {
            const token = localStorage.getItem("token");
            const role = localStorage.getItem("role");
            if (token && role === "admin") {
                next();
            } else {
                next("/");
            }
        },
    },
    {
        path: "/admin/posts",
        component: Posts,
        beforeEnter: (to, from, next) => {
            const token = localStorage.getItem("token");
            const role = localStorage.getItem("role");
            if (token && role === "admin") {
                next();
            } else {
                next("/");
            }
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
