const cargarMarcas = async()=>{
    // buscar marcas a la api
    let resultado = await axios.get("api/marcas/get");
    let marcas = resultado.data;
    // cargar las marcas dentro del select
    let marcaSelect = document.querySelector("#marca-select");
    marcas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        marcaSelect.appendChild(option);
    });
}
// ejecuta codigo, aseguranse de la carga completa de la pagina y recursos.
document.addEventListener("DOMContentLoaded", ()=>{
    cargarMarcas();
})

document.querySelector("#registrar-btn").addEventListener("click",async()=>{
    let nombre = document.querySelector("#nombre-txt").value;
    let marca = document.querySelector("#marca-select").value;
    let anno = document.querySelector("#anno-txt").value;
    let consola = {};
    consola.nombre = nombre;
    consola.marca = marca;
    consola.anno = anno;
    // falta validar
    //1 - va al controlador - pasa los datos
    //2 - el controlador crea el modelo
    //3 - el modelo ingresa en la base de datos
    let res = await crearConsola(consola);

    await Swal.fire("Listoko","Consola creada exitosamente","info");
    // La linea que viene despues del Swal se va a ejecutar solo cuando la persona aprete el OK
    // Redirige a otra pagina.
    window.location.href = "ver_consola";
});