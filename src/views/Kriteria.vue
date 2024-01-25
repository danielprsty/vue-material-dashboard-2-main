<template>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div
              class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3"
            >
              <h6 class="text-white text-capitalize ps-3">
                Bobot Perbandingan Berpasangan
              </h6>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mt-4">
              <div class="table-responsive px-2">
                <form action="" method="POST">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Kriteria</th>
                        <th>Minat</th>
                        <th>Nilai</th>
                        <th>Psikotes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>IPA</td>
                        <td><input id="minat1" /></td>
                        <td><input id="minat2" /></td>
                        <td><input id="minat3" /></td>
                      </tr>
                      <tr>
                        <td>IPS</td>
                        <td><input id="nilai1" /></td>
                        <td><input id="nilai2" /></td>
                        <td><input id="nilai3" /></td>
                      </tr>
                      <tr>
                        <td>Jumlah</td>
                        <td>
                          <input id="jumlah1" v-on:keyup="jumlah_1()" />
                        </td>
                        <td><input id="jumlah2" v-on:keyup="jumlah_2()" /></td>
                        <td><input id="jumlah3" v-on:keyup="jumlah_3()" /></td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div
              class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3"
            >
              <h6 class="text-white text-capitalize ps-3">
                Matrik Nilai Kriteria
              </h6>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mt-4">
              <div class="table-responsive px-2">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Kriteria</th>
                      <th>Minat</th>
                      <th>Nilai</th>
                      <th>Psikotes</th>
                      <th>Jumlah</th>
                      <th>Prioritas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>IPA</td>
                      <td><input id="k_minat1" v-on:keyup="k_minat_1()" /></td>
                      <td><input id="k_minat2" v-on:keyup="k_minat_2()" /></td>
                      <td><input id="k_minat3" v-on:keyup="k_minat_3()" /></td>
                      <td><input id="k_minat4" v-on:keyup="jml_minat()" /></td>
                      <td>
                        <input
                          id="k_minat5"
                          v-model="Jurusan.prioritas1"
                          v-on:keyup="jml_minat_bobot()"
                        />
                      </td>
                    </tr>
                    <tr>
                      <td>IPS</td>
                      <td><input id="k_nilai1" v-on:keyup="k_nilai_1()" /></td>
                      <td><input id="k_nilai2" v-on:keyup="k_nilai_2()" /></td>
                      <td><input id="k_nilai3" v-on:keyup="k_nilai_3()" /></td>
                      <td><input id="k_nilai4" v-on:keyup="jml_nilai()" /></td>
                      <td>
                        <input
                          id="k_nilai5"
                          v-model="Jurusan.prioritas2"
                          v-on:keyup="jml_nilai_bobot()"
                        />
                      </td>
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

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div
              class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3"
            >
              <h6 class="text-white text-capitalize ps-3">
                Matrik Penjumlahan Setiap Baris
              </h6>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mt-4">
              <div class="table-responsive px-2">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Kriteria</th>
                      <th>Minat</th>
                      <th>Nilai</th>
                      <th>Psikotes</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>IPA</td>
                      <td><input id="b_minat1" v-on:keyup="b_minat_1()" /></td>
                      <td><input id="b_minat2" v-on:keyup="b_minat_2()" /></td>
                      <td><input id="b_minat3" v-on:keyup="b_minat_3()" /></td>
                      <td>
                        <input id="b_minat4" v-on:keyup="jml_b_minat()" />
                      </td>
                    </tr>
                    <tr>
                      <td>IPS</td>
                      <td><input id="b_nilai1" v-on:keyup="b_nilai_1()" /></td>
                      <td><input id="b_nilai2" v-on:keyup="b_nilai_2()" /></td>
                      <td><input id="b_nilai3" v-on:keyup="b_nilai_3()" /></td>
                      <td>
                        <input id="b_nilai4" v-on:keyup="jml_b_nilai()" />
                      </td>
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

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div
              class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3"
            >
              <h6 class="text-white text-capitalize ps-3">Rasio Konsistensi</h6>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mt-4">
              <div class="table-responsive px-2">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Kriteria</th>
                      <th>Jml/Baris</th>
                      <th>Prioritas</th>
                      <th>Hasil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>IPA</td>
                      <td><input id="x_minat" v-on:keyup="jml_b_minat()" /></td>
                      <td>
                        <input id="y_minat" v-on:keyup="jml_minat_bobot()" />
                      </td>
                      <td><input id="z_minat" v-on:keyup="minat_hasil()" /></td>
                    </tr>
                    <tr>
                      <td>IPS</td>
                      <td><input id="x_nilai" v-on:keyup="jml_b_nilai()" /></td>
                      <td>
                        <input id="y_nilai" v-on:keyup="jml_nilai_bobot()" />
                      </td>
                      <td><input id="z_nilai" v-on:keyup="nilai_hasil()" /></td>
                    </tr>
                    <tr>
                      <td>Jumlah</td>
                      <td></td>
                      <td></td>
                      <td>
                        <input id="final" v-on:keyup="hasil_akhir()" />
                      </td>
                    </tr>
                    <tr></tr>
                    <tr>
                      <td>λ Maks</td>
                      <td><input id="maks" v-on:keyup="hasil_maks()" /></td>
                    </tr>
                    <tr>
                      <td>CI</td>
                      <td><input id="ci" v-on:keyup="hasil_ci()" /></td>
                    </tr>
                    <tr>
                      <td>CR</td>
                      <td><input id="cr" v-on:keyup="hasil_cr()" /></td>
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

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div
              class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3"
            >
              <h6 class="text-white text-capitalize ps-3">Penentuan Jurusan</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            <form action="" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Nama Siswa</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name="name"
                    placeholder="Nama Lengkap"
                    v-model="Jurusan.name"
                  />
                </div>

                <div class="card-footer px-2 pb-2">
                  <button type="button" class="btn btn-success" @click="Save()">
                    Simpan
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "kriteria",
  data() {
    return {
      Jurusan: {
        name: null,
        prioritas1: null,
        prioritas2: null,
      },
    };
  },
  created() {
    this.getKriteria();
  },
  components: {},
  methods: {
    Save() {
      let data = new FormData();
      data.append("name", this.Jurusan.name);
      data.append("prioritas1", this.Jurusan.prioritas1);
      data.append("prioritas2", this.Jurusan.prioritas2);

      axios
        .post(
          "http://localhost/vue-material-dashboard-2-main/src/Api/api.php?action=save_jurusan",
          data
        )
        .then((res) => {
          if (res.data.error) {
            alert("Error");
          } else {
            alert("Tersimpan");
            window.location = "/jurusan";
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },
    jumlah_1() {
      var minat1 = document.getElementById("minat1").value;
      var nilai1 = document.getElementById("nilai1").value;
      var total = parseFloat(minat1) + parseFloat(nilai1);
      document.getElementById("jumlah1").value = parseFloat(total);
    },
    jumlah_2() {
      var minat2 = document.getElementById("minat2").value;
      var nilai2 = document.getElementById("nilai2").value;

      var total = parseFloat(minat2) + parseFloat(nilai2);
      document.getElementById("jumlah2").value = parseFloat(total);
    },
    jumlah_3() {
      var minat3 = document.getElementById("minat3").value;
      var nilai3 = document.getElementById("nilai3").value;

      var total = parseFloat(minat3) + parseFloat(nilai3);
      document.getElementById("jumlah3").value = parseFloat(total);
    },
    k_minat_1() {
      var minat = document.getElementById("minat1").value;
      var jumlah = document.getElementById("jumlah1").value;
      var total = parseFloat(minat) / parseFloat(jumlah);
      document.getElementById("k_minat1").value = parseFloat(total);
    },
    k_minat_2() {
      var minat = document.getElementById("minat2").value;
      var jumlah = document.getElementById("jumlah2").value;
      var total = parseFloat(minat) / parseFloat(jumlah);
      document.getElementById("k_minat2").value = parseFloat(total);
    },
    k_minat_3() {
      var minat = document.getElementById("minat3").value;
      var jumlah = document.getElementById("jumlah3").value;
      var total = parseFloat(minat) / parseFloat(jumlah);
      document.getElementById("k_minat3").value = parseFloat(total);
    },
    k_nilai_1() {
      var nilai = document.getElementById("nilai1").value;
      var jumlah = document.getElementById("jumlah1").value;
      var total = parseFloat(nilai) / parseFloat(jumlah);
      document.getElementById("k_nilai1").value = parseFloat(total);
    },
    k_nilai_2() {
      var nilai = document.getElementById("nilai2").value;
      var jumlah = document.getElementById("jumlah2").value;
      var total = parseFloat(nilai) / parseFloat(jumlah);
      document.getElementById("k_nilai2").value = parseFloat(total);
    },
    k_nilai_3() {
      var nilai = document.getElementById("nilai3").value;
      var jumlah = document.getElementById("jumlah3").value;
      var total = parseFloat(nilai) / parseFloat(jumlah);
      document.getElementById("k_nilai3").value = parseFloat(total);
    },
    jml_minat() {
      var minat = document.getElementById("k_minat1").value;
      var nilai = document.getElementById("k_minat2").value;
      var psikotes = document.getElementById("k_minat3").value;
      var total = parseFloat(minat) + parseFloat(nilai) + parseFloat(psikotes);
      document.getElementById("k_minat4").value = parseFloat(total);
    },
    jml_minat_bobot() {
      var jumlah = document.getElementById("k_minat4").value;
      var total = parseFloat(jumlah) / 3;
      document.getElementById("k_minat5").value = parseFloat(total);
      document.getElementById("y_minat").value = parseFloat(total);
    },
    jml_nilai() {
      var minat = document.getElementById("k_nilai1").value;
      var nilai = document.getElementById("k_nilai2").value;
      var psikotes = document.getElementById("k_nilai3").value;
      var total = parseFloat(minat) + parseFloat(nilai) + parseFloat(psikotes);
      document.getElementById("k_nilai4").value = parseFloat(total);
    },
    jml_nilai_bobot() {
      var jumlah = document.getElementById("k_nilai4").value;
      var total = parseFloat(jumlah) / 3;
      document.getElementById("k_nilai5").value = parseFloat(total);
      document.getElementById("y_nilai").value = parseFloat(total);
    },
    jml_psikotes() {
      var minat = document.getElementById("k_psikotes1").value;
      var nilai = document.getElementById("k_psikotes2").value;
      var psikotes = document.getElementById("k_psikotes3").value;
      var total = parseFloat(minat) + parseFloat(nilai) + parseFloat(psikotes);
      document.getElementById("k_psikotes4").value = parseFloat(total);
    },
    jml_psikotes_bobot() {
      var jumlah = document.getElementById("k_psikotes4").value;
      var total = parseFloat(jumlah) / 3;
      document.getElementById("k_psikotes5").value = parseFloat(total);
      document.getElementById("y_psikotes").value = parseFloat(total);
    },
    b_minat_1() {
      var minat = document.getElementById("minat1").value;
      var bobot = document.getElementById("k_minat5").value;
      var total = parseFloat(minat) * parseFloat(bobot);
      document.getElementById("b_minat1").value = parseFloat(total);
    },
    b_minat_2() {
      var minat = document.getElementById("minat2").value;
      var bobot = document.getElementById("k_minat5").value;
      var total = parseFloat(minat) * parseFloat(bobot);
      document.getElementById("b_minat2").value = parseFloat(total);
    },
    b_minat_3() {
      var minat = document.getElementById("minat3").value;
      var bobot = document.getElementById("k_minat5").value;
      var total = parseFloat(minat) * parseFloat(bobot);
      document.getElementById("b_minat3").value = parseFloat(total);
    },
    b_nilai_1() {
      var nilai = document.getElementById("nilai1").value;
      var bobot = document.getElementById("k_nilai5").value;
      var total = parseFloat(nilai) * parseFloat(bobot);
      document.getElementById("b_nilai1").value = parseFloat(total);
    },
    b_nilai_2() {
      var nilai = document.getElementById("nilai2").value;
      var bobot = document.getElementById("k_nilai5").value;
      var total = parseFloat(nilai) * parseFloat(bobot);
      document.getElementById("b_nilai2").value = parseFloat(total);
    },
    b_nilai_3() {
      var nilai = document.getElementById("nilai3").value;
      var bobot = document.getElementById("k_nilai5").value;
      var total = parseFloat(nilai) * parseFloat(bobot);
      document.getElementById("b_nilai3").value = parseFloat(total);
    },
    b_psikotes_1() {
      var psikotes = document.getElementById("kriteria1").value;
      var bobot = document.getElementById("k_minat5").value;
      var total = parseFloat(psikotes) * parseFloat(bobot);
      document.getElementById("b_psikotes1").value = parseFloat(total);
    },
    b_psikotes_2() {
      var psikotes = document.getElementById("kriteria2").value;
      var bobot = document.getElementById("k_nilai5").value;
      var total = parseFloat(psikotes) * parseFloat(bobot);
      document.getElementById("b_psikotes2").value = parseFloat(total);
    },
    b_psikotes_3() {
      var psikotes = document.getElementById("kriteria3").value;
      var bobot = document.getElementById("k_psikotes5").value;
      var total = parseFloat(psikotes) * parseFloat(bobot);
      document.getElementById("b_psikotes3").value = parseFloat(total);
    },
    jml_b_minat() {
      var minat = document.getElementById("b_minat1").value;
      var nilai = document.getElementById("b_minat2").value;
      var psikotes = document.getElementById("b_minat3").value;
      var total = parseFloat(minat) + parseFloat(nilai) + parseFloat(psikotes);
      document.getElementById("b_minat4").value = parseFloat(total);
      document.getElementById("x_minat").value = parseFloat(total);
    },
    jml_b_nilai() {
      var minat = document.getElementById("b_nilai1").value;
      var nilai = document.getElementById("b_nilai2").value;
      var psikotes = document.getElementById("b_nilai3").value;
      var total = parseFloat(minat) + parseFloat(nilai) + parseFloat(psikotes);
      document.getElementById("b_nilai4").value = parseFloat(total);
      document.getElementById("x_nilai").value = parseFloat(total);
    },

    minat_hasil() {
      var baris = document.getElementById("x_minat").value;
      var bobot = document.getElementById("y_minat").value;
      var total = parseFloat(baris) + parseFloat(bobot);
      document.getElementById("z_minat").value = parseFloat(total);
    },
    nilai_hasil() {
      var baris = document.getElementById("x_nilai").value;
      var bobot = document.getElementById("y_nilai").value;
      var total = parseFloat(baris) + parseFloat(bobot);
      document.getElementById("z_nilai").value = parseFloat(total);
    },

    hasil_akhir() {
      var minat = document.getElementById("z_minat").value;
      var nilai = document.getElementById("z_nilai").value;

      var total = parseFloat(minat) + parseFloat(nilai);
      document.getElementById("final").value = parseFloat(total);
    },
    hasil_maks() {
      var jumlah = document.getElementById("final").value;
      var total = parseFloat(jumlah) / 3;
      document.getElementById("maks").value = parseFloat(total);
    },
    hasil_ci() {
      var maks = document.getElementById("maks").value;
      var total = (parseFloat(maks) - 3) / 3;
      document.getElementById("ci").value = parseFloat(total);
    },
    hasil_cr() {
      var ci = document.getElementById("ci").value;
      var total = parseFloat(ci) / 0.58;
      document.getElementById("cr").value = parseFloat(total);
    },
    getKriteria() {
      axios
        .get("http://localhost/spk_vue/src/Api/api.php?action=getkriteria")
        .then((res) => {
          console.log(res.data.kriteria_Data);
          this.Kriteria = res.data.kriteria_Data;
        });
    },
  },
};
</script>
