<template>
    <form class="form form-login" :id="id">
        <input-field v-bind:type="'text'" ref="username" v-bind:text="'Username'" v-bind:icon="'user'"></input-field>
        <input-field v-bind:type="'email'" ref="email" v-bind:text="'Mail address'" v-bind:icon="'at'"></input-field>
        <input-field v-bind:type="'password'" ref="password" v-bind:text="'Password'" v-bind:icon="'lock'"></input-field>
        <input-field v-bind:type="'password'" ref="repeatPassword" v-bind:text="'Repeat password'" v-bind:icon="'lock'"></input-field>
        <button-field v-bind:callback="login" v-bind:text="'Register'"></button-field>
    </form>
</template>

<style lang="scss" scoped>

</style>

<script>
export default {
  data() {
    return {
      id : null,
    }
  },
  methods: {
    login(){
      this.$store.dispatch( 'user/register', {
        email    : this.$refs.email.value,
        username : this.$refs.username.value,
        password : this.$refs.password.value,
      });
    },
  },
  mounted () {
    this.id = this._uid
  }
}
</script>