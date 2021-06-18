//los sitios webs siempre esperan peticiones con cabeceras.
/* libreria AXIOS se crea dentro de Windows.
Dentro de default se usara en cada peticion de axios.
Dentro de las cabeceras de la peticion tendra atributo common con el nombre del token, esperado por el servidor con laravel.
Las webs necesitan de las cabeceras para procesar la informacion*/
window.axios.defaults.headers.common["X-CSRF-TOKEN"] = document.querySelector("meta[name='csrf-token']").textContent;
