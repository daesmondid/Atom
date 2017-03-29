<?php

$this->model('AtomField');

class AtomIdField extends AtomField {
	
	const TYPE_ID = 'id';
	
	public function getFieldType() {
		return $this::TYPE_ID;
	}
	
}