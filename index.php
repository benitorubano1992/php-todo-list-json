<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <main id="app">
        <div class="container pt-5">
            <h1 class="text-center">My Todo List</h1>
            <div class="row justify-content-center">
                <div class="col-7">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between" v-for="(todo,index) in listaTodo" >
                            
                            <span :class='todo.done? "line":""' @click.stop="handleTodoClick(index)">{{ todo.text }}</span>
                            <span v-if="todo.done" @click.stop=handleTodoDelete(index)><i class="fa-solid fa-trash"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-7">
                    <input class="form-control" type="text" placeholder="Inserisci un nuovo todo" aria-label="Inserisci un nuovo todo" v-model="todo">
                    <button class="btn btn-primary mt-2" @click="addTodo">Salva</button>
                </div>
            </div>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>


    </html>