<template>
  <section class="header">
    <div class="left">
      <inertia-link :href="route('casa')">
        <img src="/images/app/header/logo_cuca.png">
      </inertia-link>
    </div>
    <nav>
      <inertia-link :href="route('sobre.show')">Sobre Nós</inertia-link>
      <inertia-link :href="route('receitas.show')">Receitas</inertia-link>
    </nav>
    <div class="right">
      <form>
        <input type="text" name="" id="">
        <button type="submit">
          <!-- ICONE -->
        </button>
      </form>
    </div>
  </section>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.header{
  background-color: $orange;
  @include Fonte2;

  display: grid;
  grid-template-columns: 1fr 4fr 1fr;
  align-items: center;

  .left{
    a{
      img{
        width: 12vw;
        margin: 0.5vw 0 0.5vw 1.5vw;
      }
    }
  }
  nav{
    display: flex;
    justify-content: center;
    gap: 2vw;

    a{
      color: white;
      font-size: 1.8vw;
    }
  }
  .right{
    form{
      display: flex;
      align-items: center;
    }
  }
}
</style>