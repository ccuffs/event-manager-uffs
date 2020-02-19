<template>
    <div>
        <slot></slot>
    </div>
</template>

<script>
export default {

    computed: {
        stickyNavbar: function () {
            return document.querySelector('#stickyNavbar');
        },

        navOffsetTop: function () {
            return this.stickyNavbar.offsetTop;
        },
    },

    methods: {
        addStickOnScroll() {
            if (window.pageYOffset > this.navOffsetTop - 50) {
                this.stickyNavbar.classList.add('navbar__sticky');

            } else {
                this.stickyNavbar.classList.remove('navbar__sticky');
            }
        }
    },

    created () {
        window.addEventListener('scroll', this.addStickOnScroll);
    },

    destroyed () {
        window.removeEventListener('scroll', this.addStickOnScroll);
    }
}
</script>

<style lang="css" scoped>
</style>
