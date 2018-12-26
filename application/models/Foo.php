<?php

/**
 * Model for a Foo entity.
 *
 */
class Foo extends CI_Model
{

	protected $id;
	protected $date;
	protected $dateTime;
	protected $fixedString;
	protected $variableString;
	protected $validationRules = [
		['field' => 'id', 'label' => 'ID', 'rules' => 'required|is_natural_no_zero'],
		['field' => 'date', 'label' => 'Date', 'rules' => 'required'],
		['field' => 'dateTime', 'label' => 'Date & time', 'rules' => 'required'],
		['field' => 'fixedString', 'label' => 'Fixed length string', 'rules' => 'required|min_length[28]|max_length[30]'],
		['field' => 'variableString', 'label' => 'Variable length string', 'rules' => 'required|min_length[31]|max_length[33]'],
	];

	public function __construct($entity = null)
	{
		parent::__construct();
		if ( ! empty($entity))
		{
			$this->setId($entity->getId());
			$this->setDate($entity->getDate());
			$this->setDateTime($entity->getDateTime());
			$this->setFixedString($entity->getFixedString());
			$this->setVariableString($entity->getVariableString());
		}
	}

	// make a mock Foo object
	public static function mock($which)
	{
		$result = new Foo();
		$result->id = $which;
		$result->date = time();
		$result->dateTime = time();
		$result->fixedString = 'Small overload fixed string ' . $which;
		$result->variableString = 'Small overload variable string ' . $which;
		return $result;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function getDateTime()
	{
		return $this->dateTime;
	}

	public function getFixedString()
	{
		return $this->fixedString;
	}

	public function getVariableString()
	{
		return $this->variableString;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function setdateTime($dateTime)
	{
		$this->dateTime = $dateTime;
	}

	public function setFixedString($fixedString)
	{
		$this->fixedString = $fixedString;
	}

	public function setVariableString($variableString)
	{
		$this->variableString = $variableString;
	}

	public function toArray()
	{
		$result = [
			'id'			 => $this->getId(),
			'date'			 => $this->getDate(),
			'dateTime'		 => $this->getDateTime(),
			'fixedString'	 => $this->getFixedString(),
			'variableString' => $this->getVariableString(),
		];
		return $result;
	}

}
