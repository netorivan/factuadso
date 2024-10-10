<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemadeventas";

// puedo hacer dos tipos de conexiones esta es con mysqli que es propia de php y solo sirve para mysql, sin embargo 
// tenemos tra que es con pdo, es una variable lo mismo que mysqli, solo que debemos declararla con $pdo
// y esta es para todo tipo de base de datos
// linea de codigo...conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
// la variable creada $conn, es para almacenar la conexion con la base de datos y hacer posible el manejo de 
// cualquier proceso mucho mas facil, ejemplo: si necesito crear una funcion que me muetsre alguna info de 
// base de datos, sin la variable $conn, tendria que escribir mysqli($servername, $username, $password, $dbname);
// toda esta info, en cambio, con la variable, solo seria esa sola palabra $conn


// Verificar conexión ((no lo entiendo muy bien, se como funciona el condicional, pero no del porque de conncect error))
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else
    echo 'conexion exitosa';
