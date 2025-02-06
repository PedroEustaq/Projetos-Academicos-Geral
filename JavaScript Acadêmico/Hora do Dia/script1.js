var agora = new Date()
var HoraAtual = agora.getHours()
var texto = window.document.getElementById(`horas`)
texto.innerText = `Agora são ${HoraAtual} horas.`
var imagem = window.document.getElementById(`imagem`)
var body = window.document.body
if (HoraAtual > 23) {
    window.alert("[ERRO] Você errou na data")
}
else if (HoraAtual > 0 && HoraAtual <= 12 ) {
    imagem.src = "https://i.pinimg.com/originals/13/33/d0/1333d0152dd5faf0d327499183f36090.jpg"
   body.style.background = "rgb(122, 122, 237)"
} else if (HoraAtual >= 13 && HoraAtual <= 18) {
    imagem.src = "https://cdn.pixabay.com/photo/2018/08/09/22/18/sun-3595654_1280.jpg"
    body.style.background = "rgb(252, 176, 76)"
}else if (HoraAtual >= 19 && HoraAtual <= 23) {
     body.style.background = "rgb(20, 45, 79)"
     imagem.src = "https://img.freepik.com/fotos-premium/linda-noite-no-oceano-com-lua-cheia_104785-866.jpg"
}