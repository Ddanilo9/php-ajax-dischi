const app = new Vue({
    el: '#app',
    data: {
        title:'Vue Dischi',
        dischi: [],
        genrs:['Rock', 'Pop', 'Metal', 'Jazz'],
        selectedGenrs: '',
    },
    methods: {
        fetchDischi() {
            axios
            .get('http://localhost/php-ajax-dischi/api/dischi/',{
                params:{
                    genre: this.selectedGenrs,
                },
            })
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