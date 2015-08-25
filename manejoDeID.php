<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <button type="submit" id="miBoton">Enviar</button>
        <input type="text" id="texto" />
        <input type="text" id="texto2" />
        <script>
        
        var miBoton  = document.getElementById("miBoton");
        var mitexto = document.getElementById("texto");
        var mitexto2 = document.getElementById("texto2");
        mitexto.style.backgroundColor ="#FF2508";
        miBoton.textContent="cancel";
        mitexto2.value="Ingrese aqui..";
        mitexto2.focus();
        
        </script>
        
        
    </body>
</html>
