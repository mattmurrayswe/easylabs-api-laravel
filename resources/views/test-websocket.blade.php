@vite(['resources/js/app.js'])
<script type="module">
    let server = new Echo({
        broadcaster: 'socket.io',
        host: window.location.hostname + ':6001',
        client: io
    });
    let users = [];
    let messages = [];

    server.join('chat')
        .here(users => {
            console.log(users)
            users.forEach(user => {
                users.push(user);
            });
        })
        .joining(user => {
            console.log(users)
            users.push(user);
        })
        .leaving(user => {
            users = users.filter(u => u.id !== user.id);
            console.log(users)
        })
        .listenForWhisper('typing', ({id, name}) => {
            console.log(name);
            users.forEach((user, index) => {
                if (user.id === id) {
                    user.typing = true;
                }
            });
        })
        .listen('ChatEvent', (event) => {
            console.log(event);
            messages.push({
                message: event.message.message,
                user: event.user
            });

            users.forEach((user, index) => {
                if (user.id === event.user.id) {
                    user.typing = false;
                }
            });
        });
</script>
