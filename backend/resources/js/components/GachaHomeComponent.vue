<style scoped>
    h3 {
        padding: 1rem 1.5rem;
        border-left: 4px dotted #000;
    }
    .bottom-space {
        margin-bottom: 2rem;
    }
</style>

<template>
    <div>
        <div class="container bottom-space">
            <blockquote>
                <h3>確率表記</h3>
            </blockquote>
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
        </div>
        <div class="container bottom-space">
            <blockquote>
                <h3>出現キャラクター</h3>
            </blockquote>
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">レア度</th>
                        <th scope="col">出現キャラクター</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(character, index) in characters" :key="'character-' + index">
                        <td v-for="(column, index) in character" :key="'column-' + index">
                            {{ column }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
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
                axios.get('/api/gacha/info/characters')
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

