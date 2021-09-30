<template>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h1 class="text-center font-weight-bold">
                        Registrar Usuario
                    </h1>
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
                    <form @submit.prevent="registrar">
                        <div class="form-group">
                            <label>Email</label>
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                v-model="form.email"
                            />
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                v-model="form.name"
                            />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                v-model="form.password"
                            />
                        </div>

                        <div class="form-group">
                            <label>Confirmar Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="password_confirmation"
                                v-model="form.password_confirmation"
                            />
                        </div>

                        <button type="submit" class="btn btn-secondary">
                            Registrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "register",
    data() {
        return {
            form: {
                name: "",
                email: "",
                password: "",
                password_confirmation: ""
            },
            errors: []
        };
    },
    methods: {
        registrar() {
            axios
                .post("/api/register", this.form)
                .then(() => {
                    console.log("saved");
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                });
        }
    }
};
</script>
