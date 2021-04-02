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
            <contact-component></contact-component>
            <contact-component variant="secondary"></contact-component>
            <contact-component></contact-component>
        </b-list-group>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
    mounted() {}
};
</script>
