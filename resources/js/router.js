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
import DeeksLake2018 from "./Views/Blogs/DeeksLake2018";

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
            path: '/blog', component: Blog,
            meta: { title: "Blog"}
        },
        {
            path: '/blog/deeks_lake_2018', component: DeeksLake2018,
            meta: { title: 'Howe Sound Adventures - Camping and Fishing at Deeks Lake'}
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