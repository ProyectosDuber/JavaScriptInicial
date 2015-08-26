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
       
        <script src="js/jquery-2.1.4.min.js"></script>
        <script>
        
    
    
        
        function Enviarr(){
            
           
            var n_nombre = document.getElementById("Nombre").value;
            
           if(n_nombre ==""){
               $("#m").text("Porfavor llene este campo");
           }else{
               
               document.write("<?php echo envi() ; ?>");
               
           }
        }

        
        </script>
        
       
    </head>
    <body>
         
    <?php
    
    function envi(){
              
               $_GET['Nombre'] = ' <script>document.getElementById("Nombre").value;</script>  ';
               echo $_GET['Nombre'];
               header('Location : ./receptor.php');
    }
    
               
          
    ?>
        
        <form>
            
            <input type="text" id="Nombre" placeholder="Nombre" name="Nombre"/> <label style="color: red" id="m"></label><br>
            <input type="text" id="Username" placeholder="Username" name="Username" /><label></label><br>
            <input type="text" id="Password" placeholder="Password" name="Password"/><label></label><br>
            <input type="button" value="Enviar" id="Enviar" onClick="Enviarr()"/>
            
            
        </form>
    </body>
</html>
