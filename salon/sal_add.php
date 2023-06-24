<?php
function conectar_sal_add(){
    $host="localhost";
    $user="root";
    $pass="";

    $db="db_sistema";
    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$db);
    return $con;
}
$con = conectar_sal_add();

$us_id = $_GET['us_id'];

$sql = "SELECT * FROM tb_usuario WHERE us_id='$us_id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

$sql_tb = "select * from tb_salon";
$query_tb = mysqli_query($con, $sql_tb);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escuela</title>
</head>

<body>
    <?php
        $url = "../extensiones/head.php";
        include_once ($url);
    ?>
    <h1 class="title-modules">BIENVENIDO AL PANEL DE CONTROL</h1>
    <div id="main-container">
        <div class="conteiner-add">
            <h1>Ingresar datos</h1>
            <form action="insert.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['us_id'] ?>">

                <div class="container">
                    <div class="box">
                        <input type="text" name="grado" placeholder="grado" pattern="[0-9]+" title="Ingrese un grado válido" required>
                        <input type="text" name="seccion" placeholder="seccion" pattern="[A-Za-z\s]+" title="Ingrese una sección válida" required>
                        <input type="text" name="capacidad" placeholder="capacidad" pattern="[0-9]+" title="Ingrese una capacidad válida" required>
                        <input type="text" name="docente" placeholder="docente" pattern="[A-Za-z\s]+" title="Ingrese un nombre de docente válido" required>
                        <input type="text" name="horario" placeholder="horario" pattern="[A-Za-z\s]+" title="Ingrese un horario válido" required>
                        <input type="text" name="curso" placeholder="Curso" pattern="[A-Za-z\s]+" title="Ingrese un nombre de curso válido" required>
                    </div>       
                </div> 

                <input type="submit" value="Registrar">
            </form>
        </div>
        <div class="conteiner-btn">
            
        </div>
    </div>
    
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>

</body>

</html>


alarm ? (((int) getEvacuationTime())/60 + ":" + (((int) getEvacuationTime())%60 < 10 ? "0" : "") + ((int) (alarmEnding == 0 ? (time() - alarmBeginning)/second() : (alarmEnding - alarmBeginning)/second()))%60) : "00:00"
