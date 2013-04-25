<?php
	
	if ((isset($_POST['delete'])) && ($_POST['delete'] != "")) {
		unlink('files/' . $_POST['delete']);
		echo "";
	} else  {
	
		$upoad_dir = "files/";
		$upload_file = $upoad_dir . basename($_FILES['file']['name']);
	
		if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
			echo basename($upload_file);
		} else {
			echo "";
		}
	}
	

?>