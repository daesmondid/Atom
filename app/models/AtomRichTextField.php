<?php

$this->model('AtomField');

class AtomRichTextField extends AtomField {
	
	const TYPE_RICHTEXT = 'richtext';
	
	public function getFieldType() {
		return $this::TYPE_RICHTEXT;
	}
	
}