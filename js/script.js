const { createApp } = Vue

createApp({
    data() {
        return {
        titolo: '',
        todolist: [],
        completato: '',
        titolo: '',
        descrizione: '',
        completato: ''
        }
    },
    methods: {
        getData(){
            axios.get('./server.php', {
                params: {
                    titolo: this.titolo,
                    completato: this.completato
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
        newTaskData(titolo, descrizione, completato ) {
            axios.get('./adder.php', {
                params: {
                    titolo: titolo,
                    descrizione: descrizione,
                    completato: completato,
                }
                })
                .then( function (response) {
                console.log(response);
                this.todolist_newTask = response.data;
                })
                .catch(function (error) {
                console.log(error);
                })
                .finally(function () {
                // always executed
                });  
        }

    },
    created(){
        this.getData();
    }
  }).mount('#app')