<?php
    if (!class_exists('KeyCAPTCHA_CLASS')) {
	// Replace '/home/path_to_keycaptcha_file/' with the real path to keycaptcha.php
	include('keycaptcha/keycaptcha.php');
}
        $kc_o = new KeyCAPTCHA_CLASS();
        
        include('alexander.html');
?>
