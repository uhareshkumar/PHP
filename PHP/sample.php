<?php  
	$above500 = "ab500.mp3";
	$above1000 = "ab1000.mp3";
	$above1500 = "ab1500.mp3";
	
	# the variable val can be used as updated value after the sucessfull payment
	$val = 1000;

	if ($val >= 1500) 
	{
		echo '<div style="display:none"> <embed src="'.$above1500.'" hidden="true"></embed> </div>';
	}
	elseif ($val >= 1000) 
	{
		echo '<div style="display:none"> <embed src="'.$above1000.'" hidden="true"></embed> </div>';
	}
	elseif ($val >= 500)
	{
		echo '<div style="display:none"> <embed src="'.$above500.'" hidden="true"></embed> </div>';
	}
?>