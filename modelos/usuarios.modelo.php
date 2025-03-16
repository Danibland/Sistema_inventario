<?php

require_once "conexion.php";

class ModeloUsuarios{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt -> null;



	}

	/*=============================================
		REGISTRAR USUARIOS
		=============================================*/


	static public function mdlIngresarUsuarios($tabla, $datos) {
    // Validar el nombre de la tabla (evita inyecciones SQL)
    $tablasPermitidas = ["usuarios", "admins"]; // Lista de tablas permitidas
    if (!in_array($tabla, $tablasPermitidas)) {
        return "error";
    }

    // Encriptar la contraseña antes de insertarla
    $passwordHash = password_hash($datos["password"], PASSWORD_DEFAULT);

    try {
        $stmt = Conexion::conectar()->prepare("
            INSERT INTO $tabla (nombre, usuario, password, perfil) 
            VALUES (:nombre, :usuario, :password, :perfil)
        ");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $passwordHash, PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    } catch (PDOException $e) {
        return "error: " . $e->getMessage(); // Para depuración (no en producción)
    } finally {
        $stmt = null; // Cerrar la conexión
    }
}

}