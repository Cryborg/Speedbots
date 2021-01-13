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
                    <font-awesome-icon icon="home"></font-awesome-icon>
                </template>
                Home
            </vs-sidebar-item>

            <!-- Galaxy -->
            <vs-sidebar-group>
                <template #header>
                    <vs-sidebar-item arrow>
                        <template #icon>
                            <font-awesome-icon :icon="['fab', 'galactic-senate']"></font-awesome-icon>
                        </template>
                        Galaxy
                    </vs-sidebar-item>
                </template>

                <!--  -->
                <vs-sidebar-item id="stellar-systems">
                    <template #icon>
                        <i class='bx bxl-instagram'></i>
                    </template>
                    Stellar Systems
                </vs-sidebar-item>
                <!-- Hangar -->
                <vs-sidebar-item id="stellar-objects">
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
                            <font-awesome-icon icon="space-shuttle"></font-awesome-icon>
                        </template>
                        Ships
                    </vs-sidebar-item>
                </template>

                <!--  -->
                <vs-sidebar-item id="mothership">
                    <template #icon>
                        <i class='bx bxl-instagram'></i>
                    </template>
                    Mothership
                </vs-sidebar-item>
                <!-- Hangar -->
                <vs-sidebar-item id="speedbots">
                    <template #icon>
                        <i class='bx bxl-twitter' ></i>
                    </template>
                    Speedbots
                </vs-sidebar-item>
            </vs-sidebar-group>

            <template #footer @click="logout">


                <!-- Log out -->
                <vs-sidebar-item :to="{name : 'logout'}" id="logout">
                    <template #icon>
                        <font-awesome-icon icon="sign-out-alt"></font-awesome-icon>
                    </template>
                    Log Out
                </vs-sidebar-item>
            </template>
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
    methods: {
        logout() {
            this.$store.dispatch('logout');
        }
    },
}
</script>