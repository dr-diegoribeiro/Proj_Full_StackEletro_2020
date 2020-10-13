function exibir_categoria(categoria){
    //alert(categoria);

    let elementos = document.getElementsByClassName('produto');
    console.log(elementos);
    for(let i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id)
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