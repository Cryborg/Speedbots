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
            h1 {
                color : #46AAEC;
            }
        }

        .container {
            height: 80vh;
            margin: 1rem;
            background-color: #b8b8b8;
            border-radius: 1rem;
            padding: 1rem;
        }
    }
</style>

<script>
export default {
    
}
</script>