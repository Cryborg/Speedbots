<template>
    <div class="input-form-field">
        <label class="preprend" v-if="icon" :for="id">
            <font-awesome-icon :icon="icon"></font-awesome-icon>
            <span class="hidden">{{ text }}</span>
        </label>
        <input :id="id" :type="type" class="form-input" :placeholder="text" v-model="value" required>
    </div>
</template>

<style lang="scss" scoped>
    .input-form-field {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 2rem;

        label {
            border-radius: 0.25rem;
            padding: 1rem;
            color: #3A3F44;
            background-color: #222222;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }
        input {
            border: 0;
            color: inherit;
            font: inherit;
            margin: 0;
            outline: 0;
            padding: 0;
            -webkit-transition: background-color .3s;
            transition: background-color .3s;
            width: 100%;
            border-radius: 0.25rem;
            padding: 1rem;
            color: #3A3F44;
            background-color: #ffffff;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            &:focus, &:hover {
                background-color: #eeeeee;
            }
        }
    }

    .hidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }
</style>

<script>
export default {
    props : ['text', 'type', 'icon', 'v'],
    data () {
        return {
            id: null,
            value : '',
            errors : {}
        }
    },
    mounted () {
        this.id = this._uid;
    }
}
</script>