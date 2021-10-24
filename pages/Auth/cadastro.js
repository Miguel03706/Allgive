function exibir() {
    let div = document.getElementById("form_donate");
    let doador = document.getElementById("doador");
    let ong = document.getElementById("ong");

    div.style.display = "block";
    doador.style.backgroundColor = "#c52ea3";
    ong.style.backgroundColor = "#dc81c8";
    document.getElementById("form_ong").style.display = "none";

}

function ocultar() {
    let doador = document.getElementById("doador");
    let ong = document.getElementById("ong");

    doador.style.backgroundColor = "#dc81c8";
    ong.style.backgroundColor = "#c52ea3";
    document.getElementById("form_donate").style.display = "none";
    document.getElementById("form_ong").style.display = "block";
}