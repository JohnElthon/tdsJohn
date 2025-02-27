function VerificarNacionalidade(){
    let nacionalidade = window.document.getElementById('nac');
    let verificar = String(nacionalidade.value);
    let resultado = window.document.getElementById('resultado');

    if (verificar == 'Brasil' || verificar == 'brasil'){
        resultado.innerHTML = '<strong>Você é Brasileiro!</strong>'
    }
    else{
        resultado.innerHTML = '<strong>Você é Estrangeiro!</strong>'
    }
}