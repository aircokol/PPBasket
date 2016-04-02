<?php
function redirect_to ( $location = NULL ) {
	if ( $location != NULL ){
		header("Location: {$location}");
		exit;
	}
}
function output_mess ( $message ="" ){
	if (!empty($message)){
		return "<p class=\"alert\">{$message}</p>";
	}else{
		return "";
	}	
}
?>