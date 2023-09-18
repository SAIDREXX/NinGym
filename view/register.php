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
        <section>
            <img src="../img/background.png" class="background" alt="Background">
            <div class="mainContainer">

                <form method="post" action="" id="Form1">
                    <h3>DATOS PERSONALES</h3>
                    <input type="text" placeholder="Nombre" required>
                    <input type="text" placeholder="Apellidos" required>

                    <div class="group">
                        <input type="number" placeholder="Edad" required>
                        
                        <select name="gener" id="generOptions">
                            <option value="0">Seleccionar</option>
                            <option value="1">Hombre</option>
                            <option value="2">Mujer</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>
                    

                    <div class="button">
                        <button type="button">Siguiente</button>
                    </div>
                </form>

                <form method="post" action="" id="Form2">
                    <h3>DATOS DEPORTIVOS</h3>
                    <input type="number" placeholder="Estatura" required>
                    <input type="number" placeholder="Peso" required>

                    <div class="groupExperience">
                        <select name="experience" id="experienceOptions">
                            <option value="0">Seleccionar</option>
                            <option value="1">Principiante</option>
                            <option value="2">Intermedio</option>
                            <option value="3">Avanzado</option>
                        </select>
                    </div>
                    

                    <div class="button">
                        <button type="button">Anterior</button>
                        <button type="button">Siguiente</button>
                    </div>
                </form>

                <form method="post" action="" id="Form3">
                    <h3>DATOS DE LA CUENTA</h3>
                    <input type="text" placeholder="Usuario" required>
                    <input type="password" placeholder="Contraseña" required>
    
                    <div class="button">
                        <button type="button">Anterior</button>
                        <button type="button">Enviar</button>
                    </div>
                </form>

                <dvi class="step-row">
                    <div id="progress"></div>
                    <div class="step-col"><small>Paso 1</small></div>
                    <div class="step-col"><small>Paso 2</small></div>
                    <div class="step-col"><small>Paso 3</small></div>
                </dvi>

            </div>
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


</head>
</html>

