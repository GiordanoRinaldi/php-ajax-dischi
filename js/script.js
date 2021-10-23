const app = new Vue({
    el: "#root",
    data: {
        dischi: null,
        generi: [],
        genereselezionato: "",
    },
    methods: {
        filtraCanzoni(){
            axios.get("http://localhost/php-ajax-dischi/api/index.php", {
                params: {
                    "genre" : this.genereselezionato.toLowerCase()
                }
            })
        .then( (response) => {
            this.dischi = response.data;
            
        })
        }
    },
    created(){
        axios.get("http://localhost/php-ajax-dischi/api/index.php")
        .then( (response) => {
            this.dischi = response.data;

            this.dischi.forEach(elm => {
                if (!this.generi.includes(elm.genre)){
                    this.generi.push(elm.genre);
                }
            });
        })
    }
})