<template>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h1 class="text-center font-weight-bold">Iniciar Sesion</h1>
                    <div
                        class="alert alert-warning alert-dismissible fade show"
                        role="alert"
                        v-if="errors != ''"
                    >
                        <strong>{{ errors }}</strong>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="alert"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="login">
                        <div class="form-group">
                            <label>Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                v-model="form.email"
                            />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                v-model="form.password"
                            />
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Iniciar
                        </button>
                        <router-link to="/register" class="btn btn-secondary"
                            >Registrar</router-link
                        >
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "login",
    data() {
        return {
            form: {
                email: "",
                password: ""
            },
            errors: []
        };
    },
    methods: {
        login() {
            axios
                .post("/api/login", this.form)
                .then(() => {
                    this.$router.push({ name: "home" });
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                });
        }
    }
};
</script>
