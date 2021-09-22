<?php include_once 'config/init.php'; ?>

<?php

//Create User Object
$user = new User;


if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
    $data['cogname'] = $_POST['cogname'];
    $data['Cfiscale'] = $_POST['Cfiscale'];
    $data['indrizzo'] = $_POST['indrizzo'];
    $data['cap'] = $_POST['cap'];
    $data['nazine'] = $_POST['nazine'];
    $data['cita'] = $_POST['cita'];
    $data['provinza'] = $_POST['provinza'];

    if($user->register($data)){
        redirect('index.php', 'Your job has been listed', 'success');
    }else{
        redirect('index.php', 'Something went wrong', 'error' );
    }

	
	
	
}

//Get Template & Assign Vars
 $template = new Template('templates/register_user.php');



// //Display template
  echo $template;