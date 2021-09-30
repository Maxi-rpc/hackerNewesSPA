//home
import Home from "./components/Home.vue";
//favoritos
import Favoritos from "./components/Favoritos.vue";
//user
import Login from "./components/user/Login.vue";
import Register from "./components/user/Register.vue";

export default {
    mode: "history",
    routes: [
        {
            name: "home",
            path: "/",
            component: Home
        },
        {
            name: "favoritos",
            path: "/favoritos",
            component: Favoritos
        },
        {
            name: "login",
            path: "/login",
            component: Login
        },
        {
            name: "register",
            path: "/register",
            component: Register
        }
    ]
};
