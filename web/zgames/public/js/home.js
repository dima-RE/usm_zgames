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

cargarMarcas();