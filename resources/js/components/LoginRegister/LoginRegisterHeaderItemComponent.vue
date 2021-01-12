<template>
    <div class="header-item">
        <router-link :to="`${route}`">{{ name }}</router-link>
    </div>
</template>


<style lang="scss">
    // @todo fix css problems
    .header-item {
        width: 50%;
        text-align: center;
        padding: 1rem;
        text-transform: capitalize;
        &:has(a.router-link-active){
            font-size: 15rem;
        }
        a.router-link-active {
            border-bottom: solid 3px #040080;
            background-color : #d3d3d3;
        }
    }


    .header-item:hover a:not(.router-link-active) {
            border-bottom: solid 3px #04008023;
            background-color : #d3d3d352;
    }

</style>

<script>
export default {
    props : ['name', 'route'],
}
</script>