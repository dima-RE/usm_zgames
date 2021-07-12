
//getConsolas
const getConsolas = async ()=>{
    //llamar al controles GET en la ubicacion
    let resp = await axios.get("api/consolas/get");
    return resp.data;
};
//crearConsola

//function(){}
//arrowfunction ()=>{}
const crearConsola = async (consola)=>{
    let resp = await axios.post("api/consolas/post", consola, {
        headers: {
            "Content-Type": "application/json"
        }
    });//estructura de un POST con el contenido a enviar = ruta, objeto y tipo de objeto
};

//js llama al servicio, que llama al controlador, que llama al modelo y llama a la base de datos/

const eliminarConsola = async(id)=>{
    try{
        let resp = await axios.post("api/consolas/delete", {id},{
            headers: {
                "Content-Type": "aplication/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    };
};