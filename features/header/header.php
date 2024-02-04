<header>
    <div class="container">
        <div class="logo">
            <h1 class="text-logo">Steak</h1>
            <img src="public/assets/logo-meat.png" alt="Logo" class="img-logo" />
        </div>
        <nav>
            <button onclick="handleLogin()">Login</button>
        </nav>
    </div>

    <script>
        function handleLogin() {
            window.location.replace("features/login/login.php")
        }
    </script>
</header>