async function catalogovehiculos() {
    const response = await fetch("./vehiculos.php", {
        method: "POST",
    });

    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);

    for (let i = 0; i < obj.length; i++) {
        let vehiculo = obj[i];

        let ulvehiculos = document.getElementById("lista-vehiculos");

        let li = document.createElement("li");
        let img = document.createElement("img");
        let p1 = document.createElement("p");
        let p2 = document.createElement("p");
        let button = document.createElement("button");

        img.src = vehiculo.imagenes;
        p1.innerHTML = vehiculo.marca + " " + vehiculo.modelo;
        p2.innerHTML = "$" + vehiculo.precio;
        button.innerHTML = "Ver más";
        button.setAttribute("onclick", "verpopup(popup" + vehiculo.id + ")");

        li.appendChild(img);
        li.appendChild(p1);
        li.appendChild(p2);
        li.appendChild(button);
        
        ulvehiculos.appendChild(li);

        //Creacion tarjeta modal
        let li2 = document.createElement("li");

        let dialog = document.createElement("dialog");
        dialog.setAttribute("id", "popup" + vehiculo.id);
        dialog.setAttribute("class", "popup");

        let img2 = document.createElement("img");
        let puno = document.createElement("p");
        let pdos = document.createElement("p");

        img2.src = vehiculo.imagenes;
        puno.innerHTML = vehiculo.marca + " " + vehiculo.modelo;
        pdos.innerHTML = "$" + vehiculo.precio;
        dialog.appendChild(img2);
        dialog.appendChild(puno);
        dialog.appendChild(pdos);

        li2.appendChild(dialog);
        ulvehiculos.appendChild(li2);
    }
}

window.addEventListener("load", function () {
    catalogovehiculos();
});

function verpopup(id) {
    id.showModal();
    id.style.display = "block";
    id.addEventListener("click", (e) => {
        if (e.target === id) {
            id.close();
            id.style.display = "none";
        }
    });

    window.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            id.close();
            id.style.display = "none";
        }
    });
}