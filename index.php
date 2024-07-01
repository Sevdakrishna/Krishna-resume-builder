<?php
require('dnlib/load.php');


$action->helper->route('/', function() {
    global $action;
    
    $data['title'] = "Krishna's Resume Builder";
    $action->view->load('header', $data);  
    $action->view->load('navbar');
    $action->view->load('page_content_load');
    $action->view->load('footer');  
});

//create resume 1
$action->helper->route('action/createresume/$type', function($data) {
    global $action;

    $action->onlyForAuthUser();
    $data['title'] = "Resume - template ".$data['type'];
    //$t=$data['type'];
    //if($t==1){
        if($data['type']==1){
    $resume_data[0]=$action->session->get('Auth')['data']['id'];
    $resume_data[1]=$action->db->clean($_POST['name']);
    $resume_data[2]=$action->db->clean($_POST['headline']);
    $resume_data[4]=$action->db->clean($_POST['objective']);

    $contact['email']=$action->db->clean($_POST['email']);
    $contact['mobile']=$action->db->clean($_POST['mobile']);
    $contact['address']=$action->db->clean($_POST['address']);

    $resume_data[3]=json_encode($contact);
    $resume_data[5]=json_encode($_POST['skill']);
    $education=array();
    $work=array();
    foreach($_POST['university'] as $key=>$value){
        $education[$key]['university']=$value;
        $education[$key]['course']=$_POST['course'][$key];
        $education[$key]['e_duration']=$_POST['e_duration'][$key];
    }
    foreach($_POST['company'] as $key=>$value){
        $work[$key]['company']=$value;
        $work[$key]['jobrole']=$_POST['jobrole'][$key];
        $work[$key]['w_duration']=$_POST['w_duration'][$key];
        $work[$key]['work_desc']=$_POST['work_desc'][$key];
    }

    $resume_data[6]=json_encode($work);
    $resume_data[7]=json_encode($education);
    $resume_data[8]=$action->helper->UID();

    $run=$action->db->insert('resumes','user_id,name,headline,contact,objective,skills,experience,education,url',$resume_data);
    if($run){
        $action->session->set('success','resume created');
        $action->helper->redirect('dashboard');
    }else{
        $action->session->set('error','Something went wrong, Try Later..');
        $action->helper->redirect('dashboard');

    }
}elseif($data['type']==2){
    $resume_data[0]=$action->session->get('Auth')['data']['id'];
    $resume_data[1]=$action->db->clean($_POST['name']);
    $resume_data[2]=$action->db->clean($_POST['headline']);
    $resume_data[4]=$action->db->clean($_POST['objective']);

    $contact['email']=$action->db->clean($_POST['email']);
    $contact['mobile']=$action->db->clean($_POST['mobile']);
    $contact['address']=$action->db->clean($_POST['address']);

    $resume_data[3]=json_encode($contact);
    $resume_data[5]=json_encode($_POST['skill']);
    $education=array();
    $work=array();
    foreach($_POST['university'] as $key=>$value){
        $education[$key]['university']=$value;
        $education[$key]['course']=$_POST['course'][$key];
        $education[$key]['e_duration']=$_POST['e_duration'][$key];
    }
    foreach($_POST['company'] as $key=>$value){
        $work[$key]['company']=$value;
        $work[$key]['jobrole']=$_POST['jobrole'][$key];
        $work[$key]['w_duration']=$_POST['w_duration'][$key];
        $work[$key]['work_desc']=$_POST['work_desc'][$key];
    }

    $resume_data[6]=json_encode($work);
    $resume_data[7]=json_encode($education);
    $resume_data[8]=$action->helper->UID();

    $run=$action->db->insert('resumes','user_id,name,headline,contact,objective,skills,experience,education,url',$resume_data);
    if($run){
        $action->session->set('success','resume created');
        $action->helper->redirect('dashboard');
    }else{
        $action->session->set('error','Something went wrong, Try Later..');
        $action->helper->redirect('dashboard');

    }
}
    // }elseif($t==2){
    //     $action->session->set('success','resume created');
    //     $action->helper->redirect('home');
    // }

});


// //create resume 2
// $action->helper->route('action/createresume2', function($data) {
//     global $action;

//     $action->onlyForAuthUser();
//     //$t=$data['type'];
//     //if($t==1){

//     $resume_data[0]=$action->session->get('Auth')['data']['id'];
//     $resume_data[1]=$action->db->clean($_POST['name']);
//     $resume_data[2]=$action->db->clean($_POST['headline']);
//     $resume_data[4]=$action->db->clean($_POST['objective']);

//     $contact['email']=$action->db->clean($_POST['email']);
//     $contact['mobile']=$action->db->clean($_POST['mobile']);
//     $contact['address']=$action->db->clean($_POST['address']);

//     $resume_data[3]=json_encode($contact);
//     $resume_data[5]=json_encode($_POST['skill']);
//     $education=array();
//     $work=array();
//     foreach($_POST['university'] as $key=>$value){
//         $education[$key]['university']=$value;
//         $education[$key]['course']=$_POST['course'][$key];
//         $education[$key]['e_duration']=$_POST['e_duration'][$key];
//     }
//     foreach($_POST['company'] as $key=>$value){
//         $work[$key]['company']=$value;
//         $work[$key]['jobrole']=$_POST['jobrole'][$key];
//         $work[$key]['w_duration']=$_POST['w_duration'][$key];
//         $work[$key]['work_desc']=$_POST['work_desc'][$key];
//     }

//     $resume_data[6]=json_encode($work);
//     $resume_data[7]=json_encode($education);
//     $resume_data[8]=$action->helper->UID();

//     $run=$action->db->insert('resumes','user_id,name,headline,contact,objective,skills,experience,education,url',$resume_data);
//     if($run){
//         $action->session->set('success','resume created');
//         $action->helper->redirect('dashboard');
//     }else{
//         $action->session->set('error','Something went wrong, Try Later..');
//         $action->helper->redirect('dashboard');

//     }
//     // }elseif($t==2){
//     //     $action->session->set('success','resume created');
//     //     $action->helper->redirect('home');
//     // }

// });

//logout
$action->helper->route('action/logout', function() {
    global $action;
    
    $action->session->delete('Auth');
    $action->session->set('success','Logged out !');
    $action->helper->redirect('login');
});

//delete resume
$action->helper->route('action/delete/$url', function($data) {
    global $action;
    
    $url=$data['url'];
    $action->db->delete('resumes',"url='$url'");
    $action->session->set('success','Resume Deleted.');
    $action->helper->redirect('dashboard');
});

//dashboard
$action->helper->route('dashboard', function() {
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = "KS Resume Builder";
    $data['dashboard'] = "active";
    
    $data['resumes']=$action->db->read('resumes','*',"WHERE user_id=".$action->user_id());


    $action->view->load('header', $data);
    $action->view->load('navbar',$data);  
    $action->view->load('home_content',$data); 
    $action->view->load('footer');  
});

$action->helper->route('home', function() {
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = "KS Resume Builder";
    $action->view->load('header', $data);
    $action->view->load('navbar',$data);  
    $action->view->load('page_content_load',$data); 
    $action->view->load('footer');  
});

//profile

// $action->helper->route('profile', function() {
//     global $action;
//     $action->onlyForAuthUser();
//     $data['title'] = "KS Resume Builder";
//     $action->view->load('header', $data);
//     $action->view->load('navbar',$data);  
//     $action->view->load('profile',$data); 
//     $action->view->load('footer');  
// });

$action->helper->route('profile', function() {
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = "KS Resume Builder";
    $user_id = $action->session->get('Auth')['data']['id'];
    $user = $action->db->fetch("SELECT first_name, last_name, email_id, mobile, address FROM users WHERE id = ?", [$user_id]);

    $action->view->load('header');
    $action->view->load('navbar');  
    $action->view->load('profile_form'); 
    $action->view->load('footer');
    
});


$action->helper->route('action/profile', function($data) {
    global $action;
    $action->onlyForAuthUser();

    $user_id = $action->session->get('Auth')['data']['id'];
    $first_name = $action->db->clean($_POST['first_name']);
    $last_name = $action->db->clean($_POST['last_name']);
    $email = $action->db->clean($_POST['email']);
    $phone = $action->db->clean($_POST['mobile']);
    $address = $action->db->clean($_POST['address']);

    
    $user_data = [$first_name, $last_name, $email, $phone, $address, $user_id];


    $run = $action->db->update('users', 'first_name,last_name,email_id,mobile,address', $user_data, "id = ?");

    if ($run) {
        $action->session->set('success', 'Profile Updated Successfully.');
        $action->helper->redirect('home');
    } else {
        $action->session->set('error', 'Something went wrong, Try Later..');
        $action->helper->redirect('home');
    }
});




//resume - 1
$action->helper->route('resume/$url', function($data) {
    global $action;
    $r = $action->db->read("resumes","*","WHERE url='".$data['url']."'");
    
    if(!$r){
        $action->helper->redirect('dashboard');
    }

    $r=$r[0];
    // echo "<pre>";
    // print_r($r);

    $data['title'] = $r['name'];
    $data['type']=1;

    $data['resume']=$r;
    
    if($data['type']==1){
        $action->view->load('cv_content_1',$data);
    }else{
        $action->session->set('error','invalid resume type');
        $action->helper->redirect('select-template');
        
    }
     
      
});
//resume template
$action->helper->route('select-template', function() {
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = "Select a template";
    $data['dashboard'] = "active";
    $action->view->load('header', $data);
    $action->view->load('navbar',$data);  
    $action->view->load('template_content'); 
    $action->view->load('footer');  
});
//resume 
$action->helper->route('resumebuilder/$type', function($data) {
    global $action;
    $action->onlyForAuthUser();
    $data['title'] = "Resume - template ".$data['type'];
    $data['dashboard'] = "active";
    $action->view->load('header', $data);
    $action->view->load('navbar',$data);  
    if($data['type']==1){
        $action->view->load('resume_detail_1'); 
    }elseif($data['type']==2){
        $action->view->load('resume_detail_2'); 
    }
    else{
        $action->session->set('error', "No Such Template Available!");
        $action->helper->redirect('dashboard');
    }
    
    $action->view->load('footer');  
});

//login
$action->helper->route('login', function() {
    global $action;
    $data['title'] = "Login Resume Builder";
    $action->onlyForUnauthUser();
    $action->view->load('header', $data);  
    $action->view->load('login_content'); 
    $action->view->load('footer');  
});

$action->helper->route('action/login', function() {
    global $action;
    $error=$action->helper->isAnyEmpty($_POST);
    if($error){
        $action->session->set('error', "$error is empty!");
    }else{
        $email=$action->db->clean($_POST['email']);
        $password=$action->db->clean($_POST['password']);
        $user=$action->db->read('users','id,email_id',"WHERE email_id='$email' AND password='$password'");
        if(count($user)>0){
            $action->session->set('Auth',['status'=>true,'data'=>$user[0]]);
            $action->session->set('success','Logged in .');
            $action->helper->redirect("home");
        }else{
            $action->session->set('error', "incorrect email/password");
            $action->helper->redirect("login");
        }
    }
});

//signup
$action->helper->route('signup', function() {
    global $action;
    $data['title'] = "Signup Resume Builder";
    $action->onlyForUnauthUser();
    $action->view->load('header', $data);  
    $action->view->load('signup_content'); 
    $action->view->load('footer');  
});

$action->helper->route('action/signup', function() {
    global $action;
    $error=$action->helper->isAnyEmpty($_POST);
    if($error){
        $action->session->set('error', "$error is empty!");
        $action->helper->redirect("signup");
    }else{
        $signup_data[0]=$action->db->clean($_POST['full_name']);
        $signup_data[1]=$action->db->clean($_POST['email']);
        $signup_data[2]=$action->db->clean($_POST['password']);

        $user=$action->db->read('users','email_id',"WHERE email_id='$signup_data[1]'");
        if(count($user)>0){
            $action->session->set('error', "$signup_data[1] is Already registered!");
            $action->helper->redirect("signup");
        }else{
        $action->db->insert('users','first_name,email_id,password',$signup_data);
        $action->session->set('success','account created successfully..');
        $action->helper->redirect("login");
        }
    }
});





if(!Helper::$isPageIsAvailable){
    
    $data['title'] = "No Page Found!.";
    
    $action->view->load('header', $data);
    $action->view->load('navbar',$data);  
    $action->view->load('not_found'); 
    $action->view->load('footer');
}
