<template>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div
              class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3"
            >
              <h6 class="text-white text-capitalize ps-3">Tambah Data</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            <form action="" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlInput1" class="form-label">Nama Siswa</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Nama Lengkap" v-model="Student.name">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlTextarea1" class="form-label">Kelas</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="class" placeholder="Kelas Siswa" v-model="Student.class">
                </div>
                <div class="form-group col-md-6">
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
                </div>
                <div class="card-footer px-2 pb-2">
                <button type="button" class="btn btn-success" @click="Save()">Simpan</button>
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
  name: "Input",
  data()  {
    return  {
      Student:{
        name:null,
        class:null,
        minat:null,
        nilai:null,
        psikotes:null
      }
    }
  },
  methods:{
    Save(){
      let data= new FormData();
      data.append("name" ,this.Student.name);
      data.append("class" ,this.Student.class);
      data.append("minat" ,this.Student.minat);
      data.append("nilai" ,this.Student.nilai);
      data.append("psikotes" ,this.Student.psikotes);
      axios.post("http://localhost/spk_vue/src/Api/api.php?action=save",data).then((res)=>{
        if(res.data.error){
          alert("Error");
        }else{
          alert("Tersimpan");
          window.location.reload();
        }
      }).catch((err)=>{
        console.log(err);
      })
      
    }
  }
};
</script>
