<template>
  <navbar btnBackground="bg-gradient-success" />
  <div class="page-header align-items-start min-vh-100">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div
                class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1"
              >
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">
                  Students Management
                </h4>
                <div class="row mt-3"></div>
              </div>
            </div>
            <div class="card-body">
              <form class="text-start mt-3" method="POST" action="">
                <div class="mb-3">
                  <label fir="User">User Name</label>
                  <input
                    type="text"
                    placeholder="Username"
                    id="User"
                    class="form-control"
                    name="username"
                    v-model="Admin.username"
                  />
                </div>
                <div class="mb-3">
                  <label fir="User">Password</label>
                  <input
                    type="password"
                    placeholder="******"
                    id="User"
                    class="form-control"
                    name="password"
                    v-model="Admin.password"
                  />
                </div>
                <div class="text-center">
                  <button
                    class="btn btn-success btn-sm float-right"
                    @click.prevent="onLogin()"
                  >
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

import { mapMutations } from "vuex";

export default {
  name: "SignIn",
  data() {
    return {
      Admin: {
        username: null,
        password: null,
      },
    };
  },
  components: {},
  beforeMount() {
    this.toggleEveryDisplay();
    this.toggleHideConfig();
  },
  beforeUnmount() {
    this.toggleEveryDisplay();
    this.toggleHideConfig();
  },
  methods: {
    ...mapMutations(["toggleEveryDisplay", "toggleHideConfig"]),
    onLogin() {
      var data = new FormData();
      data.append("username", this.Admin.username);
      data.append("password", this.Admin.password);
      axios
        .post(
          "http://localhost/vue-material-dashboard-2-main/src/Api/api.php?action=login",
          data
        )
        .then((res) => {
          if (res.data.error) {
            console.log("Error", res.data);
            window.alert("Login Gagal!Username & Password tidak sesuai");
          } else {
            console.log("Success", res.data.message);
            this.$router.push("/home");
            window.alert("Login Berhasil!!!");
          }
        })
        .catch((err) => {
          console.log("Error", err);
        });
    },
  },
};
</script>
