 
 const cargarTabla = (consolas)=>{
    let tbody = document.querySelector("#tbody-consola");

    for(let i=0; i < consolas.length; ++i){
        let tr = document.createElement("tr");
        let tdnombre = document.createElement("td");
        tdnombre.innerText = consolas[i].nombre;
        let tdmarca = document.createElement("td");
        tdmarca.innerText = consolas[i].marca;
        let tdanno = document.createElement("td");
        tdanno.innerText = consolas[i].anno;
        let tdaccion = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idConsola = consolas[i].id;
        tdaccion.appendChild(botonEliminar);

        tr.appendChild(tdnombre);
        tr.appendChild(tdmarca);
        tr.appendChild(tdanno);
        tr.appendChild(tdaccion);

        tbody.appendChild(tr);
    }

 }
 
 document.addEventListener("DOMContentLoaded", async()=>{
    // carga de la tabla de consolas
    // se ejecuta al cargar completamente la pagina y recursos
    let consolas = await getConsolas();
    cargarTabla(consolas);
 })