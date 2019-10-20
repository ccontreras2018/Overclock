<template>
<b-container>
  <div class="mt-5">
    <b-row>
      <b-col>
          <template>
            <b-form-file multiple :file-name-formatter="formatNames"></b-form-file>
          </template>
      </b-col>
    </b-row>
    <b-row>
    </b-row>
  </div>
</b-container>
</template>

<script>
export default {
  name: 'cargar',
  methods: {
      formatNames(files) {
        if (files.length === 1) {
          return files[0].name
        } else {
          return `${files.length} files selected`
        }
      }
    }
}
</script>