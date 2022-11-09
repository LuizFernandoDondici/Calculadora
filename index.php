<?php?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/style.css">

    <title>Calculadora</title>

</head>
<body>

    <h1 class="title"> Calculadora </h1>

    <div class="calculator">
        <div>
            <input class="imput" id="result" type="text" onkeypress="resultEnter()">
        </div>
        <div>
            <button class="button" onclick="deleteAll()"> C </button>
            <button class="button" onclick="deleteOne()"> < </button>
            <button class="button" onclick="insert('/')"> / </button>
            <button class="button" onclick="insert('*')"> x </button>
        </div>
        <div>
            <button class="button" onclick="insert('7')"> 7 </button>
            <button class="button" onclick="insert('8')"> 8 </button>
            <button class="button" onclick="insert('9')"> 9 </button>
            <button class="button" onclick="insert('-')"> - </button>
        </div>
        <div>
            <button class="button" onclick="insert('4')"> 4 </button>
            <button class="button" onclick="insert('5')"> 5 </button>
            <button class="button" onclick="insert('6')"> 6 </button>
            <button class="button" onclick="insert('+')"> + </button>
        </div>
        <div>
            <button class="button" onclick="insert('1')"> 1 </button>
            <button class="button" onclick="insert('2')"> 2 </button>
            <button class="button" onclick="insert('3')"> 3 </button>
            <button class="button" onclick="insert('.')"> . </button>
        </div>
        <div>
            <button class="button button-big" onclick="insert('0')"> 0 </button>
            <button class="button button-big" onclick="result('=')"> = </button>
        </div>
    </div>

    <script>

        let imput= document.querySelector('#result');

        // Mascara que limita entrada de caracteres.
        imput.addEventListener('input', (e)=>{
            imput.value = e.target.value
                .replace(/([^0-9.+-/*])+/g, '')  
        })

        function insert(n){
            // Adiciona um caractere.
            imput.value = imput.value + n;
        }

        function deleteOne(){
            // Deleta um caractere.
            imput.value = imput.value.substring(0, imput.value.length -1);
        }

        function deleteAll(){
            // Deleta tudo.
            imput.value = '';
        }

        function result(){
            if(imput.value != ''){
                // Gera o resultado do calculo.
                imput.value = eval(imput.value);
            }
        }

        function resultEnter(){
            // Evento para tecla 'Enter' gerar o resultado.
            document.addEventListener('keypress', function(e){
                if(e.key === 'Enter'){
                    result();
                }
            }); 
        }

    </script>

</body>
</html>
