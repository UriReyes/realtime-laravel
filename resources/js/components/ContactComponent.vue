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
                <p class="m-0">{{ name }}</p>
                <p class="m-0 text-muted small">{{ lastMessage }}</p>
            </b-col>
            <b-col md="3" class="m-0 text-muted small d-none d-sm-block">
                <p>{{ lastTime }}</p>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
export default {
    props: ["variant"],
    data() {
        return {
            name: "Uriel Reyes",
            lastMessage: "Tú: Hasta luego",
            lastTime: "1:37 p.m",
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
