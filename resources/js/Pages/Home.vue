<template>
    <app-public>
        <section id="s1">
            <div id="s1_banner">
                <h3>Frase bem Bonita</h3>
            </div>
        </section>
        <section id="s2" class="sec">
            <div>
                <p>
                    Mussum Ipsum, cacilds vidis litro abertis. Si u mundo tá
                    muito paradis? Toma um mé que o mundo vai girarzis! Pra lá ,
                    depois divoltis porris, paradis. Nullam volutpat risus nec
                    leo commodo, ut interdum diam laoreet. Sed non consequat
                    odio. Posuere libero varius.
                </p>
                <img src="/images/app/home/img1.jpg" />
            </div>
        </section>
        <section id="s3">
            <h2>A História da Cuca</h2>
            <div id="quote_block">
                <p>
                    Mussum Ipsum, cacilds vidis litro abertis. Si u mundo tá
                    muito paradis? Toma um mé que o mundo vai girarzis! Pra lá ,
                    depois divoltis porris, paradis. Nullam volutpat risus nec
                    leo commodo, ut interdum diam laoreet. Sed non consequat
                    odio. Posuere libero varius. Nullam a nisl ut ante blandit
                    hendrerit. Aenean sit amet nisi.
                </p>
            </div>
        </section>
    </app-public>
</template>

<script>
import AppPublic from "@/Layouts/AppPublic";

export default {
    data() {
        return {};
    },
    components: {
        AppPublic,
    },
};
</script>

<style lang="scss" scoped>
.sec {
    margin: 2vw 0 2vw 0;
}

#s1 {
    #s1_banner {
        background-image: url("/images/app/home/banner.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;

        height: 30vw;
        background-position-y: 17%;
        background-position-x: 50%;

        display: flex;
        justify-content: space-around;

        h3 {
            @include Titulo1;
            font-size: 5vw;
            color: white;
            width: fit-content;
            margin: auto;
        }
    }
}

#s2 {
    padding: 2vw;
    margin-bottom: 16vw;

    div {
        display: flex;
        border-radius: 1vw;
        background-color: $brown1;
        width: 68%;
        padding: 3vw;

        p {
            width: 100%;
            color: white;
            font-size: 1.6vw;
            text-align: justify;
            padding-right: 15%;
        }
        img {
            position: absolute;
            width: 30vw;
            right: 6vw;
        }
    }
}

#s3 {
    padding: 2vw;

    h2{
        @include Titulo2;
        font-size: 3.4vw;
        margin-bottom: 0.5vw;
    }
    #quote_block{
        padding: 1.8vw;
        background-color: $orange;
        // box-shadow 

        p{
            font-size: 1.6vw;
            color: white;
        }
    }
}
</style>
