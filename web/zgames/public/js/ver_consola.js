const iniciarEliminacion = async function(){
   // 1 - obtener id del boton
   let id = this.idConsola;
   let resp = await Swal.fire({title:"Estas seguro?", text:"La accion es irreversible", icon:"error", showCancelButton:true});
   if(resp.isConfirmed){
      // 1 - eliminar
      // si hay errires de espera, comprobar si las funciones son AWAIT y colocarlo
      if(await eliminarConsola(id)){
         // 2 - exito -> recargar tabla
         let consolas = await getConsolas();
         cargarTabla(consolas);
         Swal.fire("Operacion Completada","Consola eliminada exitosamente","info");
      } else {
         Swal.fire("Error","Consola no encontrada","error")
      };
   } else {
      Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
   };
};


 const cargarTabla = (consolas)=>{
    let tbody = document.querySelector("#tbody-consola");
    tbody.innerHTML = "";

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
        botonEliminar.addEventListener("click", iniciarEliminacion);

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