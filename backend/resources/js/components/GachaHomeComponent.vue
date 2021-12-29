<template>
    <div class="container">
        <h2>確率表記</h2>
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">レア度</th>
                    <th scope="col">確率</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(grade, index) in grades" :key="index">
                    <td>{{ index }}</td>
                    <td>{{ grade }} %</td>
                </tr>
            </tbody>
        </table>
        <h2>出現キャラクター</h2>
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">レア度</th>
                    <th scope="col">出現キャラクター</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(character, index) in characters.SSR" :key="index">
                    <td>SSR</td>
                    <td>{{ character }}</td>
                </tr>
                <tr v-for="(character, index) in characters.SR" :key="index">
                    <td>SR</td>
                    <td>{{ character }}</td>
                </tr>
                <tr v-for="(character, index) in characters.R" :key="index">
                    <td>R</td>
                    <td>{{ character }}</td>
                </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                grades: [],
                characters: [],
            }
        },
        methods: {
            getInfo() {
                axios.get('/api/gacha/info')
                    .then((res) => {
                        this.grades = res.data["grades"];
                        this.characters = res.data["characters"];
                    });
            }
        },
        mounted() {
            this.getInfo();
        }
    }
</script>

