
function Contar() {

    var inicio = window.document.getElementById("inicio")
    var fim = window.document.getElementById("fim")
    var passo = window.document.getElementById("passo")
    var inicioN = Number(inicio.value)
    var fimN = Number(fim.value)
    var passoN = Number(passo.value)
    var escrever = window.document.getElementById("escrever")
    var c = 0

    if (fimN == 0 || passoN == 0) {
        window.alert("Bota pelo menos um inicio,fim e passo né, e que nao seja 0!")
    } else {
        escrever.innerHTML = ''
        escrever.innerHTML += `${inicioN} 👉`
        while (inicioN < fimN) {
            c = inicioN + passoN
            inicioN = c
            escrever.innerHTML += `${c} 👉`
        }
        escrever.innerHTML += `🏁`
    }
}