var meuArray = []
var meuArray2 = []
var qtnNumeros = 0
var MValor = 0
var NValor = 99999
var Soma = 0
var Media = 0
function Clicou() {
    var pegandoN = window.document.getElementById("numero")
    var N = Number(pegandoN.value)
    var pegandoH = window.document.getElementById("novoN")
    if (N <= 0) {
        window.alert(`Valor invalido`)
        return
    }
    if (meuArray2.includes(N)) {
        window.alert("Já colocou esse número")
        return
    } else {
        qtnNumeros = qtnNumeros + 1
        if (N > MValor) {
            MValor = N
        }
        if (N < NValor) {
            NValor = N
        }
        Soma = Soma + N
        Media = Soma / qtnNumeros
        meuArray.push(N)
    }
    if (N < 100 || N > 1) {
        pegandoH.innerHTML += `Valor ${N} adicionado.</br>`
        meuArray2.push(N)
    } else {
        window.alert("Valor Inválido")
    }
}
function Verificou() {
    var DFinal = window.document.getElementById("Oie")
    DFinal.innerHTML = '';
    DFinal.innerHTML += `Ao todo, temos ${qtnNumeros} números cadastrados.</br>`
    DFinal.innerHTML += `O Maior Valor informado foi ${MValor}.</br>`
    DFinal.innerHTML += `O Menor Valor informado foi ${NValor}.</br>`
    DFinal.innerHTML += `Somando todos os números temos ${Soma}</br>`
    DFinal.innerHTML += `A Media dos valores digitados são ${Media}</br>`
}

/*
 if (N >= 100 || N <= 1) {
    window.alert('Valor impossível')
}
if (N <= 100 || N >= 1) {
pegandoH.innerHTML +=`Valor ${N} foi adicionado. </br>`
}
pegandoH.innerHTML += `Valor ${N} adicionado. </br>`

*/
