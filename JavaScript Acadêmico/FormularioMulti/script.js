var btn1 = document.getElementById("sim1");
var Soma = 0;

var form = document.getElementById("formP")

var valorF = document.getElementById("oitenta")

var resuF = document.getElementById("resultado")

var main = document.getElementById("mainzao")

var frasF = document.getElementById("pezinh")

var body = document.getElementById("bodi")
function estaMarcado(id) {
    var idRadio = document.getElementById(id);
    if (idRadio.checked) {
        return 1;
    } else {
        return 0;
    }

}

function estaMarcadoN(id) {
    var idRadio = document.getElementById(id);
    if (idRadio.checked) {
        return 1;
    } else {
        return 0;
    }

}

function rodarFinal() {
    Soma = estaMarcado("sim1") + estaMarcado("detalhado2") + estaMarcado("sempre3") + estaMarcado("muito_empatico4") + estaMarcado("sim5") + estaMarcado("rapido6") +
    estaMarcado("claras7") + estaMarcado("juntos8") + estaMarcado("confortavel9") + estaMarcado("5");

    Soma = Soma - estaMarcadoN("nao1") - estaMarcadoN("nao_explicou2") - estaMarcadoN("nunca3") - estaMarcadoN("sem_empatia4") - estaMarcadoN("nao5") - estaMarcadoN("demorado6") -
    estaMarcadoN("nao_orientado7") - estaMarcadoN("apenas_indicou8") - estaMarcadoN("inibido9") - estaMarcadoN("1");



    
    form.style.animationName = "verResult";
    resuF.style.animationName = "verResultF";
    window.scrollTo({
        top:0,
        behavior: 'smooth'
    })
    body.style.alignItems = 'center'
    resuF.style.justifyContent = 'space-between'
        
    if (Soma >= 4) {
        main.style.background = 'linear-gradient(to right, rgb(14, 210, 0), rgb(11, 162, 0))';
        valorF.style.background = 'linear-gradient(to right, rgb(11, 162, 0), rgb(14, 210, 0))';
        frasF.innerHTML = "Isso aí! Um bom atendimento, sempre focado em melhorar.";
    } else if (Soma >= -3) {
        main.style.background = 'linear-gradient(to right, #ffcc33, #ffb300)';
        valorF.style.background = 'linear-gradient(to right, #ffb300, #ffcc33)';
        frasF.innerHTML = "Parece que precisamos aprimorar nosso atendimento!";
    } else {
        main.style.background = 'linear-gradient(to right, #940533, #c0012a)';
        valorF.style.background = 'linear-gradient(to right, #c0012a, #940533)';
        frasF.innerHTML = "Pedimos desculpas pelo transtorno.";
    }

    Soma = Soma + 5
    valorF.innerHTML = Soma
}