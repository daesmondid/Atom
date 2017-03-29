<?php

$this->model('AtomField');

class AtomNumberField extends AtomField {
	
	const TYPE_NUMBER = 'number';
	
	public function getFieldType() {
		return $this::TYPE_NUMBER;
	}
	
}