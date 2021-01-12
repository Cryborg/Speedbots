<template>
    <div class="header">
        <router-link :to="`/`">Log In</router-link>
        <router-link :to="`register`">Register</router-link>
    </div>
</template>

<style lang="scss">
    .header {
        display: flex;

        a {
            width: 50%;
            text-align: center;
            padding: 1rem;
            text-decoration: none;

            &.router-link-exact-active {
                border-bottom: solid 3px #040080;
                background-color : #d3d3d3;
            }

            &:not(.router-link-exact-active):hover {
                border-bottom: solid 3px #04008023;
                background-color : #d3d3d352;
            }
        }
    }
</style>

<script>
export default {
}
</script>