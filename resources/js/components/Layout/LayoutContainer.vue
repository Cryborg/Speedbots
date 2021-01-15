<template>
    <main id="page-wrap" class="main-container">
        <div class="logo">
            <h1>Speedbots</h1>
        </div>
        
        <div class="container">
            <slot></slot>
        </div>
    </main>
</template>

<style lang="scss" scoped>
    .main-container {

        .logo {
            height: 10vh;
            display: flex;
            justify-content: center;
        }
    }
</style>

<script>
export default {
    
}
</script>