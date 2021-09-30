<template>
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="font-weight-bold">Error 404</h1>
            <h3>Sitio no disponible</h3>
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
    </div>
</template>
<script>
export default {
    name: "notfound",
    data() {
        return {
            message: ""
        };
    },
    mounted() {},
    methods: {}
};
</script>
