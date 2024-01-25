<template>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div
              class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3"
            >
              <h6 class="text-white text-capitalize ps-3">Data Penjurusan</h6>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mt-4">
              <div class="table-responsive px-2">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Siswa</th>
                      <th>Penjurusan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(data, index) in Jurusan" v-bind:key="index">
                      <td>{{ index + 1 }}</td>
                      <td>{{ data.name }}</td>
                      <td>{{ data.jurusan }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "jurusan",
  data() {
    return {
      Jurusan: {
        name: null,
        jurusan: null,
      },
    };
  },
  created() {
    this.getJurusan();
  },
  methods: {
    getJurusan() {
      axios
        .get(
          "http://localhost/vue-material-dashboard-2-main/src/Api/api.php?action=getjurusan"
        )
        .then((res) => {
          console.log(res.data.jurusan_Data);
          this.Jurusan = res.data.jurusan_Data;
        });
    },
  },
};
</script>
