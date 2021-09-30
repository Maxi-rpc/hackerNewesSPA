<template>
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="font-weight-bold">Favoritos</h1>
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
    mounted() {},
    methods: {}
};
</script>
