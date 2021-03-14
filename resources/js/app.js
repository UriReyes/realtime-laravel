require("./bootstrap");

window.Vue = require("vue");

import { BootstrapVue, IconsPlugin } from "bootstrap-vue";

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

const app = new Vue({
    el: "#app"
});
