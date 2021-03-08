<template>
    <layout>
        <div class="header">
            <h2>Ship</h2>
        </div>
        <div class="body">
            This is my body, dude.
        </div>
    </layout>
</template>

<style lang="scss" scoped>
    .header {
        background-color: #d6d6d6;
        height: 3rem;

        h2 {
            margin: auto;
        }
    }

    .body {
        height: calc(100% - 3rem - 1rem);
        margin-top: 1rem;

        #ship {
            background-color: black;
        }
    }
</style>
<script>
export default {
    data() {
        return {
            ship  : {}
        }
    },
}
</script>
