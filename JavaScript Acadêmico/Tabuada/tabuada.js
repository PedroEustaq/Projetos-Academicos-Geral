function Gerar() {
    var A = window.document.getElementById("seletorN")
    var N = Number(A.value)
    var rolagem = window.document.getElementById("rola")
    var C = 0
    var S = 0
    var DigiteUN = window.document.getElementById("AcimaUN")
    while (C < 10) {
        if (C == 0) {
            DigiteUN.innerHTML = ""
            }
        C = C + 1
        S = N * C
     DigiteUN.innerHTML += `${N} x ${C} = ${S} </br>`
    }
}
window.onload = function() {
    var rolagem = window.document.getElementById("rola")
    var DigiteUN = window.document.getElementById("AcimaUN")
    DigiteUN.innerHTML = `Digite acima um número`
}