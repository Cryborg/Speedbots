<template>
    <form action="api/register" method="post" class="form form-register">
        <div class="form-field">
            <label class="user" for="register-email">
                <font-awesome-icon icon="at"></font-awesome-icon>
                <span class="hidden">Adresse email</span>
            </label>
            <input id="register-email" type="email" class="form-input" v-model="email" placeholder="Adresse email" required>
        </div>

        <div class="form-field">
            <label class="user" for="register-username">
                <font-awesome-icon icon="user"></font-awesome-icon>
                <span class="hidden">Pseudo</span>
            </label>
            <input id="register-username" type="text" class="form-input" v-model="name" placeholder="Pseudo" required>
        </div>

        <div class="form-field">
            <label class="lock" for="register-password">
                <font-awesome-icon icon="lock"></font-awesome-icon>
                <span class="hidden">Mot de passe</span>
            </label>
            <input id="register-password" type="password" class="form-input" v-model="password" placeholder="Mot de passe" required>
        </div>

        <div class="form-field">
            <label class="lock" for="register-password-confirm">
                <font-awesome-icon icon="lock"></font-awesome-icon>
                <span class="hidden">Confimer le mot de passe</span>
            </label>
            <input id="register-password-confirm" type="password" class="form-input" v-model="confirmPassword" placeholder="Confimer le mot de passe" required>
        </div>

        <div class="form-field">
            <input type="button" v-on:click="register" value="Inscription">
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

.form input[type="password"], .form input[type="email"], .form input[type="button"], .form input[type="text"]{
  width: 100%;
}

.form-register label,
.form-register input[type="email"],
.form-register input[type="text"],
.form-register input[type="password"],
.form-register input[type="button"] {
  border-radius: 0.25rem;
  padding: 1rem;
  color: #3A3F44;  
}

.form-register label {
  background-color: #222222;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.form-register input[type="email"], .form-register input[type="password"], .form-register input[type="text"] {
  background-color: #ffffff;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.form-register input[type="email"]:focus, .form-register input[type="email"]:hover, .form-register input[type="password"]:focus, .form-register input[type="password"]:hover, .form-register input[type="text"]:focus, .form-register input[type="text"]:hover {
  background-color: #eeeeee;
}
.form-register input[type="button"] {
  background-color: #00B9BC;
  color: #eee;
  font-weight: bold;
  text-transform: uppercase;
}
.form-register input[type="button"]:focus, .form-register input[type="button"]:hover {
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
    // @todo Request Validator
    export default {
        data() {
            return {
                email : '',
                name : '',
                password : '',
                confirmPassword : ''
            }
        },
        methods: {
            register(){
                this.$store.dispatch( 'user/register', {
                    email    : this.$data.email,
                    name    : this.$data.name,
                    password : this.$data.password,
                });
            },
        },
        mounted() {
          // console.log(this.$router);
        },
    }
</script>