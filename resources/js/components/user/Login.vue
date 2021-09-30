<template>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card mt-3">
                <div class="card-body">
                    <h1 class="text-center font-weight-bold">Iniciar Sesion</h1>
                    <div
                        class="alert alert-warning alert-dismissible fade show"
                        role="alert"
                        v-if="message != ''"
                    >
                        <strong>{{ message }}</strong>
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
                                v-model="user.email"
                            />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                v-model="user.password"
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
            user: {
                email: "",
                password: ""
            },
            message: ""
        };
    },
    mounted() {},
    methods: {}
};
</script>
