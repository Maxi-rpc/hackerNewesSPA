@extends('layouts.app')
@section('content')
<main>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <router-link to="/" class="navbar-brand">
            <img
                src="https://vuejs.org/images/logo.svg"
                alt=""
                width="30"
                height="24"
            />
        </router-link>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <router-link
                        exact
                        to="/"
                        class="nav-link"
                        >Noticias</router-link
                    >
                </li>
                <li class="nav-item" v-if='!this.user'>
                    <router-link
                        to="/login"
                        class="nav-link"
                        >Login</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        
                        to="/register"
                        class="nav-link"
                        >Registrar</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        
                        to="/favoritos"
                        class="nav-link"
                        >Favoritos</router-link
                    >
                </li>
            </ul>
        </div>
    </nav>
</main>
<div class="container mt-3">
    <router-view></router-view>
</div>
<script>
    export default {
        name: "home",
        data() {
            return {
                user: null
            };
        },
        mounted() {
            axios.get("/api/user").then(res => {
                this.user = res.data;
            });
        },
        
    };
    </script>    
@endsection