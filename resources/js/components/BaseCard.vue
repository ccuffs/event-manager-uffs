<template>
    <div class="card">
        <img :src="cardImage" class="card__image">

        <a v-if="actionCard" class="card--action" :href="destinationUrl">
            <div class="">
                <p class="card__icon">
                    <i class="material-icons">add_circle</i>
                </p>
                <p>Novo Evento</p>
            </div>
        </a>

        <a v-else class="card--content" :href="destinationUrl">
            <svg class="card__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 500" preserveAspectRatio="none">
                <path
                    class="card__line-fill"
                    d="
                        M 0,100
                        Q 50,200,100,250
                        Q 250,400,350,300
                        C 400,250,550,150,650,300
                        Q 750,450,800,400
                        L 800,450
                        L 0,450
                    "/>

                <path
                    class="card__line"
                    d="
                        M 0,100
                        Q 50,200,100,250
                        Q 250,400,350,300
                        C 400,250,550,150,650,300
                        Q 750,450,800,400
                    "
                />
            </svg>

            <div class="card__body">
                <p class="card__title">
                    {{ title }}
                </p>

                <p class="card__description">
                    {{ description }}
                </p>

                <p class="card__date">
                    {{ date }}
                </p>
            </div>

            <div class="card__controls">
                <!-- <div class="btn-group">
                    <a href="#" class="btn btn--outline-primary">
                        <span>Visualizar</span>
                    </a>
                    <a href="#" class="btn btn--outline-success">
                        <span>Editar</span>
                    </a>
                    <a href="#" class="btn btn--outline-danger">
                        <span>Excluir</span>
                    </a>
                </div> -->
            </div>
        </a>
    </div>
</template>

<script>
export default {
    props: {
        "cardImage": {
            type: String,
            default: "https://www.showmetech.com.br/wp-content/uploads//2015/02/image_new-11.png",
        },

        "actionCard": {
            type: Boolean,
            default: false,
        },

        "destinationUrl": {
            type: String,
            default: "#",
        },

        "title": {
            type: String,
        },

        "description": {
            type: String,
        },

        "date": {
            type: String,
        },
    },
}
</script>

<style scoped>
    .card__controls .btn-group {
        width: 100%;
        display: flex;
    }

</style>
