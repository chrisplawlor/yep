<?PHP

session_start();
session_destroy();

header('Location: ../Welcome/welcome.php');

?>