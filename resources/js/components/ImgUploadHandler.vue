<template>
    <div class="label-wrapper">
        <label
            :class="{'label-only': !imageUploaded}"
        >

            <h5 v-if="!imageUploaded">
                {{ placeholder }}
            </h5>

            <img
                :src="imgUrl"
                ref="image"
                class="col-12"
                :class="{ 'img': imageUploaded, 'd-none': !imageUploaded }"
                :alt="placeholder"
            >

            <input
                type="file"
                accept=".png,.jpeg"
                @change="handleImageUpload"
                :name="fieldName"
                class="d-none"
                :placeholder="placeholder"
            >
        </label>
    </div>
</template>

<script>
export default {
    props: {
        // Image location to first show (placeholder-img)
        imgUrl: {
            type: String,
        },

        // Name of the field in controller.
        fieldName: {
            type: String,
            default: "image",
        },

        // Message going to input label.
        placeholder: {
            type: String,
            default: "Selecione uma imagem."
        },

        // If there is already an image
        imageUploaded: {
            type: Boolean,
            default: false,
        },
    },
    methods: {
        handleImageUpload: function (event) {
            let input = event.target;
            this.imageUploaded = true;
            this.imgUrl = URL.createObjectURL(input.files[0]);
        }
    },

    mounted() {
        if (!this.imageUploaded) {

        }
    }
}
</script>

<style scoped>
    .img {
        cursor: pointer;
        max-height: 100%;
    }

    .label-only {
        cursor: pointer;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        align-items: center;

        border: 2px dashed rgb(36, 158, 99);
        color: rgb(36, 158, 99);
        border-radius: 4px;
        background-color: rgb(236, 255, 246);

        width: 100%;
        height: 10rem;
        color: rgb(36, 158, 99);
    }
</style>
