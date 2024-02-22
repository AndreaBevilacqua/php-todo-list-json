const { createApp } = Vue;

const endpoint = 'http://localhost/PHP/php-todo-list-json/tasks';

const app = createApp({
    data: () => ({
        tasks: []
    }),
    created() {
        axios.get(endpoint).then(res => {
            this.tasks = res.data;
        })
    }
})

app.mount('#app');
