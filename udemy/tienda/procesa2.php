<?php

//var_dump($_FILES);

if (isset($_FILES['archivo'])) {
	foreach ($_FILES['archivo']['name'] as $key => $archivo) {
		if(!empty($archivo)){
			move_uploaded_file(
				$_FILES['archivo']['tmp_name'][$key],
				'uploads/'.$archivo
			);
		}
	}	
};
