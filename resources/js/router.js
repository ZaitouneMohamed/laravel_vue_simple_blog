import { createRouter, createWebHistory } from "vue-router";

import Home from "./landing/components/Home.vue";
import About from "./landing/components/About.vue";
import Services from "./landing/components/Services";

const routes = [
    { path: "/", component: Home, name: "home" },
    { path: "/about", component: About, name: "about" },
    {
        path: "/services",
        component: Services,
        name:"services",
        // beforeEnter: (to, from, next) => {
        //     const variableValue = 0; // Replace with your variable value
        //     if (variableValue === 0) {
        //         next("/other-page"); // Redirect to a different page
        //     } else {
        //         next(); // Continue to the route
        //     }
        // },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
