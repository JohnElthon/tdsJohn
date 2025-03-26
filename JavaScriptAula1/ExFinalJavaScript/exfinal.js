function calcular(){
     
  let preco = document.getElementById('preco');
  let valor = Number(preco.value);

  let select = document.getElementById('select');

  let valores = select.options [select.selectedIndex];
 
  let porcetagem = valores.value;

  let calcgasolina = (valor*porcetagem);
  // esse código é outro jeito de pegar duas casas de  números
  const total = calcgasolina.toFixed(2)
  // conta para calcular o valor do etanol
  let calcetanol = valor* (1/porcetagem);
  let resultado = document.getElementById('resultado');
   
  const totalgasolina = calcgasolina.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
  const totaletanol = calcetanol.toLocaleString('pt-BR' ,{style: 'currency' , currency: 'BRL' } );

  if (document.getElementById('gasolina').checked){
    resultado.innerText = `Abasteça com Etanol se o seu  preço for menor  ou igual a : ${totalgasolina}`;
  }

  else if (document.getElementById('etanol').checked){
      resultado.innerText = `Abasteça com gasolina se o seu o seu preço for menor ou igual a :  ${totaletanol}`;
  }

  else{
      resultado.innerText = "Nenhum valor encontrado";
  }
}