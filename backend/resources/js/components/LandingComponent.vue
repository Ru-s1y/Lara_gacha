<template>
    <div class="container">
        <h1>AAAAA</h1>
        <span>Welcome, {{this.user.name}}</span>
        <p>This is the landing page!!</p>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            user: []
        }
    },
    methods: {
        getUser() {
            axios.get("/api/user")
            .then(res => {
                console.log(res.data);
                this.user = res.data;
            }).catch (err => {
                console.log(err.response);
            })
        }
    },
    mounted() {
        this.getUser();
    }
}
</script>

