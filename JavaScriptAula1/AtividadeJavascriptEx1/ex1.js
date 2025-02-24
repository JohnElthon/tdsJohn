function VerificarVelocidade(){
let velocidade = window.document.getElementById('velocidade');
let valor = Number(velocidade.value);
let resultado = window.document.getElementById('resultado');

if (valor > 40 && valor < 100){
    console.log('Multado!')
    resultado.innerHTML = '<strong>Multado</strong>';
}
else if (valor > 100){
    console.log('Multado e Veiculo será apreendido!')
    resultado.innerHTML = '<strong>Multado e Veiculo será apreendido!</strong>';
}
else {
    console.log('Dentro da velocidade permitida!')
    resultado.innerHTML = '<strong>Dentro da velocidade permitida</strong>'
}






}