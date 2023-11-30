<?php
    //funcion para ver si las dos contraseñas son correctas
    function comprobarContraseña($pass1,$pass2){
        if($pass1 === $pass2){
            return true;
        } else {
            //que devuelva un mensaje de error
            header('Location:../index.php?errorNew');
            exit;
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
            //para conectarse con la base de datos
            require_once('../functions/dbConnection.php');
            
            //recogemos los datos de usuario
            $nombre = htmlspecialchars($_POST['username']);
            
            $password = md5(htmlspecialchars($_POST['password']));
            
            $passwordRepeat = md5(htmlspecialchars($_POST['passwordRepeat']));
            
            //para ver si las dos contraseñas coinciden
            comprobarContraseña($password,$passwordRepeat);
            
            
            $direccion = htmlspecialchars($_POST['direccion']);
            
            $telefono = htmlspecialchars($_POST['telefono']);
            
            if($nombre =='' or $password == '' or $direccion=='' or $telefono==''){
                header('Location:../index.php?errorNew');
                exit;
            } else {
                $insertUser = $db->prepare("INSERT INTO USUARIO(Nomusuario,Contraseñausuario,Direccionusuario,Telefonousuario) VALUES(?,?,?,?)");//insert into a la tabla usuarios
                $insertUser->execute([$nombre,$password,$direccion,$telefono]);
                header('Location:../index.php?success');
            }
                  
    } else {
        header('Location:../index.php?errorNew');
        
    }