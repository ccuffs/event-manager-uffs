<template>
    <div class="">
        <div class="card">
            <img :src="cardImage" class="card__image">

            <a
                v-if="actionCard"
                class="card__action"
                :href="destinationUrl"
                :data-toggle="modalTrigger ? '' : 'modal'"
                data-target="#createEventModal"
                >

                <div>
                    <p class="card__icon">+</p>
                    <p>Novo Evento</p>
                </div>
            </a>

            <a v-else class="card__content" :href="destinationUrl">
                <p class="card__title">
                    {{ title }}
                </p>

                <p class="card__description">
                    {{ description }}
                </p>

                <p class="card__date">
                    {{ date }}
                </p>

                <div class="card__controls">
                    <div class="btn-group">
                        <a href="#" class="btn btn-outline-primary">
                            <span>Visualizar</span>
                        </a>
                        <a href="#" class="btn btn-outline-success">
                            <span>Editar</span>
                        </a>
                        <a href="#" class="btn btn-outline-danger">
                            <span>Excluir</span>
                        </a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        cardImage: {
            type: String,
            default: "https://www.showmetech.com.br/wp-content/uploads//2015/02/image_new-11.png",
        },

        actionCard: {
            type: Boolean,
            default: false,
        },

        modalTrigger: {
            type: Boolean,
            default: false,
        },

        modalTarget: {
            type: String,
            default: '',
        },

        destinationUrl: {
            type: String,
            default: "#",
        },

        title: {
            type: String,
        },

        description: {
            type: String,
        },

        date: {
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
