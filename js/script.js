const { createApp } = Vue

createApp({
    data() {
        return {
        titolo: '',
        todolist: [],
        }
    },
    methods: {
        getData(){
            axios.get('./server.php', {
                params: {
                    titolo: this.titolo,
                }
                })
                .then((response) => {
                console.log(response);
                this.todolist = response.data.todolist;
                })
                .catch(function (error) {
                console.log(error);
                })
                .finally(function () {
                // always executed
                });  
        },

    },
    created(){
        this.getData();
    }
  }).mount('#app')