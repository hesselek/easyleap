<template>
    <section class="wrapper">
        <header>
            <h1>Office Supplies</h1>
        </header>
        <main>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Purchase date</th>
                </tr>
                </thead>
                <tbody>
                <tr  v-for="(item, index) in supplies" :key="index" >
                    <th scope="row">{{item.id}}</th>
                    <td>{{item.name}}</td>
                    <td>{{item.purchase_date | formatDate }}</td>
                </tr>
                </tbody>
            </table>
        </main>
    </section>
</template>

<script>
// @ is an alias to /src
//import HelloWorld from '@/components/HelloWorld.vue'

export default {
    name: 'Supplies',
    data() {
        return {
            supplies: [],
        }
    },
    created() {
        axios.get('/supplieslist').then(res => {
            this.supplies = res.data.data;
            console.log(this.supplies);
        })
    }
}
</script>
