<?php 
    if(isset($_POST['registrarUsu'])){
        //Si no esta vacio cumple la siguiente condicion 
        if((!empty($_POST['loginUsu'])) && !empty($_POST['nombreUsu']) && !empty($_POST['apellidoUsu']) && !empty($_POST['fotoUsu']) && !empty($_POST['contrasena1Usu']) && !empty($_POST['Contrasena2Usu']) && !empty($_POST['idRol'])){
            $login=$_POST['loginUsu'];
            $nombre=$_POST['nombreUsu'];
            $apellido=$_POST['apellidoUsu'];
            $foto=$_POST['fotoUsu'];
            $foto=addslashes(file_get_contents($_FILES['fotoUsu']['tmp_name']));
            $contrasena=$_POST['contrasena1Usu'];
            $contrasena2=$_POST['Contrasena2Usu'];
            $idrol=$_POST['idRol'];
            echo $idrol;
            if($contrasena=$contrasena2){
                $sql=$conexion->query("INSERT INTO producto(loginId_usuario,nombres_usuario,apellidos_usuario,foto_usuario,constrasena_usuario,id_rol) values('$login','$nombre','$apellido','$foto','$contrasena','$idrol')");

                if($sql==1){
                    echo '<div class="div_alerta">Usuario registrado</div>';
                }else{
                    echo "Usuario no registrado";
                }
            }else{
                echo "Las contraseñas no coinsiden";
            }
        }else{
            echo "Los campos estan vacios";
        }
    }
?>