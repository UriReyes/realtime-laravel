<template>
    <b-list-group-item :variant="variant">
        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center">
                <b-img
                    v-bind="imageProps"
                    rounded="circle"
                    alt="Circle image"
                ></b-img>
            </b-col>
            <b-col md="6" align-self="center" class="d-none d-sm-block">
                <p class="m-0">{{ conversation.contact_name }}</p>
                <p class="m-0 text-muted small">
                    {{ conversation.last_message }}
                </p>
            </b-col>
            <b-col md="3" class="m-0 text-muted small d-none d-sm-block">
                <p>{{ conversation.last_time }}</p>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
export default {
    props: { variant: String, conversation: Object },
    data() {
        return {
            imageProps: {
                blank: true,
                blankColor: "#777",
                width: 64,
                height: 64,
                class: "m1"
            }
        };
    },
    mounted() {}
};
</script>
