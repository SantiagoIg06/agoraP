const headerP = document.querySelector("header");
headerP.innerHTML = `
<div>
    <nav class="fixed-top navcompleta navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container">
            <a href="#">
                <img class="imgMode" src="./imagenes/usadas/modeDarkOrWhite.png" alt="Modo de visualizacion">
            </a>
            <a class="navbar-brand me-2" href="./index.php">
                <img class="logos" src="./imagenes/logosSimbolos/logo2.png" alt="Logo" height="16" alt="/index.php" loading="lazy" style="margin-top: -1px;">
            </a>
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>          
            <div class="d-flex align-items-center">
                <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
                    <a class="nav_lg_sg2 log" href="./iniciarsesion.php">Login</a>
                </button>
                <button data-mdb-ripple-init type="button" class="btn btn2 btn-primary me-3">
                    <a class="nav_lg_sg log2" href="./registerU.php">Sign up</a>
                </button>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btnBuscar btn btn-outline-success" type="submit">Search</button>
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
/* color login */
const clLogin = document.querySelector(".log");
/* color singUp */
const clSing = document.querySelector(".btn2");
/* i */
let i = 0;
/* Boton buscar */
const btnBuscar = document.querySelector(".btnBuscar")

mode.addEventListener("click", ()=>{
    if (i == 0) {

        clNavegacion.classList.remove("bg-body-tertiary");
        clNavegacion.classList.add("dark-background");
        mode.style.transform = "rotate(180deg)";
        logoNav.src = "./imagenes/logosSimbolos/logo1.png";
        clLogin.classList.remove("nav_lg_sg2");
        clLogin.classList.add("white-color");
        clSing.classList.remove("btn-primary");
        clSing.classList.add("btn-primary2");
        btnBuscar.classList.remove("btn-outline-success");
        btnBuscar.classList.add("btn-outline-success2");
        i++;
    } else if (i == 1) {
        clNavegacion.classList.remove("dark-background");
        clNavegacion.classList.add("bg-body-tertiary");
        mode.style.transform = "rotate(360deg)";
        logoNav.src = "./imagenes/logosSimbolos/logo2.png";
        clLogin.classList.remove("white-color");
        clLogin.classList.add("nav_lg_sg2");
        clSing.classList.remove("btn-primary2");
        clSing.classList.add("btn-primary");
        btnBuscar.classList.remove("btn-outline-success2");
        btnBuscar.classList.add("btn-outline-success");
        

        i--;
    }
    
})
