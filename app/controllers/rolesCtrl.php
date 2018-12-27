<?php 

class rolesCtrl extends appCtrl
{


	
	 public function roles()
    {
        $roleModule = $this->load('module', 'role');
        $data = $roleModule->returnAllRoles();
        View::render('dashboard/roles', $data);       
    }


    public function saveRole()
    {
        

        $redirectUrl = $_SERVER['REDIRECT_URL'];

        if(isset($_POST['role']) && strlen($_POST['role']) > 3)
        {
            
            $rolename = $_POST['role'];       
            $roleModule = $this->load('module', 'role');
            if(!$roleModule->pluckByRole($rolename))
            {
                

                if($roleModule->insert($rolename))
                {

                    $_SESSION['flashMsg'] = "New Role has been added";
                    $_SESSION['fClass'] = 'success';
                    header("location: $redirectUrl");


                } else {

                    $_SESSION['flashMsg'] = "Failed whie adding new role";
                    $_SESSION['fClass'] = 'error';
                    header("location: $redirectUrl");
                }

            } else {
                    
                    $_SESSION['flashMsg'] = "role: $rolename exist";
                    $_SESSION['fClass'] = 'error';
                    header("location: $redirectUrl");
            }


        } else {

            echo "cannot proceed";
        }


    }


}