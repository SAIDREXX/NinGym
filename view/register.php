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

                <form method="post" action="../sql/signup_controller.php" id="Form1" name="form1">
                    <?php
                    include("../sql/signup_controller.php");
                    ?>
                    <h3>DATOS PERSONALES</h3>
                    <input type="text" placeholder="Nombre" id="name" name="name">
                    <input type="text" placeholder="Apellidos" id="lastName" name="lastName">

                    <div class="group">
                        <input type="number" placeholder="Edad" id="age" name="age">

                        <select name="gener" id="generOptions">
                            <option value="Seleccionar">Genero</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>


                    <div class="button" id="Next1">
                        <button type="button">Siguiente</button>
                    </div>
                </form>

                <form method="post" action="" id="Form2" name="form2">
                    <h3>DATOS DEPORTIVOS</h3>
                    <input type="number" placeholder="Estatura(cm)" id="height" name="height">
                    <input type="number" placeholder="Peso(kg)" id="weight" name="weight">

                    <div class="groupExperience">
                        <select name="experience" id="experienceOptions">
                            <option value="Seleccionar">Experiencia</option>
                            <option value="Principiante">Principiante</option>
                            <option value="Intermedio">Intermedio</option>
                            <option value="Avanzado">Avanzado</option>
                        </select>
                    </div>


                    <div class="button">
                        <button type="button" id="Back1">Anterior</button>
                        <button type="button" id="Next2">Siguiente</button>
                    </div>
                </form>

                <form method="post" action="" id="Form3" name="form3">

                    <h3>DATOS DE LA CUENTA</h3>
                    <input type="text" placeholder="Usuario" name="username">
                    <input type="password" placeholder="Contraseña" name="password">
                    <input type="hidden" id="name_hidden" name="name_hidden">
                    <input type="hidden" id="lastName_hidden" name="lastName_hidden">
                    <input type="hidden" id="age_hidden" name="age_hidden">
                    <input type="hidden" id="gener_hidden" name="gener_hidden">
                    <input type="hidden" id="weight_hidden" name="weight_hidden">
                    <input type="hidden" id="height_hidden" name="height_hidden">
                    <input type="hidden" id="experience_hidden" name="experience_hidden">

                    <div class="button">
                        <button type="button" id="Back2">Anterior</button>
                        <button type="submit" id="submit" onclick="copiarValores()" name="sendForm">Enviar</button>
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
        let text = document.querySelectorAll('ul li a').forEach(text => {
            text.innerHTML = text.innerText.split('').map((letters, i) => `<span style="transition-delay:${i*40}ms;">${letters}</span>`).join('');
        })

        var Form1 = document.getElementById("Form1");
        var Form2 = document.getElementById("Form2");
        var Form3 = document.getElementById("Form3");

        var Next1 = document.getElementById("Next1");
        var Next2 = document.getElementById("Next2");
        var Back1 = document.getElementById("Back1");
        var Back2 = document.getElementById("Back2");



        Next1.onclick = function() {
            Form1.style.left = "-450px";
            Form2.style.left = "40px";
            progress.style.width = "240px";
        }

        Back1.onclick = function() {
            Form1.style.left = "40px";
            Form2.style.left = "450px";
            progress.style.width = "120px";
        }
        Next2.onclick = function() {
            Form2.style.left = "-450px";
            Form3.style.left = "40px";
            progress.style.width = "360px";
        }
        Back2.onclick = function() {
            Form2.style.left = "40px";
            Form3.style.left = "450px";
            progress.style.width = "240px";
        }

        function copiarValores() {
            document.getElementById('name_hidden').value = document.getElementById('name').value;
            document.getElementById('lastName_hidden').value = document.getElementById('lastName').value;
            document.getElementById('age_hidden').value = document.getElementById('age').value;
            document.getElementById('gener_hidden').value = document.getElementById('generOptions').value;
            document.getElementById('weight_hidden').value = document.getElementById('weight').value;
            document.getElementById('height_hidden').value = document.getElementById('height').value;
            document.getElementById('experience_hidden').value = document.getElementById('experienceOptions').value;
        }
    </script>
</body>
</head>

</html>