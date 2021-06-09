
window.Vue = require('vue');

import Vue from "vue";
import indexUser from "./pages/user/indexUser.vue"
Vue.component("index-user", indexUser);

const app = new Vue({
    el: '#app',
  });
