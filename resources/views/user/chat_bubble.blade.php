<style>
    .chat-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 999;
    }

    .chat-collapse {
        position: fixed;
        bottom: 80px;
        right: 20px;
        z-index: 999;
        width: 320px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        overflow: hidden;
        max-height: calc(100vh - 120px);
    }

    .chat-collapse .card {
        border: none;
        border-radius: 0;
    }

    .chat-collapse .card-header {
        border-bottom: none;
        background-color: #f0f0f0;
        padding: 0.75rem 1rem;
    }

    .chat-collapse .card-header h5 {
        margin-bottom: 0;
        font-size: 1.25rem;
    }

    .chat-collapse .card-header .btn-close {
        padding: 0.75rem 1rem;
    }

    .chat-collapse .card-body {
        height: calc(100% - 56px);
        overflow-y: auto;
        padding: 1rem;
    }

    .chat-collapse .list-unstyled {
        margin-bottom: 0;
    }

    .chat-collapse form {
        margin-top: 1rem;
        display: flex;
        align-items: center;
    }

    .chat-collapse form .input-group {
        width: 100%;
    }

    .chat-collapse form .form-control {
        border-radius: 0;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .chat-collapse form .btn-primary {
        border-radius: 0;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    #chat-content:after {
        content: '';
        display: inline-block;
        vertical-align: middle;
        width: 0;
        height: 100%;
    }

    #chat-content.typing:after {
        animation: typing 0.5s steps(12) infinite;
    }

    @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }
</style>

<body>
    <!-- Chat Collapse Button -->
    <button class="btn btn-primary chat-btn" data-bs-toggle="collapse" data-bs-target="#chatCollapse">
        <i class="fas fa-comment"></i>
    </button>

    <!-- Chat Collapse -->
    <div class="collapse chat-collapse" id="chatCollapse">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center bg-primary">
                <h5 class="m-0 text-white">Pelayanan Pengguna</h5>
                <button type="button" class="btn-close ms-auto" data-bs-toggle="collapse" data-bs-target="#chatCollapse"
                    aria-label="Close"></button>
            </div>

            <div class="card-body">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <div class="d-flex align-items-start">
                            <img class="rounded-circle me-2" src="{{ asset('pengguna/img/support.png') }}"
                                alt="User" width="40px" />
                            <div class="flex-grow-1">
                                <p class="mb-0"><strong>Tunsanet Support</strong></p>
                                <div id="chat-content">
                                </div>
                                <small class="text-muted">1 detik yang lalu</small>
                            </div>
                        </div>
                    </li>
                </ul>
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tulis Pesanmu disini..." />
                        <a class="text-white btn btn-primary"
                            href="https://wa.me/6285712666154?text=Hallo%20petugas%20bumdes%20saya%20ingin%20bertanya..."
                            target="blank">Kirim</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const chatContent = document.querySelector('#chat-content');
        const message = 'Halo, apakah anda ingin berlangganan Tunsanet?, atau ada yang ingin ditanyakan? Yuk chat kami.';
        let i = 0;

        function typeMessage() {
            if (i < message.length) {
                chatContent.innerHTML += message.charAt(i);
                i++;
                setTimeout(typeMessage, Math.floor(Math.random() * 100) + 100);
            } else {
                chatContent.classList.remove('typing');
            }
        }

        typeMessage();
    </script>
</body>

</html>
