import Vue from 'vue';
import router from './router';
import { store } from './store'; 

import LazyLoadImg from './Directives/LazyLoadDirective'

import App from './components/App';

require('./bootstrap');

Vue.directive('lazyloadImg', LazyLoadImg)

const app = new Vue({
    el: '#app',
    components: {
        App,
    },
    router,
    store
});
