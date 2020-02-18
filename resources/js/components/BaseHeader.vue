<template>
    <div class="">
        <header class="header">
            <div class="header__container">
                <div class="header__content">
                    <p class="header__title">Event Manager UFFS</p>
                </div>

                <svg class="header__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path
                    d="
                    M -5,50
                    S 0,90 25,90
                    S 50,50 75,50
                    S 100,50 125,50
                    L 100,100
                    L 0,100
                    z
                    "
                    />
                </svg>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="stickyNavbar">
            <div class="mx-auto order-0">
                <p class="navbar__title">Event Manager UFFS</p>
            </div>

            <div class="order-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-user-section" aria-controls="navbar-user-section" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-user-section">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</template>

<script>
export default {

    computed: {
        stickyNavbar: function () {
            return document.getElementById('stickyNavbar');
        },

        navOffsetTop: function () {
            return this.stickyNavbar.offsetTop;
        },
    },

    methods: {
        addStickOnScroll() {
            if (window.pageYOffset > this.navOffsetTop - 30) {
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

<style lang="css">
</style>
