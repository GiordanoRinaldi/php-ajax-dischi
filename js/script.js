const app = new Vue({
    el: "#root",
    data: {
        dischi: null

    },
    created(){
        axios.get("http://localhost/php-ajax-dischi/api/index.php")
        .then( (response) => {
            this.dischi = response.data;
        })
    }
})