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
<style lang="scss">
    .wrapper{
        background: #adb5bd;
    }
</style>
<script>
export default {
    data() {
        return {
            supplies: [],
        }
    },
    created() {
        axios.get('/template').then(res => {
            this.supplies = res.data.data;
            console.log(this.supplies);
        })
    }
}
</script>
