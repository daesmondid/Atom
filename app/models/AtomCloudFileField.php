<?php

$this->model('AtomField');

class AtomCloudFileField extends AtomField {
	
	const TYPE_CLOUDFILE = 'cloudfile';
	
	public function getFieldType() {
		return $this::TYPE_CLOUDFILE;
	}
	
}