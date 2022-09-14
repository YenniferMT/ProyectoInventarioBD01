<?php 
    if(isset($_POST['registrarPro'])){
        //Si no esta vacio cumple la siguiente condicion 
        if((!empty($_POST['nombreProd'])) && !empty($_POST['descripcionPro']) && !empty($_POST['fotoPro']) && !empty($_POST['precioPro']) && !empty($_POST['stockPro']) && !empty($_POST['pesoPro']) && !empty($_POST['idcategoria']) && !empty($_POST['idmarca']) && !empty($_POST['idproveedor']) && !empty($_POST['idusuario'])) {

            $nombre=$_POST['nombreProd'];
            $foto=$_POST['fotoPro'];
            $descripcion=$_POST['descripcionPro'];
            $precio=$_POST['precioPro'];
            $stock=$_POST['stockPro'];
            $peso=$_POST['pesoPro'];
            $idcategoria=$_POST['idcategoria'];
            $idmarca=$_POST['idmarca'];
            $idproveedor=$_POST['idproveedor'];
            $idusuario=$_POST['idusuario'];

            $sql=$conexion->query("INSERT INTO producto(nombres_producto,foto_producto,descripcion_producto,precio_producto,stock_producto,peso_producto,id_categoria,id_marca,id_proveedor,id_usuario) values('$nombre',' $foto','$descripcion','$precio','$stock','$peso','$idcategoria','$idmarca','$idproveedor','$idusuario')");

            if($sql==1){
                echo '<div class="alert alert-success">Producto registrado</div>';
            }else{
                echo "Producto no registrado";
            }
        }else{
            echo "Los campos estan vacios";
        }
    }
?>