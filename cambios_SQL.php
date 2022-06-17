
<?php
    require_once "conexion.php";
    

    if (array_key_exists("id",$_POST)){
        if(isset($_POST["boton_buscar"])){

            if ($_POST["id"]==''){
                echo '<script>alert("ingrese un id");</script>';
            }else{
                $id=$_POST["id"];
                $var=false;
                $sentencia="SELECT * FROM receta where id='$id'";
                $ejecutar = mysqli_query($conn,$sentencia);
    
                if (mysqli_num_rows($ejecutar)==0){
                    echo '<script>alert("No se encontró el id proporcionado");</script>';
                }else{
                    if($ejecutar){
                        $reg = mysqli_fetch_array($ejecutar);
                        $id=$reg['id'];
                        $nombre=$reg['Nombre_Receta'];
                        $descripcion = $reg['Descripcion_Breve'];
                        $ingredientes=$reg['Ingredientes'];
                        $proceso=$reg['Proceso'];
                        $foto=$reg['Foto_Platillo'];
                        $fechaC=$reg['Fecha_Creacion'];
                        $fechaUE=$reg['Fecha_UltimaEdicion'];
                        $Usuario_FK=$reg['Usuario_idUsuario'];
                    }
                }
            }
    
        }
    
        if(isset($_POST["boton_enviar"])){
            
            if ($_POST["id"]=='' or $_POST["nombre"]=='' or $_POST["descripcion"]=='' or $_POST["ingredientes"]=='' or $_POST["proceso"]==''){
                echo '<script>alert("los campos deben estar llenos");</script>';
            }else{
                $id=$_POST["id"];
                $var=true;
                if($_FILES['receta']['name']!=null){
                    //proceso de subida de imagen
                    
                    $imagentam=$_FILES['receta']['size'];
                    $imagensubida=fopen($_FILES['receta']['tmp_name'],'r');
                    $binarios=fread($imagensubida,$imagentam);
                    $binarios=mysqli_escape_string($conn,$binarios);
                    /*$ruta = $_FILES['receta']['tmp_name'];
                    $contBin = addslashes(file_get_contents($ruta));
                    $imagenBase64 = base64_encode($contBin);*/

                    $query="UPDATE receta SET Foto_Platillo='$binarios' WHERE id='$id'";
                    //$query="UPDATE receta SET Foto_Platillo='$imagenBase64' WHERE id='$id'";
                    
                    $result = mysqli_query($conn,$query);
             
                }
                date_default_timezone_set('America/Mexico_City');
                $dataTime = date("d-m-Y h:i:s a",time());

                
                $nombre=$_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $ingredientes=$_POST['ingredientes'];
                $proceso=$_POST['proceso'];

                $sentencia="UPDATE receta SET Nombre_Receta='$nombre',Descripcion_Breve='$descripcion',
                Ingredientes='$ingredientes',Proceso='$proceso', Fecha_UltimaEdicion='$dataTime' WHERE id='$id'";
                $ejecutar = mysqli_query($conn,$sentencia);
                
                if($ejecutar){
                    
                    echo '<script>alert("cambios realizados!!!");</script>';
                }
                
                if($var==true){
                
                    //header('Location: index.php');
                    mysqli_close($conn);
                    echo '<script>
                        setTimeout(function () {
                        window.location.href= "index.php";
                    },1);</script>';
                    die();
                }    

                
            }
            
            
        }
        
    }


    

?>