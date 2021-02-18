<template>
    <div :class="['card', cardShadowClass]">
        <div v-if="paperCard" :class="['card--paper', paperCardVariantClass, paperCardPaddingClass]">
            <slot></slot>
        </div>

        <div class="card__container" v-else>
            <img :src="cardImage" :class="{ 'card__image': !actionCard, 'card--action__image': actionCard }">

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
                    <div class="card__hidden">
                        <p class="card__description">
                            {{ description }}
                        </p>
                    </div>

                    <div class="card__show">
                        <p class="card__title">
                            {{ title }}
                        </p>

                        <p class="card__subtitle">
                            {{ date }}
                        </p>
                    </div>
                </div>
            </a>
        </div>
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

        "paperCard": {
            type: Boolean,
            default: false,
        },

        "variant": {
            type: String,
        },

        "shadow": {
            type: String,
            default: "small",
        },

        "padding": {
            type: String,
            default: "small",
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

    computed: {
        paperCardVariantClass: function() {
            return "card--paper-" + this.variant;
        },

        cardShadowClass: function() {
            return "card__shadow--" + this.shadow;
        },

        paperCardPaddingClass: function() {
            return "card--padding-" + this.padding;
        }
    }
}
</script>

<style scoped>

</style>
