<template>
    <div class="row p-2">

        <div class="col-sm-6 pl-3">
            <div class="form-group">
                <label for="name"> Nome </label>
                <input type="text" name="name" @model="name" ref="name" class="form-control" placeholder="Nome" required>
            </div>

            <div class="form-group">
                <label for="biography"> Biografia </label>
                <textarea name="biography" @model="biography" ref="biography" class="form-control h-auto" placeholder="Biografia" cols="30" rows="9" required></textarea>
            </div>
        </div>

        <div class="col-sm-4 pl-3">
            
            <label for="photo" class="mt-4"> Selecione a photo</label>
            <img v-bind:src="photoSource" @click="triggerImagePicker" ref="photo" class="photo" alt="Placeholder image">

            <div class="form-group d-none">
                <input type="file" accept=".png,.jpeg" @change="handleImageUpload" name="photo" ref="imagePicker" placeholder="Escolha uma foto">
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                photoSource: ""
            }
        },

        props: {
            name:  {
                type: String,
                default: ""
            },
            biography: {
                type: String,
                default: ""
            },
            photo: {
                type: String,
                default: ""
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

            },

            clearValidationMessage: function(e){

                e.target.setCustomValidity("");

            },

            setValidationMessage: function(e){
                
                let input = e.target;
                this.clearValidationMessage(e);
                
                if (!input.validity.valid){
                    input.setCustomValidity("O campo " + input.placeholder + " é obrigatório");
                }
            }
        },

        mounted(){
            this.photoSource = this.photo;

            this.$refs.name.oninvalid = this.setValidationMessage;
            this.$refs.name.oninput = this.clearValidationMessage;

            this.$refs.biography.oninvalid = this.setValidationMessage;
            this.$refs.biography.oninput = this.clearValidationMessage;
        }
    }
</script>

<style scoped>

    .photo {
        cursor: pointer;
        width: inherit;
    }

    .h-auto {
        height: auto;
    }

</style>