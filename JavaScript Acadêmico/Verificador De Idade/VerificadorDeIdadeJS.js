var AnoDN = window.document.getElementById("AnoTXT");
var SexM = window.document.getElementById("SexM");
var SexF = window.document.getElementById("SexF");
var painel = window.document.getElementById("Painel");
var TXTEX = window.document.getElementById("TXTEX");
var img = window.document.getElementById("img")
// Verificar se o botão de rádio "Feminino" está marcado
function Calcular() {
    var AnoR = Number(AnoDN.value)
    const anoAtual = new Date().getFullYear();
    var AnoAT = anoAtual;

    if (AnoR == 0) {
        window.alert("Escreva seu ano de nascimento")
        return
    }
    var IdadeR = AnoAT - AnoR

    if (IdadeR < 0) {
        window.alert(`Impossível ter ${IdadeR} anos`)
        return
    }
    if (IdadeR > 116) {
        window.alert(`Ah, Ok! Então você tem ${IdadeR} anos de idade? O Máximo atingindo pela humanidade é 116!`)
        return
    }


    if (!SexM.checked && !SexF.checked) {
        window.alert("Escolha seu gênero")
        return
    }
    if (SexM.checked) {
        // Definir a altura do painel como 400px
        painel.style.height = "400px";

        // Alterar o conteúdo do elemento TXTEX
        var SexoV = "Homem"
    }
    if (SexF.checked) {
        var SexoV = "Mulher"
        painel.style.height = "400px";
    }
    //HOMEM
    if (SexM.checked) {
        if (IdadeR < 18 && IdadeR > 0) {
            img.src = "./img/garoto.jpg"
        }

        if (IdadeR == 0) {
            img.src = "./img/bebeM.png"
        }
        if (IdadeR >= 18 && IdadeR < 59) {
            img.src = "./img/toby.png"
        }
        if (IdadeR >= 60) {
            img.src = "./img/papa.jpg"
        }
        if (IdadeR == 100) {
            img.src = "./img/aang.png"
        }
    }
    if (SexF.checked) {
        if (IdadeR < 18 && IdadeR > 0) {
            img.src = "./img/enid.jpg"
        }

        if (IdadeR == 0) {
            img.src = "./img/bebeF.png"
        }
        if (IdadeR >= 18 && IdadeR < 59) {
            img.src = "./img/mulher.png"
        }
        if (IdadeR >= 60) {
            img.src = "./img/avo.jpg"
        }
    }
    TXTEX.innerHTML = `Detectamos ${SexoV} de ${IdadeR} anos.`
}