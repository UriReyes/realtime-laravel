<template>
    <b-row class="h-100">
        <b-col cols="8" no-gutters>
            <b-card title="Conversación activa" class="h-100">
                <b-card-text>
                    <message-conversation-component
                        v-for="message in messages"
                        :key="message.id"
                        :written-by-me="message.written_by_me"
                        >{{ message.content }}</message-conversation-component
                    >
                </b-card-text>
                <div slot="footer">
                    <b-form class="mb-0" @submit.prevent="postMessage">
                        <b-input-group class="mt-3">
                            <b-form-input
                                autocomplete="off"
                                placeholder="Escribe un mensaje..."
                                type="text"
                                v-model="newMessage"
                            ></b-form-input>
                            <b-input-group-append>
                                <b-button type="submit" variant="info"
                                    >Enviar</b-button
                                >
                            </b-input-group-append>
                        </b-input-group>
                    </b-form>
                </div>
            </b-card>
        </b-col>
        <b-col cols="4" class="text-center" no-gutters>
            <b-img
                rounded="circle"
                blank
                with="60"
                height="60"
                blank-color="#777"
                alt="Circle image"
                class="m1"
            ></b-img>
            <hr />
            <p>Usuario seleccionado</p>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
export default {
    data() {
        return {
            messages: [],
            newMessage: ""
        };
    },
    mounted() {
        this.getMessages();
    },
    methods: {
        getMessages() {
            axios.get("/api/messages").then(({ data }) => {
                this.messages = data;
            });
        },
        postMessage() {
            if (this.newMessage != "") {
                const params = {
                    to_id: 2,
                    content: this.newMessage
                };
                axios
                    .post("/api/messages", params)
                    .then(({ data: { success } }) => {
                        if (success) {
                            this.newMessage = "";
                            this.getMessages();
                        }
                    });
            }
        }
    }
};
</script>
