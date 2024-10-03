<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Chat Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .chat-container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 90vh;
            width: 100%;
            max-width: 400px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .chat-header {
            background-color: #d0e7ff;
            padding: 15px;
            display: flex;
            align-items: center;
        }

        .back-button {
            font-size: 22px; /* Ukuran tombol kembali */
            cursor: pointer; /* Menunjukkan kursor pointer saat hover */
            margin-right: 10px; /* Jarak antara tombol dan profil */
            color: #333; /* Warna tombol */
            transition: color 0.3s, background-color 0.3s; /* Transisi halus */
            padding: 5px; /* Menambahkan padding untuk efek hover */
            border-radius: 5px; /* Menambahkan sudut yang melengkung */
        }

        .back-button:hover {
            background-color: #F5F5F7; /* Warna latar belakang saat hover */
            color: #000; /* Mengubah warna teks saat hover */
        }

        .admin-info {
            display: flex;
            align-items: center;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            background-color: #ccc;
            border-radius: 50%;
            margin-right: 10px;
        }

        .admin-details h2 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }

        .admin-details p {
            margin: 0;
            font-size: 0.9em;
            color: #666;
        }

        .chat-box {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
            border-top: 1px solid #ccc;
        }

        .chat-bubble {
            max-width: 80%;
            padding: 10px;
            border-radius: 10px;
            position: relative;
            word-wrap: break-word;
        }

        .chat-bubble.left {
            background-color: #e0e0e0;
            align-self: flex-start;
        }

        .chat-bubble.right {
            background-color: #d0e7ff;
            align-self: flex-end;
        }

        .chat-input {
            display: flex;
            padding: 10px;
            background-color: #f9f9f9;
            border-top: 1px solid #ccc;
        }

        .chat-input input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            outline: none;
        }

        .chat-input button {
            background-color: #8a4de9;
            color: white;
            border: none;
            padding: 0 20px;
            margin-left: 10px;
            border-radius: 50%;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #7a3fd1;
        }
    </style>
</head>
<body>

    <div class="chat-container">
        <header class="chat-header">
            <!-- Tombol kembali menggunakan Font Awesome -->
            <span class="back-button"><i class="fa fa-arrow-left"></i></span> <!-- Ikon panah kiri Font Awesome -->
            <div class="admin-info">
                <div class="profile-pic"></div>
                <div class="admin-details">
                    <h2>Admin</h2>
                    <p>+62 838 9109 6543</p>
                </div>
            </div>
        </header>

        <div id="chat-box" class="chat-box">
            <!-- Pesan chat akan muncul di sini -->
        </div>

        <div class="chat-input">
            <input id="chat-input" type="text" placeholder="Ketik pesan Anda di sini...">
            <button id="send-button" type="submit">➤</button>
        </div>
    </div>

    <script>
        // Memilih elemen
        const chatBox = document.getElementById('chat-box');
        const chatInput = document.getElementById('chat-input');
        const sendButton = document.getElementById('send-button');

        // Fungsi untuk menambahkan pesan ke kotak chat
        function appendMessage(message, isUser) {
            const messageBubble = document.createElement('div');
            messageBubble.classList.add('chat-bubble');
            messageBubble.classList.add(isUser ? 'right' : 'left');
            messageBubble.innerHTML = `<p>${message}</p>`;
            chatBox.appendChild(messageBubble);

            // Scroll ke bawah
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        // Mengirim pesan ketika tombol diklik
        sendButton.addEventListener('click', function() {
            const message = chatInput.value.trim();

            if (message) {
                // Menambahkan pesan pengguna ke chat
                appendMessage(message, true);

                // Menghapus isi kolom input
                chatInput.value = '';
            }
        });

        // Mengirim pesan ketika tombol "Enter" ditekan
        chatInput.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                sendButton.click();
            }
        });

        document.querySelector('.back-button').addEventListener('click', function() {
            window.history.back(); // Kembali ke halaman sebelumnya
        });

    </script>

</body>
</html>
