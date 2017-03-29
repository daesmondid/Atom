<?php

$this->model('AtomField');

class AtomStringField extends AtomField {
	
	const TYPE_STRING = 'string';
	
	public function getFieldType() {
		return $this::TYPE_STRING;
	}
	
}