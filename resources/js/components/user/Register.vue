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
                    <form @submit.prevent="registrar" v-csrf-token>
                        <div class="form-group">
                            <label>Email</label>
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                v-model="user.email"
                            />
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                v-model="user.name"
                            />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                v-model="user.password"
                            />
                        </div>

                        <div class="form-group">
                            <label>Confirmar Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="password_confirmation"
                                v-model="user.password_confirmation"
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
            user: {
                name: "",
                email: "",
                password: "",
                password_confirmation: ""
            },
            message: ""
        };
    },
    methods: {}
};
</script>
