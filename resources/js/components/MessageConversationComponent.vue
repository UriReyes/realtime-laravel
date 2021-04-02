<template>
    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
        <template #aside>
            <b-img
                blank
                blank-color="#ccc"
                width="48"
                alt="placeholder"
                rounded="circle"
            ></b-img>
        </template>
        <b-card>
            <slot></slot>
        </b-card>
    </b-media>
</template>

<script>
export default {
    props: {
        writtenByMe: Boolean
    },
    data() {
        return {};
    },
    mounted() {}
};
</script>
