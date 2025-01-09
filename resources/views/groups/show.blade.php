<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Chat</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #ecf0f1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar-header {
            padding: 20px;
            font-size: 24px;
            text-align: center;
        }

        .settings {
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        .chat-messages {
            padding: 20px;
            overflow-y: auto;
            background-color: #ecf0f1;
            flex: 1;
        }
    </style>
</head>
<body class="d-flex">
    <div class="sidebar d-flex flex-column">
        <div class="sidebar-header">
            {{ $group->name }}
        </div>
        <div class="settings" data-bs-toggle="modal" data-bs-target="#settingsModal">
            Settings
        </div>
    </div>
    <div class="chat-container flex-grow-1 d-flex flex-column">
        <div class="chat-messages">
            <!-- Chat messages will be displayed here -->
        </div>
        <div class="chat-input p-3 bg-light">
            <form id="chat-form" class="d-flex">
                <input 
                    type="text" 
                    name="message" 
                    class="form-control me-2" 
                    placeholder="Type a message..." 
                    required>
                <button 
                    type="submit" 
                    class="btn btn-primary">
                    Send
                </button>
            </form>
        </div>
    </div>

    <!-- Settings Modal -->
    <div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="settingsModalLabel">Group Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Group Name:</strong> {{ $group->name }}</p>
                    <p><strong>Description:</strong> {{ $group->description }}</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('groups.leave', $group->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Leave Group</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('chat-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting the traditional way
    
            const messageInput = this.querySelector('input[name="message"]');
            const message = messageInput.value;
    
            if (message.trim() === '') {
                return; // Don't send empty messages
            }
    
            // Send the message via AJAX
            fetch('/groups/{{ $group->id }}/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                },
                body: JSON.stringify({ message: message })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Clear the input field
                    messageInput.value = '';
                    // Optionally, update the chat messages display
                    // For example, append the new message to the chat-messages div
                } else {
                    console.error('Error sending message:', data.error);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
