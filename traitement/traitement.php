<?php
    require '../vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    session_start();



    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $error = [];
        if(isset($_POST["nom"]) && !empty($_POST["nom"]) && $_POST["nom"] !== " "){
            $_SESSION["nom"] = $nom = strip_tags(trim($_POST["nom"]));
        }else{
            $error["nom"] = "Vous devez remplir ce champ.";
        }

        if(isset($_POST["prenom"]) && !empty($_POST["prenom"]) && $_POST["prenom"] !== " "){
            $_SESSION["prenom"] = $prenom = strip_tags(trim($_POST["prenom"]));
        }else{
            $error["prenom"] = "Vous devez remplir ce champ.";
        }

        if(isset($_POST["subject"]) && !empty($_POST["subject"]) && $_POST["subject"] !== " "){
            $_SESSION["subject"] = $subject = strip_tags(trim($_POST["subject"]));
        }else{
            $error["subject"] = "Vous devez remplir ce champ.";
        }  
        
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $_SESSION["email"] = $email = strip_tags(trim($_POST["email"]));
        }else{
            $error["email"] = "L'adresse mail que avez saisi est invalide.";
        }

        if(isset($_POST["message"]) && !empty($_POST["message"]) && $_POST["message"] !== " "){
            if(filter_input(INPUT_POST, "message" ,FILTER_SANITIZE_SPECIAL_CHARS)){
                $_SESSION["message"] = $message = strip_tags(trim($_POST["message"]));
            }else{
                $error["message"] = "Le message contient des caractères sensibles.";
            }
        }else{
            $error["message"] = "Vous devez remplir ce champ.";
        }
        
        if(empty($error)){

            //je cree une nouvelle instance de la classe PHPMailer
            
            $instance = new PHPMailer(true);
            try{
                $instance ->isSMTP();
                $instance ->Host = "smtp.gmail.com";
                $instance ->SMTPAuth = true;
                $instance ->Username = "wasfade423@gmail.com"; // mon email en l'occurence celui qui est connecté au serveur PHPMailer c'est ce email qui va valider l'envoie du message  
                $instance ->Password = "rpuyklolkcvlsukh";
                $instance ->SMTPSecure = "tls";
                $instance ->Port = "587";
                $instance ->setFrom($email, "Un visiteur du site Wab vitrine"); // l'email du visiteur
                $instance ->addAddress("wasfade423@gmail.com");//le proprétaire du site qui va recevoir le mail
                $instance ->Subject = $subject;
                $instance ->Body = "
                    Message: $message
                    Nom: $nom $prenom
                    Email: $email
                ";
                if($instance->send()){
                    $succes = "Message envoyé avec succes. Merci de m'avoir contacté, je vous répondrai dans les plus brefs délais!"; 
                    $_SESSION["succes"] = $succes;
                }
            }catch(Exception $e){
                $_SESSION['error']['send'] = $e->getMessage();
            }
        }else{
            $_SESSION["error"] = $error;
        }

        header("Location: ../index.php");

        
    }

?>