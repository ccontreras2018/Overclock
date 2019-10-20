<template>
  <div >
    <b-navbar toggleable="md" type="dark" variant="info">
      <b-navbar-brand :to="{name: 'home'}">Overclock</b-navbar-brand>


      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
          <input type="text" class="form-control" placeholder="Buscar">
          <b-nav-item :to="{name: 'cargar'}">Cargar</b-nav-item>
          <b-nav-item :to="{name: 'descargar'}">Descargar</b-nav-item>
        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item :to="{name: 'about'}">About</b-nav-item>
          <b-nav-item-dropdown right>
            <!-- Using 'button-content' slot -->
            <template v-slot:button-content>
              <em>User</em>
            </template>
            <b-dropdown-item href="#">Profile</b-dropdown-item>
            <b-dropdown-item href="#">Sign Out</b-dropdown-item>
          </b-nav-item-dropdown>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
    <router-view/>
  </div>
</template>

<script>
export default {
  name:'Helloworld'
}
</script>