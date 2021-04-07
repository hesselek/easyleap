<template>
    <div id="app">
        <header-component></header-component>
       

        <router-view/>

    </div>
</template>

<script>
import { mapGetters } from 'vuex'
import HeaderComponent from './components/HeaderComponent.vue'
export default {
    computed: {
        ...mapGetters([
            'isLogged'
        ])
    },
    comments : {
        HeaderComponent
    },

}
</script>

<style>

</style>
