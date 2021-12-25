<?php
if (isset($_POST['event']) && $_POST['event'] == "create") {
	$cookie_name = $_POST['cookie_name'];
	$cookie_value = md5($_POST['cookie_value']);

	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

	if ($_COOKIE[$cookie_name]) {
		echo "200";
	}else{
		echo "300";
	}
}

if (isset($_POST['event']) && $_POST['event'] == "remove") {
	unset($_COOKIE['unlock']); 
	$remove = setcookie("unlock", null, -1, '/');
	if ($remove) {
		echo "200";
	}else{
		echo "300";
	}
}
?>