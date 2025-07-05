// EXECUTAR MASCARAS

function mascara(o,f){
    //define o objeto e chama a função
    objeto = o
    funcao = f
    setTimeout("executaMascara()",1)
}

function executaMascara(){
    objeto.value=funcao(objeto.value)
}


//Remover Letras
function RemoverLetras(variavel){
    variavel=variavel.replace(/\D/g,"") //remove caracteres não numericos
    return variavel
}


function Valor(variavel) {
    // Remove caracteres que não sejam números ou ponto
    variavel = variavel.replace(/[^0-9.]/g, "");

    // Permite apenas o primeiro ponto
    partes = variavel.split(".");
    if (partes.length > 2) {
        variavel = partes[0] + "." + partes.slice(1).join(""); // junta o resto sem mais pontos
    }

    return variavel;
}

