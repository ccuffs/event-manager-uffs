<template>
    <div class="">

        <div :class="['modal', 'fade', modalClass]" :id="modalId" tabindex="-1" role="dialog" :aria-labelledby="modalId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">{{ modalTitle }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <slot></slot>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" @click="handleClick">Criar Evento</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        modalId: {
            type: String,
            default: 'modalId',
        },

        variant: {
            type: String,
        },

        modalTitle: {
            type: String,
        },
    },

    computed: {
        modalClass: function () {
            return 'modal--' + this.variant.split(' ').join('--');
        },
    },

    methods: {
        handleClick() {
            this.$emit('create');
        }
    }
}
</script>

<style scoped>
</style>
