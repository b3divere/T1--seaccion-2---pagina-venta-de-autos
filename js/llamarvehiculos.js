async function catalogovehiculos() {
    const response = await fetch("vehiculos.php", {
        method: "POST",
    });

    const respuesta = await response.text();
    const obj = JSON.parse(respuesta);
    console.log(obj);

    let body = "";
     for (let i = 0; i < obj.length; i++) {
        body += `<li>
                    <img src="${obj[i].imagenes}">
                    <p>${obj[i].marca} ${obj[i].modelo}</p>
                    <p>$${obj[i].precio}</p>
                    <button onclick="verpopup(popup${obj[i].id})">Ver más</button>
                </li>
            <li>
                <dialog id="popup${obj[i].id}">Ver más</dialog>
                </li>`;
        }
     document.getElementById("contenedor-lista-vehiculos").innerHTML = body;
    
    //Creacion tarjeta de los vehiculos
    // let li = document.createElement("li");
    // let img = document.createElement("img");
    // let p1 = document.createElement("p");
    // let p2 = document.createElement("p");
    // let button = document.createElement("button");

    // img.src += `${obj[i].imagenes}`;
    // p1.innerHTML = `${obj[i].marca} ${obj[i].modelo}`;
    // p2.innerHTML = "$" + `${obj[i].precio}`;
    // button.innerHTML = "ver más";
    
    // button.setAttribute("onclick","verpopup(" + "popup" + obj[i].id + ")");
    // li.appendChild(img);
    // li.appendChild(p1);
    // li.appendChild(p2);
    // li.appendChild(button);
    // document.getElementById("contenedor-lista-vehiculos").appendChild(li);
    
    // //Creacion tarjeta modal
    // let li2 = document.createElement("li");
    // let dialog = document.createElement("dialog");
    // dialog.setAttribute("id","popup" + obj[i].id);
    // let img2 = document.createElement("img");
    // let puno = document.createElement("p");
    // let pdos = document.createElement("p");

    // img2.src = "images/" + `${obj[i].imagenes}`;
    // puno.innerHTML = `${obj[i].marca} ${obj[i].modelo}`;
    // pdos.innerHTML = "$" + `${obj[i].precio}`;

    // dialog.appendChild(img, p1, p2);
    // li2.appendChild(dialog);
    // document.getElementById("contenedor-lista-vehiculos").appendChild(li2);
}


window.addEventListener("load", function () {
    catalogovehiculos();
});

function verpopup(id) {
    console.log("hola");
    id.showModal();
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