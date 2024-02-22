const { createApp } = Vue;

const app = createApp({
    data: () => ({
        tasks
    })
})

app.mount('#app');
