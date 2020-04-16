import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent";
import Logout from "./Actions/Logout";
import Login from "./Actions/Login";
import Signup from "./Actions/Signup";

import Welcome from "./Views/Welcome";
import AboutMe from "./Views/AboutMe";
import Contact from "./Views/Contact";
import Blog from "./Views/Blog";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: '/', component: Welcome,
            meta: { title: "Welcome"}
        },
        {
            path: '/about', component: AboutMe,
            meta: { title: "About Me"}
        },
        {
            path: '/contact', component: Contact,
            meta: { title: "Contact"}
        },
        {
            path: '/Blog', component: Blog,
            meta: { title: "Blog"}
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