const headerP = document.querySelector("header");

headerP.innerHTML = `
<div>
    <nav class="fixed-top navcompleta navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container">
    <a>
        <img class="imgMode" src="../imagenes/usadas/modeDarkOrWhite.png" alt="Modo de visualizacion">
    </a>
    <a class="navbar-brand me-2" href="../index.php">
        <img class="logos" src="../imagenes/logosSimbolos/logo2.png" alt="Logo" alt="/index.php" loading="lazy">
    </a>
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>          
            <div class="d-flex align-items-center">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btnBuscar btn btn-outline-success" type="submit">Search</button>
                <a class="imgAdministrar" href="./admin.php"><img class="imgAdmin" src="../imagenes/usadas/administrar.jpg" alt="Administrar"></a>
            </div>
        </div>
    </div>
    </nav>
</div>`;




/* img-modo */
const mode = document.querySelector(".imgMode");
/* color barra de navegacion */
const clNavegacion = document.querySelector(".navcompleta");
/* logo de la pagina */
const logoNav = document.querySelector(".logos");
/* i */
let i = 0;
/* Boton buscar */
const btnBuscar = document.querySelector(".btnBuscar")


mode.addEventListener("click", ()=>{
    if (i == 0) {

        clNavegacion.classList.remove("bg-body-tertiary");
        clNavegacion.classList.add("dark-background");
        mode.style.transform = "rotate(180deg)";
        logoNav.src = "../imagenes/logosSimbolos/logo1.png";
        btnBuscar.classList.remove("btn-outline-success");
        btnBuscar.classList.add("btn-outline-success2");
        i++;
    } else if (i == 1) {
        clNavegacion.classList.remove("dark-background");
        clNavegacion.classList.add("bg-body-tertiary");
        mode.style.transform = "rotate(360deg)";
        logoNav.src = "../imagenes/logosSimbolos/logo2.png";
        btnBuscar.classList.remove("btn-outline-success2");
        btnBuscar.classList.add("btn-outline-success");
    
        i--;
    }
    
})
