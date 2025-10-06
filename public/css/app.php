<style>
    .none {
        display: none;
    }

    .v-center {
        top: 50%;
        position: relative;
        transform: translateY(-50%);
    }

    .v-bottom {
        top: 100%;
        position: relative;
        transform: translateY(-100%);
    }

    @media screen and (min-width: 1000px) {
        .web {
            display: block;
        }
        .mobile {
            display: none;
        }
    }

    @media (max-width: 1000px) {
        .web {
            display: none;
        }
        .mobile {
            display: block;
        }
    }
</style>