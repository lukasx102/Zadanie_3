<?php

class Response {
	public $dico;
	public $name;
	public $date_of_birth;
	public $company;
	public $street;
	public $city;
	public $country;
	public $psc;

	/**
	 * @param $dico
	 * @param $name
	 * @param $date_of_birth
	 * @param $company
	 * @param $street
	 * @param $city
	 * @param $country
	 * @param $psc
	 */
	public function __construct( $dico, $name, $date_of_birth, $company, $street, $city, $country, $psc) {
		$this->dico          = $dico;
		$this->name          = $name;
		$this->date_of_birth = $date_of_birth;
		$this->company       = $company;
		$this->street        = $street;
		$this->city          = $city;
		$this->country       = $country;
		$this->psc           = $psc;
	}


	/**
	 * @return mixed
	 */
	public function getDico() {
		return $this->dico;
	}

	/**
	 * @param mixed $dico
	 */
	public function setDico( $dico ) {
		$this->dico = $dico;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getDateOfBirth() {
		return $this->date_of_birth;
	}

	/**
	 * @param mixed $date_of_birth
	 */
	public function setDateOfBirth( $date_of_birth ) {
		$this->date_of_birth = $date_of_birth;
	}

	/**
	 * @return mixed
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * @param mixed $company
	 */
	public function setCompany( $company ) {
		$this->company = $company;
	}

	/**
	 * @return mixed
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * @param mixed $street
	 */
	public function setStreet( $street ) {
		$this->street = $street;
	}

	/**
	 * @return mixed
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @param mixed $city
	 */
	public function setCity( $city ) {
		$this->city = $city;
	}

	/**
	 * @return mixed
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * @param mixed $country
	 */
	public function setCountry( $country ) {
		$this->country = $country;
	}

	/**
	 * @return mixed
	 */
	public function getPsc() {
		return $this->psc;
	}

	/**
	 * @param mixed $psc
	 */
	public function setPsc( $psc ) {
		$this->psc = $psc;
	}






}