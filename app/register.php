
<?php
include 'conexion.php';
// Procesar el registro si se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    // Preparar la consulta para evitar inyecciones SQL
    $stmt = $conn->prepare("SELECT password, role FROM usuarios WHERE username = ? AND email = ?");
    $stmt->bind_param("ss", $user, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_pass, $role);
        $stmt->fetch();

        // Verificar la contraseña
        if (password_verify($pass, $hashed_pass)) {
            // Iniciar sesión
            session_start();
            $_SESSION['username'] = $user; // Almacenar el nombre de usuario en la sesión
            $_SESSION['role'] = $role; // Almacenar el rol en la sesión

            // Redirigir según el rol del usuario
            if ($role === 'admin') {
                header("Location: admin_dashboard.php");
                exit();
            } else {
                header("Location: operator_dashboard.php");
                exit();
            }
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    // Cerrar la declaración
    $stmt->close();
}
