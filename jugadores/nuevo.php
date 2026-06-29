<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Registrar Jugador</title>

<link rel="stylesheet" href="../assets/css/nuevo-jugador.css">

</head>

<body>

<div class="container">

    <div class="form-card">

        <h1>Registrar Jugador</h1>

        <form action="guardar.php" method="POST" enctype="multipart/form-data">

            <div class="input-group">
                <label>Foto del jugador</label>
                <input type="file" name="foto" required>
            </div>

            <div class="input-group">
                <label>Nombre completo</label>
                <input type="text" name="nombre" placeholder="Ej: Jude Bellingham" required>
            </div>

            <div class="row">

                <div class="input-group">
                    <label>Edad</label>
                    <input type="number" name="edad" min="15" max="45" required>
                </div>

                <div class="input-group">
                    <label>Nacionalidad</label>
                    <input type="text" name="nacionalidad" placeholder="Ej: Inglaterra" required>
                </div>

            </div>

            <div class="row">

                <div class="input-group">

                    <label>Posición</label>

                    <select name="posicion" required>

                        <option value="">Seleccione una posición</option>

                        <option value="Portero">Portero</option>
                        <option value="Defensa Central">Defensa Central</option>
                        <option value="Lateral Derecho">Lateral Derecho</option>
                        <option value="Lateral Izquierdo">Lateral Izquierdo</option>
                        <option value="Pivote">Pivote</option>
                        <option value="Mediocentro">Mediocentro</option>
                        <option value="Mediapunta">Mediapunta</option>
                        <option value="Extremo Derecho">Extremo Derecho</option>
                        <option value="Extremo Izquierdo">Extremo Izquierdo</option>
                        <option value="Delantero Centro">Delantero Centro</option>

                    </select>

                </div>

                <div class="input-group">

                    <label>Dorsal</label>

                    <select name="dorsal" required>

                        <option value="">Seleccione un dorsal</option>

                        <?php
                        for($i = 1; $i <= 99; $i++){
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>

                    </select>

                </div>

            </div>

            <div class="row">

                <div class="input-group">

                    <label>Estado</label>

                    <select name="estado">

                        <option value="Activo">Activo</option>
                        <option value="Lesionado">Lesionado</option>
                        <option value="Suspendido">Suspendido</option>
                        <option value="Vendido">Vendido</option>

                    </select>

                </div>

                <div class="input-group">

                    <label>Valor de Mercado (€)</label>

                    <input
                        type="number"
                        step="0.01"
                        name="valor_mercado"
                        placeholder="Ej: 180000000">

                </div>

            </div>

            <div class="buttons">

                <a href="index.php" class="btn-back">
                    ← Volver
                </a>

                <button type="submit" class="btn-save">
                    Guardar Jugador
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>