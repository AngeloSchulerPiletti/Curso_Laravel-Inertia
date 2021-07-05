<template>
    <div class="container">
        <Header id="top" />

        <main id="middle">
            <slot></slot>
        </main>

        <Footer id="bottom" />
    </div>
</template>

<script>
import Header from "@/Components/Layouts/Header";
import Footer from "@/Components/Layouts/Footer";

export default {
    components: {
        Header,
        Footer,
    },
};
</script>

<style lang="scss" scoped>
.container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    min-height: 100vh;

    #top {
    }
    #middle {
        flex-grow: 1;
        height: 100%;
        background-color: $white;
    }
    #bottom {
    }
}
</style>
