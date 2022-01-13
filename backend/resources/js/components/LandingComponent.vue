<template>
    <div class="container">
        <h1>AAAAA</h1>
        <span>Welcome, {{ this.$store.getters.getUsername }}</span>
        <p>This is the landing page!!</p>
    </div>
</template>

<script>
export default {
    mounted() {
        this.$store.dispatch('getUser');;
    }
}
</script>

