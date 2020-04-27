<?php
include_once 'Database/user.php';
include_once 'Database/Sesion.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    
    if($user->getRol()==1){
        header('Location: Internas/Estudiante/Estudiante.php');
    }else if($user->getRol()==2){
        header('Location: Internas/Docente/Docente.php');
    }else if($user->getRol()==3){
       header('Location: Internas/Admin/Admin.php');
    }

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        if($user->getRol()==1){
            header('Location: Internas/Estudiante/Estudiante.php');
        }else if($user->getRol()==2){
            header('Location: Internas/Docente/Docente.php');
        }else if($user->getRol()==3){
            header('Location: Internas/Admin/Admin.php');
        }

    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'Database/login.php';
       
    }
}else{
    //echo "login";
    include_once 'Database/login.php';
   
}



?>
