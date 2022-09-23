const app = new Vue({
    el: '#app',
    data: {
        title:'Vue Dischi',
        dischi: [],
    },
    methods: {
        fetchDischi() {
            axios.get('http://localhost/php-ajax-dischi/api/dischi/')
            .then((res) => {
                console.log(res)
                this.dischi = res.data.response
            }) 
        },
    },
    created() {
        this.fetchDischi()
    },
    mounted() {
        console.log('ciao')
    },
})