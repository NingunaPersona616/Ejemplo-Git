<?php 
    $host="localhost";
    $user="root";
    $pwd="";
    $db_name="ejemplo";

    $db_conn = mysqli_connect($host, $user, $pwd, $db_name);

    // Check connection
    if (!$db_conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected Successfully.";

    $nombre_tarea=$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    $prioridad=$_POST["prioridad"];
    $urgente=$_POST["urgente"];
    $tipo=$_POST["tipo"];

    $sql="INSERT INTO tareas VALUE('$nombre_tarea', '$descripcion', '$prioridad', '$urgente', '$tipo')";

    if (mysqli_query($db_conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db_conn);
      }
?>