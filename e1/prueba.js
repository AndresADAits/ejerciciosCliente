document.addEventListener("DOMContentLoaded", function() {


    let selectCampo = document.getElementById("prueba");
    selectCampo.addEventListener("change", function(event) {
        rellenaSelect();
    });

})


function rellenaSelect() {
    $("#spinner").css("display", "block");
    let tipoPrueba = $("#prueba").val();
    let form = new FormData();
    form.append("tipoPrueba", tipoPrueba);
    fetch("prueba.php", {
            method: "post",
            body: form
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(response) {
            $("#selectPrueba").html(response);
        })
        .catch(function(error) {
            console.error(error);
            alert("ERROR EN LA PETICION");
        }).finally(function() {
            $("#spinner").css("display", "none");
        })
}


function gestionarErrores(response) {
    if (!response.ok) {
        throw Error("SE HA PRODUCIDO UN ERROR AL REALIZAR LA PETICIÓN FETCH:" + response.statusText);
    }
    return response;
}