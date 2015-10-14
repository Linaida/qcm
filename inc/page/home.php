<!--
Interface de l'utilisateur connecté
-->
<?
require 'function/query.php';
if(isset($_SESSION['etudiant']))
$currentUser = $_SESSION['etudiant'];

if(isset($_SESSION['professeur']))
    $currentUser = $_SESSION['professeur'];
?>

