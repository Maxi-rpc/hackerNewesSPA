//home
import Home from "./components/Home.vue";
//favoritos
import Favoritos from "./components/Favoritos.vue";
//user
import Login from "./components/user/Login.vue";
import Register from "./components/user/Register.vue";
//error 404
import NotFound from "./components/Notfound.vue";

export default {
    mode: "history",
    linkActiveClass: "active",
    routes: [
        {
            name: "notfound",
            path: "*",
            component: NotFound
        },
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
