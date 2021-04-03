<template>
    <div>
        <b-form class="my-3">
            <b-form-input
                class="text-center"
                type="text"
                placeholder="Buscar contacto"
                required
            >
            </b-form-input>
        </b-form>
        <b-list-group>
            <contact-component
                v-for="conversation in conversations"
                :key="conversation.id"
                :conversation="conversation"
                @click.native="selectConversation(conversation)"
            >
            </contact-component>
            <!-- <contact-component></contact-component>
            <contact-component variant="secondary"></contact-component>
            <contact-component></contact-component> -->
        </b-list-group>
    </div>
</template>

<script>
export default {
    data() {
        return {
            conversations: []
        };
    },
    mounted() {
        this.getConversations();
    },
    methods: {
        getConversations() {
            axios.get("/api/conversations").then(({ data }) => {
                this.conversations = data;
            });
        },
        selectConversation(conversation) {
            console.log(conversation);
        }
    }
};
</script>
