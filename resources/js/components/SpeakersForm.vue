<template>
    <div class="row p-2">

        <div class="col-sm-6 pl-3">
            <div class="form-group">
                <label for="name"> Nome </label>
                <input type="text" class="form-control" v-model="name" name="name" placeholder="Nome" >
            </div>
            <div class="form-group">
                <label for="biography"> Biografia </label>
                <textarea class="form-control h-auto" v-model="biography" name="biography" placeholder="Biografia" cols="30" rows="9"></textarea>
            </div>
        </div>

        <div class="col-sm-4 pl-3">
            <div>
                <label for="photo" class="mt-4"> Selecione a photo</label>
                <img v-bind:src="photoSource" @click="triggerImagePicker" ref="photo" class="photo" alt="Placeholder image">
            </div>
            <div class="form-group d-none">
                <input type="file" name="photo" placeholder="Escolha uma foto" ref="imagePicker" @change="handleImageUpload">
                <input type="text" name="uploadedFile">
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                name: "",
                biography : "",
                photoSource: ""
            }
        },
        methods: {
            triggerImagePicker: function(){
                this.$refs.imagePicker.click();
            },
            handleImageUpload: function(event){
                let input = event.target;
                let imageSource = URL.createObjectURL(input.files[0]);
                this.photoSource = imageSource;
                this.$refs.photo.onload = this.imageResizer; 
            },
            imageResizer: function(){
            }
        },
        props: {
            photo: {
                type: String,
                default: ""
            }
        },
        mounted: function(){
            this.photoSource = this.photo;
        }
    }
</script>

<style scoped>

    .photo {
        cursor: pointer;
    }

</style>