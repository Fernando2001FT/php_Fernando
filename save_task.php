<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $query = "INSERT INTO Tareas(titulo, descripcion) VALUES ('$titulo', '$descripcion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("La consulta falló");
  }

  $_SESSION['message'] = 'Tarea guardada exitosamente en el sistema';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
