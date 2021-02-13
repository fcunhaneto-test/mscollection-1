<template>
    <b-navbar id="navbar-frontend" wrapper-class="container">
        <template #brand>
            <b-navbar-item tag="router-link" :to="{ path: '/' }">
                MSCollection
            </b-navbar-item>
        </template>
        <template #start>
            <b-navbar-dropdown v-if="media" class="navbar-dropdown-frontend" label="Filmes">
                <b-navbar-item v-for="m in media" tag="router-link" :to="{ path: `/filmes/m.id` }" :key="m.id +'movies'">
                    {{ m.name }}
                </b-navbar-item>
            </b-navbar-dropdown>
            <b-navbar-dropdown v-if="media" label="Séries">
                <b-navbar-item v-for="m in media" tag="router-link" :to="{ path: `/series/m.id` }" :key="m.id +'series'">
                    {{ m.name }}
                </b-navbar-item>
            </b-navbar-dropdown>
        </template>
        <template #end>
            <a v-if="!user" class="navbar-item" @click="login">Entre</a>
            <a v-if="!user" class="navbar-item" @click="register">Registre-se</a>
            <b-navbar-dropdown v-else :label="user.name">
                <a class="navbar-item" @click="logout">Sair</a>
            </b-navbar-dropdown>
        </template>
    </b-navbar>
</template>


<script>
export default {
    name: "Navbar",
    props: {
        user: Object
    },
    computed: {
        media() {
            return this.$store.getters.getMedia
        }
    },
    methods: {
        login() {
            window.location.href = '/login'
        },
        logout() {
            axios.post('/logout').then(() => window.location.href = '/')
        },
        register() {
            window.location.href = '/register'
        }
    },
}
</script>

<style scoped>

</style>
