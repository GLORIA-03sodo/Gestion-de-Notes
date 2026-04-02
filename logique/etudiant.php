<?php
include("../config/db.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom= $_POST["nom"];
    $email= $_POST["email"];
    $prenom= $_POST["prenom"];
    $dnaiss= $_POST["dnaiss"];
    $mdp= $_POST["mdp"];
    $filiere= $_POST["filiere"];
    $niveau= $_POST["niveau"];
    $sexe= $_POST["sexe"];

    $dphash = password_hash($mdp, PASSWORD_DEFAULT);

    $insert= $conn->prepare("INSERT INTO etudiant(Nom, Prenom, Email, date_de_naissance, mdp, sexe, Code_fi, Code_niv) values (?, ?, ?, ?, ?, ?, ?, ?)");
    if($insert->execute([$nom, $prenom, $email, $dnaiss, $dphash, $sexe, $filiere, $niveau])){

}
}
?>