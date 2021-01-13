<template>
    <div class="container">
        <div class="box-login">
            <auth-header />
            <div class="logo">Speedbots</div>
            <div class="login-item">
                <auth-login v-if="page === 'login'" />
                <auth-register v-else />
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100%;
    font-family: 'lato', sans-serif;
    color: #fff;

    .box-login {
        background:rgba(58,63,68,0.5);
        border-radius: 5px;
        box-shadow: 0 1.5px 0 0 rgba(0,0,0,0.1);
        width:450px;
        display: flex;  
        flex-direction: column;
        border: solid black 1px;

        .logo{
            font-family: "museo-slab";  
            font-size:20px;
            text-align: center;
            padding: 20px 20px 0;
            margin:0;
        }

        .login-item {
            color: #ffff;
            padding:25px 25px 0;
            margin: 20px 20px 0;	
            border-radius: 3px;
        }
    }
}
</style>

<script>
    export default {
        computed: {
            page : function () {
                return this.$route.name;
            }
        },
    }
</script>