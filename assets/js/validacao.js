// serve para a funcao gravar()
let validacao = false;

// validacao individual de cada input do formulario que recebe como parametro (argumento) o elemento em si.
function validar(elemento) {
    // caso a validacao seja falsa, colore o input de vermelho
    let vermelho = () => { 
        elemento.style.borderColor = "red";
        validacao = false;
    };
    // caso a validacao seja verdadeira, colore o input de verde
    let verde = () => {
        elemento.style.borderColor = "green";
        validacao = true;
    }
     // verifica se o elemento passado via argumento é do tipo text (ex: <input type='text'>)
     if(elemento.type == "text"){
         if(elemento.value.length <= 3)
             vermelho();
         else 
             verde();
     }
     // verifica se o elemento passado via argumento é do tipo text (ex: <input type='date'>)
    if(elemento.type == "date"){
        let data = new Date(elemento.value);
        if(data < new Date("01/01/1997") || data > new Date())
            vermelho();
        else
            verde();
    }
    if(elemento.type == "number"){
        if(elemento.value <= 0)
            vermelho();
        else 
            verde();
    }
    if(elemento.id == "nm_cpf") {
        if(/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/.test(elemento.value)) {
            verde();
        }
        else vermelho();

        if(elemento.value.length == 3) 
            elemento.value += ".";
        if(elemento.value.length == 7)
            elemento.value += ".";
        if(elemento.value.length == 11)
            elemento.value += "-";
    }
    if(elemento.id == "nm_rg"){
        if(/^(\d{1,2})(\d{3})(\d{3})([\dX])$/.test(elemento.value)){
            verde();
        }
        else {
            vermelho();
        }
    }
    
}
function gravar(){
    if(validacao)
        return true;
    return false;
}
// Função para a para a coleta de Leite

function zerofill(i) {
    return (i < 10 ? '0' : '') + i;
}

function getDateString() {
    const date = new Date();
    const year = date.getFullYear();
    const month = zerofill(date.getMonth()+1);
    const day = zerofill(date.getDate());
    return year + '-' + month + '-' + day;
}