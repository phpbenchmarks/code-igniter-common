<?php

/**
 * Model for a Bar entity.
 *
 */
class Bar extends CI_Model
{

	protected $id;
	protected $date;
	protected $dateTime;
	protected $fixedString;
	protected $variableString;

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
