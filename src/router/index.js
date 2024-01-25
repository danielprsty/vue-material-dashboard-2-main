import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import Input from "../views/Input.vue";
import Siswa from "../views/Siswa.vue";
import Kriteria from "../views/Kriteria.vue";
import Jurusan from "../views/Jurusan.vue";

import SignIn from "../views/SignIn.vue";
import SignUp from "../views/SignUp.vue";

const routes = [
  {
    path: "/",
    name: "SignIn",
    component: SignIn
  },
  {
    path: "/home",
    name: "Home",
    component: Home
  },
  {
    path: "/input",
    name: "Input Data Siswa",
    component: Input,
  },
  {
    path: "/siswa",
    name: "Data Siswa",
    component: Siswa,
  },
  {
    path: "/kriteria",
    name: "Data Kriteria",
    component: Kriteria,
  },
  {
    path: "/jurusan",
    name: "Data Penjurusan",
    component: Jurusan,
  },
  {
    path: "/logout",
    name: "SignIn",
    component: SignIn,
  },
  
  {
    path: "/sign-up",
    name: "SignUp",
    component: SignUp,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
  linkActiveClass: "active",
});

export default router;
