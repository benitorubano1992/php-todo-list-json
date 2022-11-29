
console.log("pagina collegata");
const { createApp } = Vue;
createApp({
    data() {
        return {
            listaTodo: [],
            todo: ""
        }
    },
    created() {
        axios.get("server.php").then(resp => this.listaTodo = resp.data);
    },


    methods: {

        addTodo() {
            const data = {
                todo: this.todo,
            };
            axios.post("server.php", data, {
                headers: { "Content-Type": "multipart/form-data" }
            },)
                .then(response => {
                    console.log(response.data);
                    this.listaTodo = response.data;
                    this.todo = "";
                });
        },
        handleTodoClick(index) {
            console.log(index);
            console.log(this.listaTodo[index]);

            const data = {
                item: index
            };
            axios.post("server.php", data, {
                headers: { "Content-Type": "multipart/form-data" }
            },)
                .then(response => {
                    console.log(response.data);
                    this.listaTodo = response.data;

                });
        },

        handleTodoDelete(index) {

            console.log(this.listaTodo[index]);
            const data = { delete: this.listaTodo[index].text };
            console.log(data);
            axios.post("server.php", data, {
                headers: { "Content-Type": "multipart/form-data" }
            },)
                .then(response => {
                    console.log(response.data);
                    this.listaTodo = response.data;

                });
        }


    }



}).mount("#app");
