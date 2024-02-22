const { createApp } = Vue;

const apiUri = 'http://localhost/PHP/php-todo-list-json/tasks';

const app = createApp({
    data: () => ({
        tasks: []
    })
})

app.mount('#app');
