import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        user: null
    },
    mutations: {
        setAuthUser(state, user) {
            state.user = user;
        }
    },
    getters: {
        isLoggedIn(state) {
            return state.user !== null;
        },
        getUserInfo(state) {
            return state.user;
        }
    }
})