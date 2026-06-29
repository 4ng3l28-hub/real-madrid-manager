<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Real Madrid Manager</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="login-container">

        <img
            src="https://upload.wikimedia.org/wikipedia/en/5/56/Real_Madrid_CF.svg"
            alt="Real Madrid"
            class="logo">

        <h2 class="titulo">
            Sistema de Gestión Deportiva
        </h2>

        <form action="validar.php" method="POST">

            <div class="input-group">
                <input
                    type="text"
                    name="usuario"
                    placeholder="Usuario"
                    required>
            </div>

            <div class="input-group">
                <input
                    type="password"
                    name="password"
                    placeholder="Contraseña"
                    required>
            </div>

            <button
                type="submit"
                class="btn-login">
                Iniciar Sesión
            </button>

        </form>

    </div>

</body>

</html>