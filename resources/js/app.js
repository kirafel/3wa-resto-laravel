import Vue from 'vue';
import App from './App.vue';

require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    components : {
        App
    }
});
