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





            function Enviarr() {


                var n_nombre = document.getElementById("Nombre").value;
                var n_password = document.getElementById("Password").value;
                var n_username = document.getElementById("Username").value;
                if (n_nombre == "" || n_password == "" || n_username == "") {



                    $("#1").text("Porfavor llene este campo").fadeIn(500).hide(1500);
                    $("#2").text("Porfavor llene este campo").fadeIn(500).hide(1500);
                    $("#3").text("Porfavor llene este campo").fadeIn(500).hide(1500);

                } else {



                }
            }


        </script>


    </head>
    <body>


        <form>

            <input  type="text" id="Nombre" placeholder="Nombre" name="Nombre"/> <label  style="color: red" id="1"></label><br>
            <input type="text" id="Username" placeholder="Username" name="Username" /><label  style="color: red" id="2" ></label><br>
            <input type="text" id="Password" placeholder="Password" name="Password"/><label  style="color: red" id="3" ></label><br>
            <input type="button" value="Enviar" id="Enviar" onClick="Enviarr()"/>


        </form>
        <br>
        <div id="ban">
            HOLA !!

            <p  id="cerrar">cerrar</p>
        </div>
        <script>
            var c = document.getElementById("#cerrar");
            c.addEventListener("click",cerrar_div,false);
           
		   
		    function cerrar_div(){
               $("#ban").remove();

            }


        </script>


       <?php

        function envi() {

            $_GET['Nombre'];
            echo $_GET['Nombre'];
            header('Location : ./receptor.php');
        }
        ?>



 
    </body>
</html>
