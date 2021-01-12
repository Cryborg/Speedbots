<template>
    <form class="form form-login" :id="id">
        <input-field v-bind:type="'email'" ref="email" v-bind:text="'Mail address'" v-bind:icon="'at'"></input-field>
        <input-field v-bind:type="'password'" ref="password" v-bind:text="'Password'" v-bind:icon="'lock'"></input-field>
        <button-field v-bind:callback="login" v-bind:text="'Log In'"></button-field>
    </form>
</template>

<style lang="scss" scoped>

</style>

<script>
import { required, minLength, between, sameAsPassword, sameAs, email } from 'vuelidate/lib/validators'

export default {
  data() {
    return {
      id : null,
      email : '',
      password : ''
    }
  },
  methods: {
    login(){
      this.$store.dispatch( 'user/login', {
        email    : this.$refs.email.value,
        password : this.$refs.password.value,
      });
    },
  },
  mounted () {
    this.id = this._uid
  }
}
</script>