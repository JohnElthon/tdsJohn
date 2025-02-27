function Calcular(){
    let selecao = window.document.getElementById('dia');
    let dia = Number(selecao.value);
    let resposta = window.document.getElementById('resposta');

    console.log(selecao.value);

    switch (dia){
        case 0:
            resposta.innerHTML = '<strong>Hoje é Domingo!</strong>';
            resposta.style.color = 'blue';
            break;
        case 1:
            resposta.innerHTML = '<strong>Hoje é Segunda-Feira!</strong>';
            resposta.style.color = 'red';
            break;
        case 2:
            resposta.innerHTML = '<strong>Hoje é Terça-Feira !</strong>';
            resposta.style.color = 'red';
            break;
        case 3:
            resposta.innerHTML = '<strong>Hoje é Quarta-Feira!</strong>';
            resposta.style.color = 'orange';
            break;
        case 4:
            resposta.innerHTML = '<strong>Hoje é Quinta-Feira!</strong>';
            resposta.style.color = 'yellow';
            break;
        case 5:
            resposta.innerHTML = '<strong>Hoje é Sexta-Feira!</strong>';
            resposta.style.color = 'green';
            break;
        case 6:
            resposta.innerHTML = '<strong>Hoje é Sábado!</strong>';
            resposta.style.color = 'green';
            break;
        default:
            resposta.innerHTML = 'Dia Inválido selecionado!';
            break;

            
            
            
            
            

    }

}