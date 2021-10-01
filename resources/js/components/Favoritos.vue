<template>
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="font-weight-bold">Favoritos</h1>
            <p>
                Listado de favoritos de <span>{{ this.user.email }}</span>
            </p>
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

        <div class="col-12 my-2" v-for="favorito in favoritos">
            <div class="card card-dark">
                <div class="card-body">
                    <div class="card-title">{{ favorito.title }}</div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary">
                        Eliminar de favorito
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "favorito",
    data() {
        return {
            favoritos: [],
            message: "",
            user: null
        };
    },
    mounted() {
        axios.get("/api/user").then(res => {
            this.user = res.data;
        });
        this.listar();
    },
    methods: {
        async listar() {
            await axios
                .get("api/favoritos")
                .then(response => {
                    this.favoritos = response.data;
                    console.log(response);
                })
                .catch(error => {
                    this.message = error;
                });
        }
    }
};
</script>
