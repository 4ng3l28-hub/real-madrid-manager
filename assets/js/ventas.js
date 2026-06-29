// ============================
// CARGAR JUGADORES
// ============================

fetch("../api/jugadores.php")

.then(res=>res.json())

.then(jugadores=>{

    let select=document.getElementById("jugador");

    jugadores.forEach(j=>{

        select.innerHTML += `
        <option value="${j.id}">
            ${j.nombre}
        </option>
        `;

    });

});


// ============================
// CARGAR EQUIPOS
// ============================

fetch("../api/equipos.php")

.then(res=>res.json())

.then(equipos=>{

    let select=document.getElementById("equipo");

    equipos.forEach(e=>{

        select.innerHTML += `
        <option value="${e.id}">
            ${e.nombre}
        </option>
        `;

    });

});


// ============================
// CAMBIO DE JUGADOR
// ============================

document.getElementById("jugador").addEventListener("change",function(){

    fetch("../api/jugador.php?id="+this.value)

    .then(res=>res.json())

    .then(j=>{

        document.getElementById("fotoJugador").src =
        "../assets/img/jugadores/"+j.foto;

        document.getElementById("nombreJugador").innerHTML=j.nombre;

        document.getElementById("posicionJugador").innerHTML=j.posicion;

        document.getElementById("dorsalJugador").innerHTML=j.dorsal;

        document.getElementById("valorJugador").innerHTML=
        "€ "+Number(j.valor_mercado).toLocaleString();

    });

});


// ============================
// CAMBIO DE EQUIPO
// ============================

document.getElementById("equipo").addEventListener("change", function () {

    if(this.value=="") return;

    fetch("../api/equipo.php?id="+this.value)

    .then(res => res.json())

    .then(e => {

        // Mostrar información

        document.getElementById("escudoEquipo").src =
        "../assets/img/rivales/" + e.escudo;

        document.getElementById("nombreEquipo").innerHTML = e.nombre;

        document.getElementById("ligaEquipo").innerHTML = e.liga;

        document.getElementById("paisEquipo").innerHTML = e.pais;

        // Guardar en los campos ocultos

        document.getElementById("equipo_destino").value = e.nombre;
        console.log("Equipo seleccionado:", e.nombre);
console.log("Valor del hidden:", document.getElementById("equipo_destino").value);

        document.getElementById("escudo_equipo_destino").value = e.escudo;

    });

});