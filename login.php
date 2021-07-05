<!DOCTYPE html>
<html>

<head>

	<link rel="stylesheet" type="text/css" href="estilos/login.css">

	<title>Iniciar Sesión</title>

</head>

<body>

<header>
    <p><a href = "index.php">Volver al inicio</a></p>
</header>

<nav></nav>

<section>
    <div class = "login">
        <h1>Inicio de sesión</h1>

        <form action="" method = "POST">
            <input class = "texto" type = "text" placeholder = "Usuario" name = "us">
            <input class = "texto" type = "password" placeholder = "Contraseña" name = "con">
            <input class = "boton" type="submit" name="enviar" value = "Iniciar Sesión">
        </form>

        <?php 

            session_start();

            include("conexion.php");

            if(isset($_POST['enviar'])){

                if(isset($_POST['us']) && !empty($_POST['us']) && isset($_POST['con']) && !empty($_POST['con'])){
                    $contr = $_POST['con'];
                    $sqldos = "SELECT usuarioAd,contrasenaAd FROM administrador WHERE usuarioAd='$_POST[us]'";
                    $recdos = mysqli_query($conectar,$sqldos);

                    $sesion = mysqli_fetch_array($recdos);

                    if($contr == $sesion['contrasenaAd']){
                        $_SESSION['username'] = $_POST['us'];
                        header("location: panel.php");
                    }else{
                        echo "<br/>";
                        echo "Nombre de usuario o contraseña incorrecta";
                    }
                }else{
                    echo "<br/>";
                    echo "Debes llenar ambos campos";
                }
            }

        ?>

    </div>
</section>
</body>
</html>
