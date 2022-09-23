const app = new Vue({
    el: '#app',
    data: {
        title:'Vue Dischi',
        dischi: [],
    },
    methods: {
        fetchDischi() {
            // axios.get('')
        },
    },
    mounted() {
        console.log('ciao')
    },
})