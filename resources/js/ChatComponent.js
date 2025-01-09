// resources/js/ChatComponent.js

document.addEventListener('DOMContentLoaded', function () {
    const messagesContainer = document.getElementById('messages');
    const newMessageInput = document.getElementById('new-message');
    let messages = [];

    function fetchMessages() {
        axios.get('/messages').then(response => {
            messages = response.data;
            renderMessages();
        });
    }

    function renderMessages() {
        messagesContainer.innerHTML = '';
        messages.forEach(message => {
            const messageElement = document.createElement('div');
            messageElement.innerHTML = `<strong>${message.user.name}:</strong> ${message.message}`;
            messagesContainer.appendChild(messageElement);
        });
    }

    function sendMessage() {
        const newMessage = newMessageInput.value;
        if (newMessage.trim() === '') return;

        axios.post('/messages', { message: newMessage }).then(response => {
            newMessageInput.value = '';
        });
    }

    newMessageInput.addEventListener('keyup', function (event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    });

    window.Echo.channel('chat')
        .listen('MessageSent', (e) => {
            messages.push({
                message: e.chat.message,
                user: e.chat.user
            });
            renderMessages();
        });

    fetchMessages();
});
