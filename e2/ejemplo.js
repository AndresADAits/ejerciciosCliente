function validacionNombre() {
    let nombreInput = $("#nombre").val();
    let Input = $("#nombre");
    $("#spinner").css("display", "block");
    let form = new FormData();
    form.append("nombre", nombreInput);
    fetch("controlaError.php", {
            method: 'post',
            body: form
        })
        .then(function(response) {
            return response.json()

        })
        .then(function(response) {
            gestionarErrores(Input, response.nombre)
        })
        .catch(function(err) {
            console.log();
            alert("SE HA PRODUCIDO UN ERROR");
        }).finally(function() {
            $("#spinner").css("display", "none");

        });
}


function validarFormulario(event) {
    event.preventDefault();
    let nombreInput = $("#nombre").val();
    let Input = $("#nombre");
    let id = $("#id").val()
    $("#spinner").css("display", "block");
    let form = new FormData();
    form.append("nombre", nombreInput);
    fetch("controlaError.php", {
            method: 'post',
            body: form
        })
        .then(function(response) {
            return response.json()

        })
        .then(function(response) {
            if (gestionarErrores(Input, response.nombre) === false) {
                let form2 = new FormData();

                form2.append("id", id);
                form2.append("nombre", nombreInput);
                fetch("update.php", {
                        method: 'post',
                        body: form2
                    }).then(function() {
                        let div = $("#resultado");
                        div.html("");
                        div.append("Usuario actualizado");
                    })
                    .catch(function(err) {
                        console.log(err);
                        alert("SE HA PRODUCIDO UN ERROR");
                    })
            }

        })
        .catch(function(err) {
            console.log(err);
            alert("SE HA PRODUCIDO UN ERROR");
        }).finally(function() {
            $("#spinner").css("display", "none");

        });
}





function gestionarErrores(input, errores) {
    var hayErrores = false;
    let divErrores = input.next();
    divErrores.html("");
    input.removeClass("bg-success bg-danger");
    if (Object.keys(errores).length === 0) {
        input.addClass("bg-success");
    } else {
        hayErrores = true;
        input.addClass("bg-danger");
        for (let i = 0; Object.keys(errores).length > i; i++) {
            divErrores.append("<div>" + errores[i] + "</div>");
        }
    }
    input.parent().next().remove();
    return hayErrores;
}

function incluirSpinner(input) {
    if (input.parent().next().length === 0) {
        let spin = $(".spinner").first().clone(true);
        input.parent().after(spin);
        spin.show();
    }
}