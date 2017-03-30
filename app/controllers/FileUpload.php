<?php
class FileUpload extends Controller {
	public function index() {
		$this->model ( 'AtomDataControl' );
		$atomDataControl = new AtomDataControl ();
		$this->model ( 'AtomConstants' );
		$atomConstants = new AtomConstants ();
		$this->view ( 'addons/FileUploadView', [ 
				'atomConstants' => $atomConstants,
				'dataControl' => $atomDataControl 
		] );
	}
	public function uploadprocess() {
		$this->model ( 'AtomConstants' );
		$atomConstants = new AtomConstants ();
		$target_dir = "dropzone/";
		$target_file = $target_dir . basename ( $_FILES ["file"] ["name"] );
		$uploadOk = 1;
		$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		} else {
			if (move_uploaded_file ( $_FILES ["file"] ["tmp_name"], $target_file )) {
				echo "The file " . basename ( $_FILES ["file"] ["name"] ) . " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		header('Location: ../FileUpload');
		exit();
	}
	public function deletefile($fileName) {
// 		echo realpath("./dropzone/".$fileName);
		unlink("./dropzone/".$fileName);
		header('Location: ../../FileUpload');
		exit();
	}
}