const d = document;
const menu = d.getElementById("menu");

d.addEventListener("click", (e) => {
    if (e.target.matches(".hamburger") || e.target.matches(`.hamburger *`)) {
        menu.classList.toggle("movimiento");
    }
    if (e.target.matches(".submenu-elemnt")) {
        menu.classList.remove("movimiento");
    }
});

d.addEventListener("click", (e) => {
    if (e.target.matches(".menu *")) {
        e.preventDefault();
    }
});

d.addEventListener("click", (e) => {
    if (e.target.matches(".listadomenu")) {
        e.preventDefault();
    }
});
