<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <router-link v-bind:to="{name: 'home'}">
                    <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                </router-link>
                <div>
                    <router-link v-bind:to="{name: 'task.list'}">
                        <button class="btn btn-success">List</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'task.create'}">
                        <button class="btn btn-success">Add</button>
                    </router-link>
                    <button class="btn btn-danger" v-on:click="logout">Logout</button>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            logout() {
                axios.post('/logout')
                .then(res => {
                    console.log(res.data);
                    window.location.href = "/";
                }).catch(err => {
                    console.log(err.response);
                })
            }
        }
    }
</script>