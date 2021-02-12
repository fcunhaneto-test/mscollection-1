<template>
    <div id="main">
        <navbar></navbar>
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from "./components/Navbar";
export default {
    name: "Frontend",
    components: {
        Navbar
    }
}
</script>

<style scoped>

</style>
