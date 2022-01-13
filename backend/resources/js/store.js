import axios from 'axios';
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const state = {
    user: []
}

const mutations = {
    getUser(state) {
        axios.get('/api/user')
        .then(res => {
            state.user = res.data;
        })
    }
}

const getters = {
    getUsername(state) {
        return state.user.name;
    }
}

const actions = {
    getUser(ctx) {
        ctx.commit('getUser');
    }
}

export default new Vuex.Store({
    state,
    mutations,
    getters,
    actions
});