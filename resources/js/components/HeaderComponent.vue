<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Navbar</a>

            <div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">

                        <router-link class="nav-link"  to="/supplies" v-if="isLogged">Supplies</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link"  to="/login" v-if="!isLogged">Login</router-link>
                    </li>
                </ul>
            </div>
            <button class="btn btn-danger" type="button" @click="logout()" v-if="isLogged">
                Logout
            </button>
        </nav>
    </header>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
    computed: {
        ...mapGetters([
            'isLogged'
        ])
    },
    methods: {
        logout () {
            this.$store.dispatch('logout')
        }
    }
}
</script>
<style lang="scss">

</style>
