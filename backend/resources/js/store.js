import Vue from 'vue';
import Vuex from 'vuex';

Vue.user(Vuex);

export default new Vuex.Store({
    state: {
        userId: '',
        userToken: '',
    },
    mutations: {
        setUserId(state, userId, userToken) {
            state.userId = userId;
            state.userToken = userToken;
        }
    },
    getters: {
        getLoggedIn(state) {
            return Boolean(state.userId.trim());
        }
    },
    actions: {}
});