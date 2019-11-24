<?php 
	$msg = '';
	if (isset($_POST['submit'])) {
		$userObj = new DatabaseWork($pdo, 'customer');
		$data = [
			'firstname' => $_POST['firstname'],
			'surname' => $_POST['surname'],
			'gender' => $_POST['gender'],
			'contact' => $_POST['contact'],
			'email' => $_POST['email'],
			'address' => $_POST['address'],
			'password' => $_POST['password']
		];
		print_r($data);
		// $success = $userObj->save($data);
		// if ($userObj){
		// 	header('location:register?msg=Registered');
		// }
		// else
		// 	header('location:register?msg=Failed to Add User');
	}

	if (isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}

	$templateVars = ['msg'=>$msg];
	
	$title = 'Online Book Store - Register';
	$pagename = 'Register';
	$content = loadTemplate('../views/register_design.php', $templateVars);
?>