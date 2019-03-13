<?php
  $host='localhost';
  $dbname='registro';
  $user='root';
  $pass='';

  try {

    # Para que la conexion al mysql utilice las collation UTF-8 añadir charset=utf8 al string de la conexion.
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    # Para que genere excepciones a la hora de reportar errores.
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $sql=$pdo->prepare("INSERT INTO users(nombre,apellido,edad,direccion,correo,password) VALUES (:nombre,:apellido,:edad,:direccion,:correo,:password)");
    $sql->bindParam(':nombre',$_POST['nombre']);
    $sql->bindParam(':apellido',$_POST['apellido']);
    $sql->bindParam(':edad',$_POST['edad']);
    $sql->bindParam(':direccion',$_POST['direccion']);
    $sql->bindParam(':correo',$_POST['correo']);
    $sql->bindParam(':password',$_POST['password']);

    $sql->execute();

  }
  catch(PDOException $e) {
      echo $e->getMessage();
  }
?>