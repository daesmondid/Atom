<?php

$this->model('AtomField');

class AtomReferenceField extends AtomField {
	
	private $referencedField;
	private $whereFilter;
	
	const TYPE_REFERENCE = 'reference';
	
	public function getReferencedField() {
		return $this->referencedField;
	}
	
	public function setReferencedField($referencedField) {
		$this->referencedField = $referencedField;
	}
	
	public function getWhereFilter() {
		return $this->whereFilter;
	}
	
	public function setWhereFilter($whereFilter) {
		$this->whereFilter = $whereFilter;
	}
	
	public function getFieldType() {
		return $this::TYPE_REFERENCE;
	}
	
}