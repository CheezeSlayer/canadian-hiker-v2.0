import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent";
import Logout from "./Actions/Logout";
import Login from "./Actions/Login";
import Signup from "./Actions/Signup";

import AboutMe from "./Views/AboutMe";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: '/', component: ExampleComponent,
            meta: { title: "Welcome"}
        },
        {
            path: '/about', component: AboutMe,
            meta: { title: "About Me"}
        },
        {
            path: '/logout', component: Logout
        },
        {
            path: '/login', component: Login
        },
        {
            path: '/signup', component: Signup
        }
    ],
    mode: 'history'
})