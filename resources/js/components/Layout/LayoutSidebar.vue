<template>
    <Reveal>
        <router-link :to="{ name : 'app'}">
            <font-awesome-icon icon="home" />
            <span>Home</span>
        </router-link>

        <router-link :to="{ name : 'galaxies'}">
            <font-awesome-icon :icon="['fab', 'galactic-senate']" />
            <span>Galaxy</span>
        </router-link>

        <router-link :to="{ name : 'ship'}">
            <font-awesome-icon icon="space-shuttle" />
            <span>Ship</span>
        </router-link>

        <router-link to="/" @click.native="logout">
            <font-awesome-icon icon="sign-out-alt" />
            <span>Log Out</span>
        </router-link>

    </Reveal>
</template>


<style lang="scss" scoped>
    a:hover {
        background-color: red;
    }
</style>

<script>
import { Reveal } from 'vue-burger-menu'  // import the CSS transitions you wish to use, in this case we are using `Reveal`

export default {
    components : {
        Reveal
    },
    methods: {
        logout() {
            this.$store.dispatch('user/logout', this.$store.getters['user/getToken']);
        }
    },

}
</script>
