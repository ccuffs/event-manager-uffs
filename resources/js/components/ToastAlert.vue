<template>
    <div class="alert fade-text w-fit-content float-right" :class="classes">
        {{ innerText }}
    </div>
</template>

<script>
    export default {
        props: {
            innerText: '',
            classes: ''
        }
    }
</script>

<style scoped>
    @keyframes fade-text {
        10%  { opacity: 1.0; } 
        20%  { opacity: 1.0; }
        30%  { opacity: 1.0; }
        40%  { opacity: 1.0; }
        50%  { opacity: 1.0; }
        60%  { opacity: 0.8; }
        70%  { opacity: 0.6; } 
        80%  { opacity: 0.4; }
        90%  { opacity: 0.2; } 
        100% { opacity: 0.1; }
    }

    .fade-text {
        opacity: 0 !important;
        display: block;
        animation-name: fade-text;
        animation-duration: 4s;
    }

    .w-fit-content {
        width: fit-content;
    }
</style>