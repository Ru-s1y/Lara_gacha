import Vue from "vue";
import router from "./router";
import HomeComponent from "./components/HomeComponent";

require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    router,
    components: {
        HomeComponent,
    }
});
