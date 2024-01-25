<template>
  <div
    class="w-auto h-auto collapse navbar-collapse max-height-vh-100 h-100"
    id="sidenav-collapse-main"
  >
    <ul class="navbar-nav">
      <li class="nav-item">
        <sidenav-collapse
          url="#"
          :aria-controls="''"
          v-bind:collapse="false"
          collapseRef="home"
          navText="Home"
        >
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">home</i>
          </template>
        </sidenav-collapse>
      </li>
    
      <li class="nav-item">
        <sidenav-collapse
          url="#"
          :aria-controls="''"
          v-bind:collapse="false"
          collapseRef="input"
          navText="Input Data Siswa"
        >
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">group_add</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse
          url="#"
          :aria-controls="''"
          v-bind:collapse="false"
          collapseRef="siswa"
          navText="Data Siswa"
        >
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5"
              >group</i
            >
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse
          url="#"
          :aria-controls="''"
          v-bind:collapse="false"
          collapseRef="kriteria"
          navText="Data Kriteria"
        >
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">group</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse
          url="#"
          :aria-controls="''"
          v-bind:collapse="false"
          collapseRef="jurusan"
          navText="Hasil Penjurusan"
        >
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">group</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse
          url="#"
          :aria-controls="''"
          v-bind:collapse="false"
          collapseRef="logout"
          navText="Logout"
        >
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">exit_to_app</i>
          </template>
        </sidenav-collapse>
      </li>
    </ul>
   
  </div>
</template>
<script>
import SidenavCollapse from "./SidenavCollapse.vue";

export default {
  name: "SidenavList",
  props: {
    cardBg: String
  },
  data() {
    return {
      title: "Soft UI Dashboard PRO",
      controls: "dashboardsExamples",
      isActive: "active"
    };
  },
  components: {
    SidenavCollapse
  }
};
</script>
