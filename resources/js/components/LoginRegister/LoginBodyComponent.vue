<template>
    <form action="api/login" method="post" class="form form-login">
        <div class="form-field">
            <label class="user" for="login-email">
                <font-awesome-icon icon="at"></font-awesome-icon>
                <span class="hidden">Adresse email</span>
            </label>
            <input id="login-email" type="email" class="form-input" v-model="email" placeholder="Adresse email" required>
        </div>

        <div class="form-field">
            <label class="lock" for="login-password">
                <font-awesome-icon icon="lock"></font-awesome-icon>
                <span class="hidden">Mot de passe</span>
            </label>
            <input id="login-password" type="password" class="form-input" v-model="password" placeholder="Mot de passe" required>
        </div>

        <div class="form-field">
            <input type="button" v-on:click="login" value="Connexion">
        </div>
    </form>
</template>

<style lang="scss" scoped>
input {
  border: 0;
  color: inherit;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  -webkit-transition: background-color .3s;
  transition: background-color .3s;
}

.user:before {
    font: 14px;
    color: #5b5b5b;
}

.lock:before {
    font: 14px;
    color: #5b5b5b;
}

.form input[type="password"], .form input[type="email"], .form input[type="button"] {
  width: 100%;
}

.form-login label,
.form-login input[type="email"],
.form-login input[type="password"],
.form-login input[type="button"] {
  border-radius: 0.25rem;
  padding: 1rem;
  color: #3A3F44;  
}

.form-login label {
  background-color: #222222;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.form-login input[type="email"], .form-login input[type="password"] {
  background-color: #ffffff;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.form-login input[type="email"]:focus, .form-login input[type="email"]:hover, .form-login input[type="password"]:focus, .form-login input[type="password"]:hover {
  background-color: #eeeeee;
}
.form-login input[type="button"] {
  background-color: #00B9BC;
  color: #eee;
  font-weight: bold;
  text-transform: uppercase;
}
.form-login input[type="button"]:focus, .form-login input[type="button"]:hover {
  background-color: #197071;
}
.form-field {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 2rem;
}
.hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
</style>

<script>
    import { mapState } from 'vuex'

    export default {
        data() {
            return {
                email : '',
                password : '',
            }
        },
        computed: mapState({
            token: state => state.user.token
        }),
        methods: {
            login(){
                this.$store.dispatch( 'user/login', {
                    email    : this.$data.email,
                    password : this.$data.password,
                });
            },
        },
        mounted() {
          // console.log(this.$router);
        },
    }
</script>