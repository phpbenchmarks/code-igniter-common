<?php

use PhpBenchmarksRestData\Service;

/**
 * Model for User collection.
 * Data comes from a service rather than an RDB.
 *
 */
class Users extends CI_Model
{

	/**
	 * Constructor: load our shadow models, which support serialization
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['ShadowUser', 'ShadowComment', 'ShadowCommentType']);
	}

	/**
	 * Simple pass through
	 */
	public function getUsers()
	{
		return Service::getUsers();
	}

	/**
	 * Serialized collection
	 */
	public function serialized()
	{
		return $this->convert($this->getUsers());
	}

	/**
	 * Convert a single User object or an array of them
	 * into a User array or array of them.
	 * 
	 * @param object|array $objects
	 * @return array 
	 */
	private function convert($objects)
	{
		$result = [];
		if (is_array($objects))
		{
			foreach ($objects as $entity)
			{
				$user = new ShadowUser($entity);
				$result[] = $user->toArray();
			}
		}
		else
		{
			$user = new ShadowUser($objects);
			$result = $user->toArray();
		}
		return $result;
	}

}
