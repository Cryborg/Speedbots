<template>
    <div class="hidden">
        <vs-sidebar
            absolute
            hover-expand
            reduce
            v-model="active"
            open
        >
            <!-- <template #logo> -->
            <!-- ...img logo -->
            <!-- </template> -->

            <!-- Home -->
            <vs-sidebar-item :to="{name : 'app'}" id="home">
                <template #icon>
                    <i class='bx bx-home'></i>
                </template>
                Home
            </vs-sidebar-item>

            <!-- Galaxy -->
            <vs-sidebar-group>
                <template #header>
                    <vs-sidebar-item arrow>
                        <template #icon>
                            <i class='bx bx-group'></i>
                        </template>
                        Galaxy
                    </vs-sidebar-item>
                </template>

                <!--  -->
                <vs-sidebar-item id="Instagram">
                    <template #icon>
                        <i class='bx bxl-instagram'></i>
                    </template>
                    Stellar Systems
                </vs-sidebar-item>
                <!-- Hangar -->
                <vs-sidebar-item id="twitter">
                    <template #icon>
                        <i class='bx bxl-twitter' ></i>
                    </template>
                    System
                </vs-sidebar-item>
            </vs-sidebar-group>

            <!-- Ship -->
            <vs-sidebar-group>
                <template #header>
                    <vs-sidebar-item arrow>
                        <template #icon>
                            <i class='bx bx-group'></i>
                        </template>
                        Ships
                    </vs-sidebar-item>
                </template>

                <!--  -->
                <vs-sidebar-item id="Instagram">
                    <template #icon>
                        <i class='bx bxl-instagram'></i>
                    </template>
                    Mothership
                </vs-sidebar-item>
                <!-- Hangar -->
                <vs-sidebar-item id="twitter">
                    <template #icon>
                        <i class='bx bxl-twitter' ></i>
                    </template>
                    Speedbots
                </vs-sidebar-item>
            </vs-sidebar-group>
        </vs-sidebar>
    </div>
</template>


<style lang="sass" scoped>

</style>

<script>
export default {
    data:() => ({
        active: 'home',
    }),
}
</script>