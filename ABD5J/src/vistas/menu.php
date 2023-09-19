<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Sweet Alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" /></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <title>Farmacia UNACH</title>
</head>
<body>
    <?php
        require("../modelo/conexionPDO.php");
        try{
            //verifico los datos del login
            $correo=htmlentities(addslashes($_POST['correo']));
            $clave = $_POST['clave'];
            //echo "Tu correo es: " . ' '. $correo . ' ' . ' ' . 'Tu password es: '. $clave;
            $sql = "SELECT * FROM t_usuario WHERE correo = :correo";
            //preparo la consulta SQL
            $resultado=$conn->prepare($sql);
            //ejecucion de la consulta
            $resultado->execute(array(":correo"=>$correo));
            
            $login=$resultado->fetch(PDO::FETCH_ASSOC);
            if(password_verify($clave, $login['clave'])) { 
                echo '<script>
                    Swal.fire({
                    icon: "success",
                    title:"Usuario aceptado",
                    text: "Registro correcto",
                    showConfirmButton: true,
                    confirmButtonText: "Aceptar"
                }) </script>'; 
            }else{
                //Cierra cadena de conexión
                $query = null;
                $conn = null;
                echo "Error de conexión";
                header("Location: ../../index.php?error=si"); 
            }
    
         }catch(Exception $e){
            die($e->getMessage());
        }
    ?>
    <div class="container">
        <header>
            <div class="row">
                <div class="col"></div>
                <div class="col-text-center"></div>
            </div>
        </header>
    </div>
    <center><h1>Farmacia Unach</h1></center>
    <?php
        echo "Bienvenido/a: " .$login['nombreUsuario'] . ' ' . $login['aPaterno'] . ' ' . $login['aMaterno'];
    ?>
    <h1><center></center></h1>
    <br>
    <center><img src="https://cdn-icons-png.flaticon.com/512/3140/3140341.png" width="20%px"></center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>