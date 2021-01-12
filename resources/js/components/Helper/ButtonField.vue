<template>
    <div class="button-form-field">
        <input type="button" class="btn-field" v-on:click="callback" :value="text">
    </div>
</template>

<style lang="scss">
    .button-form-field {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 2rem;

        input.btn-field {
            width: 100%;
            border-radius: 0.25rem;
            padding: 1rem;
            color: #3A3F44;
            background-color: #00B9BC;
            color: #eee;
            font-weight: bold;
            text-transform: uppercase;

            &:hover {
                background-color: #197071;
            }
        }
    }
</style>

<script>
export default {
    props : ['callback', 'text']
}
</script>