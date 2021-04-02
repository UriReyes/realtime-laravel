require("./bootstrap");

window.Vue = require("vue");

import { BootstrapVue, IconsPlugin } from "bootstrap-vue";

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);

Vue.component(
    "contact-component",
    require("./components/ContactComponent.vue").default
);
Vue.component(
    "contact-list-component",
    require("./components/ContactListComponent.vue").default
);

Vue.component(
    "active-conversation-component",
    require("./components/ActiveConversationComponent.vue").default
);

Vue.component(
    "message-conversation-component",
    require("./components/MessageConversationComponent.vue").default
);

const app = new Vue({
    el: "#app",
    methods: {
        logout: function(event) {
            event.preventDefault();
            document.getElementById("logout-form").submit();
        }
    }
});
