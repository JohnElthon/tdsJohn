function VerificarIdade(){

    let idade = window.document.getElementById('idade');
    let verificar = Number(idade.value);
    let resultado = window.document.getElementById('resultado');

    if(verificar < 16){
        resultado.innerHTML = ('<strong>Você não pode votar!</strong>');
    }

    else if ( verificar < 18 || verificar > 65){
        resultado.innerHTML = ('<strong>Voto Facultativo!</strong>');
    }
    else{
        resultado.innerHTML = ('<strong>Voto Obrigatorio!</strong>')
    }

    
}