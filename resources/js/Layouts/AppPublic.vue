<template>
    <Header/>

    <main>
        <slot></slot>
    </main>

    <Footer/>
</template>

<script>
import Header from "@/Components/Layouts/Header";
import Footer from "@/Components/Layouts/Footer";

export default {
    components:{
        Header,
        Footer,
    }
}
</script>

<style>

</style>