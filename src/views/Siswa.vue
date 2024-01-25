<template>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div
              class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3"
            >
              <h6 class="text-white text-capitalize ps-3">Data Siswa</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            <div class="form-row">
              <div class="col-md-12 mt-4">
                <div class="table-responsive px-2">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="(data, index) in Student" v-bind:key="index">
                        <td>{{ index + 1 }}</td>
                        <td>{{ data.name }}</td>
                        <td>{{ data.class }}</td>
                        <td>
                          <button
                            class="btn btn-warning btn-sm"
                            value=""
                            @click="Edit(data)"
                          >
                            <i class="material-icons-round opacity-10 fs-5"
                              >create</i
                            ></button
                          >&nbsp;
                          <button
                            class="btn btn-danger btn-sm"
                            @click="Hapus(data)"
                          >
                            <i class="material-icons-round opacity-10 fs-5"
                              >delete</i
                            >
                          </button>
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
  </div>
  <div class="modal" id="Edit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update Data Siswa</h5>
        </div>
        <div class="modal-body">
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
                  v-model="Student.name"
                />
              </div>
              <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Kelas</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  name="class"
                  placeholder="Kelas Siswa"
                  v-model="Student.class"
                />
              </div>
              <!-- <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Minat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="minat" placeholder="Minat Siswa" v-model="Student.minat">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Nilai</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nilai" placeholder="Nilai Siswa" v-model="Student.nilai">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Psikotes</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="psikotes" placeholder="Psikotes Siswa" v-model="Student.psikotes">
              </div> -->
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" @click="Update()">
            Save changes
          </button>
          <button type="button" class="btn btn-secondary" @click="Close()">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "student",
  data() {
    return {
      Student: {
        name: null,
        class: null,
      },
    };
  },
  created() {
    this.getStudent();
  },
  methods: {
    selectStudent(id) {
      this.currentStudent = id;
    },
    Edit(id) {
      this.Student = id;
      window.jQuery("#Edit").modal("show");
    },
    Update() {
      let data = new FormData();
      data.append("id", this.Student.id);
      data.append("name", this.Student.name);
      data.append("class", this.Student.class);
      axios
        .post("http://localhost/spk_vue/src/Api/api.php?action=update", data)
        .then((res) => {
          if (res.data.error) {
            alert("Error");
          } else {
            alert("TerUpdate");
            window.location = "/siswa";
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },
    Close() {
      window.location.reload();
      window.jQuery("#Edit").modal("hide");
    },
    Hapus(id) {
      this.Student = id;
      let data = new FormData();
      data.append("id", this.Student.id);
      axios
        .post(
          "http://localhost/vue-material-dashboard-2-main/src/Api/api.php?action=delete",
          data
        )
        .then((res) => {
          if (res.data.error) {
            alert("Error");
          } else {
            alert("Terhapus");
            window.location = "/siswa";
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },
    getStudent() {
      axios
        .get(
          "http://localhost/vue-material-dashboard-2-main/src/Api/api.php?action=getstudent"
        )
        .then((res) => {
          console.log(res.data.student_Data);
          this.Student = res.data.student_Data;
        });
    },
  },
};
</script>
