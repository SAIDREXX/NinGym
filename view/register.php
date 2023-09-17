<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Registro | Nyngym</title>
    <link rel="stylesheet" href="./css/register_style.css">
</head>
<body>
    <header>
            <div class="navbar-container">
                <a href="../index.php"><img class="logoKey" src="../img/logo.png" alt="Logo de NinGym"></a>
                <h1 class="gym-name">NinGym</h1>
                <nav>
                    <ul class="navbar-list">
                        <li><a href="./login.php">Iniciar Sesión</a></li>
                    </ul>
                </nav>
            </div>
    </header>
    <main>
            <div class="container">
                <form>
                    <h3>Registro</h3>
                    <input type="text" placeholder="Nombre" required>
                    <input type="text" placeholder="Apellido" required>
                    <input type="text" placeholder="Edad" required>
                    
                </form>
            </div>
    </main>
    <footer>
        <p>&copy; 2023 SAIDREXXX</p>
    </footer>
    <script>
    let text = document.querySelectorAll('ul li a').forEach (text => {
        text.innerHTML = text.innerText.split('').map((letters, i) => `<span style="transition-delay:${i*40}ms;">${letters}</span>`).join('');
    })
    </script>
</body>


</head>
</html>

