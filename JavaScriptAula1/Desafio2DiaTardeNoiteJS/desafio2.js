function trocar(){
    let agora = new Date();
    let hora = agora.getHours();
    let minuto = agora.getMinutes();
    let horas = window.document.getElementById('horas')
    let img = window.document.getElementById('imagem')
    let fundo = window.document.getElementById('fundo')

    if (hora >=0 && hora <=5){
        horas.innerText = `Boa madrugada! agora são ${hora} horas ${minuto} minutos!`;
        img.src = 'madrugada2.jpg'
        
    }

    else if (hora < 12){
        horas.innerText = `Bom Dia! agora são ${hora} horas ${minuto} minutos!`
        img.src = 'manhã1.jpg';
        
    }
    else if (hora < 18){
        horas.innerText = `Boa Tarde! agora são ${hora} horas ${minuto} minutos!`
        img.src = 'tarde2.jpg';
        
    }
    else{
        horas.innerText = `Boa Noite! agora são ${hora} horas ${minuto} minutos!`
        img.src = 'noite2.jpg';
       
    }
}