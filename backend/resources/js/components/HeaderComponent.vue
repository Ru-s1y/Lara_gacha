<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <span class="navbar-brand">Vue Laravel SPA</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <router-link v-bind:to="{name: 'home'}">
                                <span class="nav-link">Home</span>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link v-bind:to="{name: 'task.list'}">
                                <span class="nav-link">Task</span>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link v-bind:to="{name: 'rolls.info'}">
                                <a class="nav-link" >ガチャ</a>
                            </router-link>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <span class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ this.$store.getters.getUsername }}
                            </span>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <span class="dropdown-item" v-on:click="logout">Logout</span>
                            </div>
                        </li>
                    </ul>
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
                window.location.href = "/";
            }).catch(err => {
                console.log(err.response);
            })
        }
    },
    created() {
        this.$store.dispatch('getUserAction');
    }
}
</script>