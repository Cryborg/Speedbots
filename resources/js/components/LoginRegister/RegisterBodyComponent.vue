<template>
    <form action="api/register" method="post" class="form form-register">
        <div class="form-field">
            <label class="user" for="register-email">
                <font-awesome-icon icon="at"></font-awesome-icon>
                <span class="hidden">Mail address</span>
            </label>
            <input id="register-email" type="email" class="form-input" v-model.lazy="email" placeholder="Mail address" required>
            <div class="form-field-error-info" v-if="!$v.email.email">Mail address must be valid.</div>
        </div>

        <div class="form-field">
            <label class="user" for="register-username">
                <font-awesome-icon icon="user"></font-awesome-icon>
                <span class="hidden">Username</span>
            </label>
            <input id="register-username" type="text" class="form-input" v-model.lazy="name" placeholder="Username" required>
            <div class="form-field-error-info" v-if="!$v.name.minLength">Name must have at least {{$v.name.$params.minLength.min}} letters.</div>
        </div>

        <div class="form-field">
            <label class="lock" for="register-password">
                <font-awesome-icon icon="lock"></font-awesome-icon>
                <span class="hidden">Password</span>
            </label>
            <input id="register-password" type="password" class="form-input" v-model.lazy="password" placeholder="Password" required>
            <div class="form-field-error-info" v-if="!$v.password.minLength">Password must have at least {{$v.password.$params.minLength.min}} characters.</div>
        </div>

        <div class="form-field">
            <label class="lock" for="register-password-confirm">
                <font-awesome-icon icon="lock"></font-awesome-icon>
                <span class="hidden">Repeat password</span>
            </label>
            <input id="register-password-confirm" type="password" class="form-input" v-model.lazy="repeatPassword" placeholder="Repeat password" required>
            <div class="form-field-error-info" v-if="!$v.repeatPassword.sameAsPassword">Passwords must be identical.</div>

        </div>

        <div class="form-field">
            <input type="button" v-on:click="register" value="Register">
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
  padding-bottom: 2rem;
  position: relative;
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
.form-field-error {
  border: solid 10px red;
}

.form-field-error-info {
  position : absolute;
  bottom : .5rem;
  color : red;
}
</style>

<script>
    import { mapState } from 'vuex'
    import { required, minLength, between, sameAsPassword, sameAs, email } from 'vuelidate/lib/validators'
    // @todo Request Validator
    export default {
        data() {
            return {
                email : '',
                name : '',
                password : '',
                repeatPassword : ''
            }
        },
        methods: {
            register(){
                if (this.$v.$invalid) {
                  console.log('@todo Retour erreur.');
                } else {
                  this.$store.dispatch( 'user/register', {
                    email    : this.$data.email,
                    name    : this.$data.name,
                    password : this.$data.password,
                  });
                }
            },
        },
        validations: {
          email : {
            required,
            email
          },
          name : {
            required,
            minLength : minLength(4)
          },
          password : {
            minLength : minLength(6)
          },
          repeatPassword: {
            required,
            sameAsPassword: sameAs('password')
          }
        },
        mounted() {
          // console.log(this.$router);
        },
    }
</script>