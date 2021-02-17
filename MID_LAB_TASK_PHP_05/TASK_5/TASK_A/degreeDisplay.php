<?php
	
	
	
	if(isset($_POST['submit']))
	{

		if(isset($_POST['ssc'])){
			echo "SSC";
		}
		elseif(isset($_POST['hsc'])){
			echo "HSC";
		}
		elseif(isset($_POST['bsc'])){
			echo "BSc";
		}
		elseif(isset($_POST['msc'])){
			echo "MSc";
		}
	}
?>