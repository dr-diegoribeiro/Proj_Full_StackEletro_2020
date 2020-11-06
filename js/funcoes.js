
function exibir_categoria(categoria) {
    //alert(categoria);x    
    categoria = "box_" + categoria;
    let elementos = document.getElementsByClassName('produto');
    for (let i = 0; i < elementos.length; i++) {
        console.log(categoria);
        if (categoria == elementos[i].id)
            elementos[i].style = "display:block";
        else
            elementos[i].style = "display:none";
    }
}

let exibir_todos =() => {
    let elementos = document.getElementsByClassName('produto');

    for(let i=0; i<elementos.length; i++){
        elementos[i].style = "display:block";
}
}

//document.getElementById("cupomdesconto").window.prompt("Olá , tudo bem?")

function cumpomdedesconto() {

    let p1 

    p1 = +prompt ("Hello, você é programador(a)? Digite 1 para SIM e 2 para NÃO:");

    if (p1 == 1)
    {
       let p2 = prompt ("Legal! Agora nos responda: Qual o número da última versão do HTML?")

        if (p2 == 5) {
            alert("Parabéns, está correto! Digite a palavra REDPILL no campo *cupom* da página de pagamentos e você terá 15% OFF! em cima do valor total!")
        }
        else{
            alert("Cupom indeferido, resposta incorreta! Você é mesmo programador(a)?");
        }
    }
    else{
        alert("Indeferido! Desconto permitido apenas para desenvolvedores(as)!")}
    }

    //* onMouseOver de imagens produtos */

function setNewImage()
{
    document.getElementById("imggeladeira").src="imagens/indisponivel.jpg"
}

function setOldImage()
{
document.getElementById("imggeladeira").src="imagens/geladeira.jpg"

}

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a087fac5da9e52091bd925924a1db9373a84df9f
function analisePedido() {

    let a1 

    a1 = +alert ("Solicitação de pedido enviada com sucesso, aguarde nosso contato!");
}
<<<<<<< HEAD
=======
=======
>>>>>>> 5c77ef68560d55accbe920db493053262cc20236
>>>>>>> a087fac5da9e52091bd925924a1db9373a84df9f

    

