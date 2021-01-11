<template>
    <div class="header">
        <login-register-header-item-component
            name="connexion"
            route="login"
        ></login-register-header-item-component>
        <login-register-header-item-component 
            name="inscription"
            route="register"
        ></login-register-header-item-component>
    </div>
</template>

<style lang="scss">
    .header {
        display: flex;
    }
</style>

<script>
export default {

}
</script>