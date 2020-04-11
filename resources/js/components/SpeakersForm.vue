<template>
    <div class="row p-2">

        <div class="col-sm-6 pl-3">
            <div class="form-group">
                <label for="name"> Nome </label>
                <input type="text" class="form-control" v-model="name" name="name" ref="name" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <label for="biography"> Biografia </label>
                <textarea class="form-control h-auto" v-model="biography" name="biography" ref="biography" placeholder="Biografia" cols="30" rows="9" required></textarea>
            </div>
        </div>

        <div class="col-sm-4 pl-3">
            <div>
                <label for="photo" class="mt-4"> Selecione a photo</label>
                <img v-bind:src="photoSource" @click="triggerImagePicker" ref="photo" class="photo" alt="Placeholder image">
            </div>
            <div class="form-group d-none">
                <input type="file" accept=".png,.jpeg" name="photo" placeholder="Escolha uma foto" ref="imagePicker" @change="handleImageUpload">
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
            },
            clearValdiationMessage: function(e){
                e.target.setCustomValidity("");
            },
            setValidationMessage: function(e){
                
                let input = e.target;
                this.clearValdiationMessage(e);
                
                if (!input.validity.valid) {
                    input.setCustomValidity("O campo " + input.placeholder + " é obrigatório");
                }
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

            this.$refs.name.oninvalid = this.setValidationMessage;
            this.$refs.name.oninput = this.clearValdiationMessage;

            this.$refs.biography.oninvalid = this.setValidationMessage;
            this.$refs.biography.oninput = this.clearValdiationMessage;
        }
    }
</script>

<style scoped>

    .photo {
        cursor: pointer;
    }

</style>