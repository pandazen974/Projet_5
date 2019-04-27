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
        //google recaptcha
        $secret = "6LcPSJoUAAAAAO73OKkm2JPQPWHD2STIHY9zoI4H";
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
        . $secret
        . "&response=" . $response
        . "&remoteip=" . $remoteip ;
        $decode = json_decode(file_get_contents($api_url), true);
        //verif mdp
        if ($decode['success'] == true) {
            $userManager=new UserManager();
            $user=$userManager->verifyUserExistence($_POST['email']);
            if(is_null($user->password())){
                if(!empty($_POST['password'])AND !empty($_POST['password2']))   {
                    if(($_POST['password'])===($_POST['password2'])){
                    $code = $_POST['password2'];
                        if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#', $code)) {
                        $user=new User(['password'=>$_POST['password2'],'authorized'=>'0','email'=>$_POST['email']]);
                        $userManager->updatePassword($user);
                        $email=$user->email();
                        $checked="Votre compte a bien été enregistré, un mail vous sera envoyé pour vous confirmer sa création";
                        //tests réussi envoi mail
                        $mail = new PHPMailer(true);
                        try {
                            $mail->charSet = "UTF-8";
                                                                 
                            $mail->isSMTP();                                            
                            $mail->Host       = 'smtp.sfr.fr';  
                            $mail->SMTPAuth   = true;                                   
                            $mail->Username   = 'audreythomas72@sfr.fr';                     
                            $mail->Password   = 'kevtsun01SFR';                              
                            $mail->SMTPSecure = 'tls';                                  
                            $mail->Port       = 587;
                            //Parametres
                            $mail->setFrom('audreythomas72@sfr.fr', 'DTS IMRT');
                            $mail->addAddress($_POST['email']);     
                            $mail->addReplyTo('noreply@sfr.fr', 'Noreply');
                            // Contenu
                            $mail->isHTML(true);                                 
                            $mail->Subject = 'Création de compte';
                            $mail->Body    = 'Votre compte est en cours de création. Un <b>email de confirmation</b> vous sera envoyé pour pouvoir vous connecter ';
                            $mail->AltBody = 'Votre compte est en cours de création. Un email de confirmation vous sera envoyé pour pouvoir vous connecter';
                            $mail->send();
                            $this->smarty->display('view/loginForm.tpl');
    
    
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
        
        }else {
            $error='Ce compte existe déjà!';
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
    if(!empty($_POST['email']) AND !empty($_POST['password'])){//on vérifie si les champs sont complétés
       $user=$userManager->verifyUserExistence($_POST['email']);
       if (!is_null($user)){//on vérifie si l'utilisateur existe
       $hash=$userManager->getHashedPassword($user);
            if(!is_null($user->password())){
                if($user->authorized()== '1'){//on vérifie que le compte est bien autorisé sinon valeur=0
                    if(password_verify($_POST["password"],$hash)){// on vérifie que le mot de passe est le bon
            
                $usersProfileManager=new UsersProfileManager();
                $profileRightsManager=new ProfileRightsManager();
                $profileManager=new ProfileManager();
                $profileId=$usersProfileManager->returnUserProfile($_POST['email']);
                foreach($profileId as $value)
                {
                    foreach($value as $profile){
                        $profile;
                        var_dump($profile);
                    }
                    
                }
                $rights=$profileRightsManager->selectProfileRights($profile);
                $profileName=$profileManager->getSelectedProfile($profile);
                foreach($rights as $value){
                    foreach($value as $right){
                        $board[]=($right++.' ');
                    }
                }
                $_SESSION['user'] =$board; 
                $_SESSION['profile'] =$profileName->profileName();
                if($_SESSION['profile']==='Etudiant'){
                    $studentsGroupManager=new StudentsGroupManager();
                    $groupId=$studentsGroupManager->returnUserGroup($_POST['email']);
                    foreach($groupId as $value)
                {
                    foreach($value as $group){
                        $group;
                        var_dump($group);
                    }
                    
                }
                $_SESSION['group'] =$group;
                }
           
            $this->smarty->assign('board', $board);
            header("Location: http://localhost/Projet_5/index.php?");
           
            }else{
                $erreur='Le mot de passe est incorrect!'; 
                
            }
        }else{
                $erreur='Votre compte n\'a pas été vérifié par l\'adminitrateur du site';
        }}else{
                $erreur='Vous devez vous enregistrer avant de vous connecter';
        }}else{
           $erreur="Vous n'êtes pas inscrit au DTS IMRT";
       }
    }else{
        $erreur='Tous les champs doivent être complétés!';
    }
    
    if(isset($erreur)){
        $this->smarty->assign('erreur', $erreur);
        $this->smarty->display("view/loginForm.tpl");
    }
    
    }
    
    public function manageAccount(){
        $userManager=new UserManager();
        $users=$userManager->readAccount();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/account.tpl');    
    }
    
    public function confirmAccount(){
        $userManager=new UserManager();
        $user=new User(['authorized'=>'1','id'=>$_GET['id']]);
        $userManager->authorizeAccount($user);
        $selectedUser=$userManager->readSelectedUser($_GET['id']);
        $userMail=$selectedUser->email();
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
        $mail->charSet = "UTF-8";
        $mail->SMTPDebug = 4;                                       
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.sfr.fr';  
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'audreythomas72@sfr.fr';                   
        $mail->Password   = 'kevtsun01SFR';                               
        $mail->SMTPSecure = 'tls';                                  
        $mail->Port       = 587;                                    
        //paramètres
        $mail->setFrom('audreythomas72@sfr.fr', 'DTS IMRT');
        $mail->addAddress($userMail);     // Add a recipient              // Name is optional
        $mail->addReplyTo('noreply@sfr.fr', 'Noreply');
        // Contenu
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Confirmation';
        $mail->Body    = 'Votre compte a bien été créé. Vous pouvez dès à présent vous connecter sur le site de la formation. ';
        $mail->AltBody = 'Votre compte a bien été créé. Vous pouvez dès à présent vous connecter sur le site de la formation.';
        $mail->send();
       
        } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé: {$mail->ErrorInfo}";
        }
        $users=$userManager->readAccount();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/account.tpl');    
    }
    
    public function rejectAccount(){
        $userManager=new UserManager();
        $selectedUser=$userManager->readSelectedUser($_GET['id']);
        $userMail=$selectedUser->email();
        $mail = new PHPMailer(true);

        try {
        $mail->charSet = "UTF-8";
        $mail->SMTPDebug = 4;                                       
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.sfr.fr';  
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'audreythomas72@sfr.fr';                   
        $mail->Password   = 'kevtsun01SFR';                              
        $mail->SMTPSecure = 'tls';                              
        $mail->Port       = 587;                                  
    //Paramètres
        $mail->setFrom('audreythomas72@sfr.fr', 'DTS IMRT');
        $mail->addAddress($userMail);     
        $mail->addReplyTo('noreply@sfr.fr', 'Noreply');
    // Contenu
        $mail->isHTML(true);                                 
        $mail->Subject = 'Rejet';
        $mail->Body    = 'L\'administrateur n\'a pas validé votre compte. Veuillez contactez l\'administration pour plus d\'informations';
        $mail->AltBody = 'L\'administrateur n\'a pas validé votre compte. Veuillez contactez l\'administration pour plus d\'informations';
        $mail->send();
        } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé: {$mail->ErrorInfo}";
        } 
        
        $users=$userManager->readAccount();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/account.tpl');
    }
    
    public function logOut(){
     $userManager=new UserManager();
     $userManager->endSession();
    header("Location: http://localhost/Projet_5/index.php?");
    }
    
    
    public function registerUser(){
    $userManager=new UserManager();
    if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['address']) AND !empty($_POST['city']) AND !empty($_POST['postalCode']) AND !empty($_POST['telNumber']) AND !empty($_POST['birth']) AND !empty($_POST['email'])   AND !empty($_POST['registrationDate'])){
                $user=new User(['lastName'=>$_POST['lastName'],'firstName'=>$_POST['firstName'],'middleName'=>$_POST['middleName'],'address'=>$_POST['address'],'city'=>$_POST['city'],'postalCode'=>$_POST['postalCode'],'telNumber'=>$_POST['telNumber'],'birth'=>$_POST['birth'],'email'=>$_POST['email'],'registrationDate'=>$_POST['registrationDate']]);
                $newUser=$userManager->createUser($user);
                $this->smarty->assign('newUser', $newUser);
                $profileManager=new ProfileManager;
                $profiles=$profileManager->readAllProfile();
                $this->smarty->assign('profiles', $profiles);
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
        var_dump($userProfile);
        $usersProfileManager->deleteUserProfile($userProfile);
        $studentsGroupManager=new StudentsGroupManager();
        $studentGroup=$studentsGroupManager->readSelectedStudentGroup($_GET['id']);
        if(!is_null($studentGroup)){
            $studentsGroupManager->deleteStudentGroup($studentGroup);
        }
        $userManager=new UserManager();
        $selectedUser=$userManager->readSelectedUser($_GET['id']);
        $userManager->deleteUser($selectedUser);
        $users=$userManager->readAllUsers();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/usersList.tpl');
    }
    
    
    
    
    
}
