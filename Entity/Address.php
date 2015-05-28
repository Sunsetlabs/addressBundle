<?php

namespace Sunsetlabs\AddressBundle\Entity;

use Sunsetlabs\EcommerceResourceBundle\Interfaces\Address\AddressInterface;

abstract class Address implements AddressInterface
{
	protected $id;
	protected $phone;
	protected $street;

	public function getId()
	{
		return $this->id;
	}
	public function setPhone($phone)
	{
		$this->phone = $phone;
		return $this;
	}
	public function setStreet($street)
	{
		$this->street = $street;
		return $this;
	}
	public function getPhone()
	{
		return $this->phone;
	}
	public function getStreet()
	{
		return $this->street;
	}
}