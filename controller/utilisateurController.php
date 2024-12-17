<?php
    require_once('./model/utilisateurModel.php');

    function index(){
       $utilisateurs = getAll();
       require_once './view/utilisateur/list.php';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=utilisateur');
    }

    function pageAdd(){
        require_once './view/utilisateur/add.php';
    }

    function save(){
        $nom =$_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        add($nom,$prenom,$email,$password);
        header('location:index.php?controller=utilisateur');
    }
   
    function getUtilisateur(){
        $id = $_GET['id'];
        $utilisateur = pg_fetch_assoc(getById($id)); 
        require_once './view/utilisateur/edit.php';
     }

     function update(){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        updateUtilisateur($id,$nom,$prenom,$email,$password);
        header('location:index.php?controller=utilisateur');
     }


?>