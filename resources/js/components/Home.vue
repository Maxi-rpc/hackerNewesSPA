<template>
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="font-weight-bold">
                Noticias
            </h1>
            <button @click.prevent="logout()" class="btn btn-primary">
                Logout
            </button>
        </div>

        <div class="col-12" v-if="message != ''">
            <div
                class="alert alert-warning alert-dismissible fade show"
                role="alert"
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
        </div>

        <div class="col-6 my-2" v-for="noticia in noticias">
            <div class="card card-dark">
                <div class="card-body">
                    <div class="card-title">{{ noticia.title }}</div>
                </div>
                <div class="card-footer">
                    <button
                        @click.prevent="guardar(noticia)"
                        class="btn btn-sm btn-primary"
                    >
                        Agregar a favorito
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "home",
    data() {
        return {
            noticias: [],
            message: "",
            user: null
        };
    },
    mounted() {
        axios.get("/api/user").then(res => {
            this.user = res.data;
        });
        this.listarNoticias();
    },
    methods: {
        logout() {
            axios.post("/api/logout").then(() => {
                this.$router.push({ name: "login" });
            });
        },
        listarNoticias() {
            axios
                .get("api/noticias")
                .then(response => {
                    this.noticias = response.data;
                })
                .catch(error => {
                    this.message = error;
                });
        },
        guardar(noticia) {
            axios
                .post("api/favorito", {
                    user: this.user,
                    noticia: noticia
                })
                .then(response => {
                    this.message = response.data;
                })
                .catch(error => {
                    this.message = error;
                });
        }
    }
};
</script>
