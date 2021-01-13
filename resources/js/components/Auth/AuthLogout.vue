<template>

</template>

<style lang="scss" scoped>

</style>

<script>

export default {
  methods: {
    logout(){
      this.$store.dispatch('user/logout', this.$store.getters['user/getToken']);
    },
  },
  created() {
    this.logout();
  },
}
</script>