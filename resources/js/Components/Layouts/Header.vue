<template>
  <h1>Header</h1>
  <inertia-link :href="route('sobre.show')">Sobre!</inertia-link>
  <inertia-link :href="route('casa')">Home!</inertia-link>
  <inertia-link :href="route('receitas.show')">Receitas!</inertia-link>
  <inertia-link :href="route('pesquisa.show')">Pesquisa!</inertia-link>
</template>

<script>
export default {

}
</script>

<style>

</style>