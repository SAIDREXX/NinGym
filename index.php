<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>NinGym</title>
    <link rel="stylesheet" href="css/index_style.css">
</head>
<body>
    <header>
        <div class="navbar-container">
            <a href="index.php"><img class="logoKey" src="img/logo.png" alt="Logo de NinGym"></a>
            
            <nav>
                <ul class="navbar-list">
                    
                    <li><a href="view/register.php">Registrarse</a></li>
                    <li>|</li>
                    <li><a href="view/login.php">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section>
            <h1>NinGym</h1>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
        </section>
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



</html>