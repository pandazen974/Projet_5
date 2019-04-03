<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class UserController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
    public function openLoginForm(){
        $this->smarty->display('view/loginForm.tpl');
    }
    
    public function openCheckInForm(){
        $this->smarty->display('view/checkInForm.tpl');    
    }
    
    public function createPassword(){
    // Ma clé privée
     $secret = "6LcPSJoUAAAAAO73OKkm2JPQPWHD2STIHY9zoI4H";
    // Paramètre renvoyé par le recaptcha
    $response = $_POST['g-recaptcha-response'];
    // On récupère l'IP de l'utilisateur
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
    . $secret
    . "&response=" . $response
    . "&remoteip=" . $remoteip ;
    $decode = json_decode(file_get_contents($api_url), true);

    if ($decode['success'] == true) {
        $userManager=new UserManager();
        if(!empty($_POST['password'])AND !empty($_POST['password2']))   {
            if(($_POST['password'])===($_POST['password2'])){
                $code = $_POST['password2'];
                if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#', $code)) {
                $user=new User(['password'=>$_POST['password2'],'email'=>$_POST['email']]);
                $userManager->updatePassword($user);
                $email=$user->email();
                $checked="Votre compte a bien été enregistré, un mail vous sera envoyé pour vous confirmer sa création";
    // Instantiation and passing `true` enables exceptions
                $mail = new PHPMailer(true);

        try {
    //Server settings
        $mail->charSet = "UTF-8";
        $mail->SMTPDebug = 4;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.sfr.fr';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'audreythomas72@sfr.fr';                     // SMTP username
        $mail->Password   = 'kevtsun01SFR';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
        $mail->setFrom('audreythomas72@sfr.fr', 'DTS IMRT');
        $mail->addAddress($_POST['email']);     // Add a recipient              // Name is optional
        $mail->addReplyTo('noreply@sfr.fr', 'Noreply');
    // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Création de compte';
        $mail->Body    = 'Votre compte est en cours de création. Un <b>email de confirmation</b> vous sera envoyé pour pouvoir vous connecter ';
        $mail->AltBody = 'Votre compte est en cours de création. Un email de confirmation vous sera envoyé pour pouvoir vous connecter';
        
        $mail->send();
        $this->smarty->display('view/home.tpl');
    
    
        } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé: {$mail->ErrorInfo}";
        $error="Un problème est survenu lors de l'envoi de l'email";
        $this->smarty->assign('error', $error);
        $this->smarty->display('view/checkInForm.tpl');
        }
                }else{
                    $error='Le mot de passe doit être composé de chiffres, minuscules, majuscules et de caractères spéciaux';
                    $this->smarty->assign('error', $error);
                    $this->smarty->display('view/checkInForm.tpl');
                }
            }else{
                $error='Les mots de passe ne sont pas identiques';
                $this->smarty->assign('error', $error);
                $this->smarty->display('view/checkInForm.tpl');
            }

        }else {
            $error='Vous devez remplir tous les champs!';
            $this->smarty->assign('error', $error);
            $this->smarty->display('view/checkInForm.tpl');
        }
        
    }else{
        $error="Vous devez cochez la case!";
        $this->smarty->assign('error', $error);
        $this->smarty->display('view/checkInForm.tpl');
    }
    
    }
    
    public function openSession(){
    $userManager=new UserManager();
    if(!empty($_POST['email']) AND !empty($_POST['password'])){
       
        $user=$userManager->verifyUserExistence($_POST['email']);
         var_dump($user);
        $hash=$userManager->getHashedPassword($user);
          if(password_verify($_POST["password"],$hash)){
    $admin=$userManager->verifyAdmin($_POST['email']);
    $teacher=$userManager->verifyTeacher($_POST['email']);
    $student=$userManager->verifyStudent($_POST['email']);
    
        if($admin){
            $_SESSION['user'] = 'Admin';
        }elseif($teacher){
            $_SESSION['user']='Teacher';
        }elseif($student){
            $_SESSION['user']='Student';
        }
             
        $this->smarty->display("view/home.tpl");
       }else{
              $erreur='Le mot de passe est incorrect!';   
          }
    }else{
        $erreur='Tous les champs doivent être complétés!';
    }
     if(isset($erreur)){
         var_dump($erreur);
        $this->smarty->assign('erreur', $erreur);
        $this->smarty->display("view/loginForm.tpl");
    }
    
    }
    
    
    public function registerUser(){
    $userManager=new UserManager();
    if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['address']) AND !empty($_POST['city']) AND !empty($_POST['postalCode']) AND !empty($_POST['telNumber']) AND !empty($_POST['birth']) AND !empty($_POST['email'])   AND !empty($_POST['registrationDate'])){
                $user=new User(['lastName'=>$_POST['lastName'],'firstName'=>$_POST['firstName'],'middleName'=>$_POST['middleName'],'address'=>$_POST['address'],'city'=>$_POST['city'],'postalCode'=>$_POST['postalCode'],'telNumber'=>$_POST['telNumber'],'birth'=>$_POST['birth'],'email'=>$_POST['email'],'registrationDate'=>$_POST['registrationDate']]);
                $newUser=$userManager->createUser($user);
                $this->smarty->assign('newUser', $newUser);
                $this->smarty->display('view/profileForm.tpl');
                
    }else{
            $this->smarty->display('view/userForm.tpl');
    }
    
    }
    
    public function listAllUsers(){
        $userManager=new UserManager();
        $users=$userManager->readAllUsers();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/usersList.tpl');
    }
    
    public function listAllTeachers(){
        $userManager=new UserManager();
        $users=$userManager->readTeachersOnly();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/usersList.tpl');
    }
    
    
    public function openUserUpdateForm(){
        $userManager=new UserManager();
        $user=$userManager->readSelectedUser($_GET['id']);
        var_dump($user);
        $this->smarty->assign('user',$user);
        $this->smarty->display('view/userUpdateForm.tpl');
   
    }
    
    public function modifyUser(){
        $userManager=new UserManager();
        if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['address']) AND !empty($_POST['city']) AND !empty($_POST['postalCode']) AND !empty($_POST['telNumber']) AND !empty($_POST['birth']) AND !empty($_POST['email'])   AND !empty($_POST['registrationDate'])){
                $user=new User(['lastName'=>$_POST['lastName'],'firstName'=>$_POST['firstName'],'middleName'=>$_POST['middleName'],'address'=>$_POST['address'],'city'=>$_POST['city'],'postalCode'=>$_POST['postalCode'],'telNumber'=>$_POST['telNumber'],'birth'=>$_POST['birth'],'email'=>$_POST['email'],'registrationDate'=>$_POST['registrationDate'],'id'=>$_GET['id']]);
                $newUser=$userManager->updateUser($user);
                var_dump($user);
        }
              $users=$userManager->readAllUsers();
              $this->smarty->assign('users', $users);
              $this->smarty->display('view/usersList.tpl');
    }
    
    public function eraseUser(){
        $usersProfileManager=new UsersProfileManager();
        $userProfile=$usersProfileManager->readSelectedUserProfile($_GET['id']);
        $usersProfileManager->deleteUserProfile($userProfile);
        $studentsGroupManager=new StudentsGroupManager();
        $studentGroup=$studentsGroupManager->readSelectedStudentGroup($_GET['id']);
        $studentsGroupManager->deleteStudentGroup($studentGroup);
        $userManager=new UserManager();
        $selectedUser=$userManager->readSelectedUser($_GET['id']);
        $userManager->deleteUser($selectedUser);
        $users=$userManager->readAllUsers();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/usersList.tpl');
    }
    
    
    
    
    
}
