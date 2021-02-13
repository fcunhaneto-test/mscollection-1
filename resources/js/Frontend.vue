<template>
    <div id="main">
        <navbar :user="user"></navbar>
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from "./components/Navbar";
export default {
    name: "Frontend",
    components: {
        Navbar
    },
    props: {
        name: String,
        role: String
    },
    data() {
        return {
            user:null
        }
    },
    created() {
        if(this.role !== '') {
            this.user = {name: this.name, role: this.role}
            if(this.role === 'assin') {
                axios.get('/api/media/streams').then(response => {
                    this.$store.commit('SET_MEDIA', response.data)
                }).catch(errors => console.log(errors))
            } else if(this.role === 'admin') {
                axios.get('/api/media').then( response => {
                    this.media = response.data
                }).catch(errors => console.log(errors))
            }
        } else {
            axios.get('/api/media/streams').then(response => {
                this.$store.commit('SET_MEDIA', response.data)
            }).catch(errors => console.log(errors))
        }
    }
}
</script>

<style scoped>

</style>
