<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>   
    <main id='app'>
        
    <section class="content-list">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1 class="text-center">
                        La mia TodoList!!
                    </h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="text mb-2">
                                <label for="titolo">Titolo</label>
                                <input class='form-control' type="text" name="titolo" id="titolo" v-model.trim="titolo">
                            </div>
                            <div class="text mb-2">
                                <label for="descrizione">Descrizione</label>
                                <input  class='form-control' type="text" name="descrizione" id="descrizione" v-model.trim="descrizione">
                            </div>
                            <div class="text mb-2">
                                <label for="completato">Completato?</label>
                                <input class='form-control' type="text" name="completato" id="completato" v-model.trim="completato">
                            </div>
                        </div>
                        <div class="col-2 text-center d-flex align-items-center">
                            <button class='btn btn-secondary' type="submit" @click="newTaskData(titolo, descrizione, completato)">Aggiungi</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4" v-for="item in todolist">
                    <div class="line">
                        <ul>
                            <li>
                               <h3> {{ item.titolo }} </h3>
                               <p> {{ item.descrizione }} </p>
                               <h5> {{ item.completato }} </h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>