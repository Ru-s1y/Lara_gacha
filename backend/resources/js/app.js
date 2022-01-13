import Vue from "vue";
import router from "./router";
import HomeComponent from "./components/HomeComponent.vue";
import store from "./store";

require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', HomeComponent);

const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        HomeComponent,
    }
});
