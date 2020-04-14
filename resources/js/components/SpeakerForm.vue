<template>
    <div class="p-2">
        <div class="row">

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name"> Nome </label>
                    <input type="text" name="name" ref="name" class="form-control" placeholder="Nome" required>
                </div>

                <div class="form-group">
                    <label for="biography"> Biografia </label>
                    <textarea name="biography" ref="biography" class="form-control h-auto" placeholder="Biografia" cols="30" rows="8" required></textarea>
                </div>
            </div>

            <div class="col-sm-4">
                <label class="label-photo ml-3">
                    Escolha uma foto
                    <img :src="photoSource" ref="photo" class="photo" alt="Placeholder image">
                    <input type="file" accept=".png,.jpeg" @change="handleImageUpload" name="photo" class="d-none" placeholder="Escolha uma foto">
                </label>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                photoSource: ""
            }
        },

        props: {
            photo: {
                type: String,
                default: ""
            }
        },

        methods: {

            handleImageUpload: function(event){
                const input = event.target;
                this.photoSource = URL.createObjectURL(input.files[0]);
            },

            clearValidationMessage: function(e){
                e.target.setCustomValidity("");
            },

            setValidationMessage: function(e){
                const input = e.target;
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
    
    .label-photo {
        width: inherit;
    }   
    
    .photo {
        cursor: pointer;
        width: inherit;
    }

    .h-auto {
        height: auto;
    }

</style>