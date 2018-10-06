<?php
	function redirect_home(){
		$url = "index";
		if ($url == "index") {
			include_once 'Mod/Mod_Home/home1.php';
		}
	}
	function home() {
		if (!isset($_GET["url"])) {
		redirect_home();
		}
		elseif (isset($_GET["url"])) {
			$url = $_GET["url"];
			if ($url == "login") {
				include_once 'Mod/Mod_Login/login.php';
			}
			elseif ($url == "signup") {
				include_once 'Mod/Mod_SignUp/signup.php';
			}
		}
	}
	home();
	
	

?>