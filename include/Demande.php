<?php
class Demande
{
	
	private $nom; private $bureau_number; private $problem; private $info_pc; private $description;
	
	public function __construct($nom, $bureau, $problem, $info_pc, $description)
	{
		$this->nom = $nom;
		$this->bureau_number = $bureau;
		$this->problem = $problem;
		$this->info_pc = $info_pc;
		$this->description = $description;
	}
	
	/**
	 * @return mixed
	 */
	public function getNom() {
		return $this->nom;
	}
	
	/**
	 * @param mixed $nom
	 */
	public function setNom( $nom ) {
		$this->nom = $nom;
	}
	
	/**
	 * @return mixed
	 */
	public function getBureauNumber() {
		return $this->bureau_number;
	}
	
	/**
	 * @param mixed $bureau_number
	 */
	public function setBureauNumber( $bureau_number ) {
		$this->bureau_number = $bureau_number;
	}
	
	/**
	 * @return mixed
	 */
	public function getProblem() {
		return $this->problem;
	}
	
	/**
	 * @param mixed $problem
	 */
	public function setProblem( $problem ) {
		$this->problem = $problem;
	}
	
	/**
	 * @return mixed
	 */
	public function getInfoPc() {
		return $this->info_pc;
	}
	
	/**
	 * @param mixed $info_pc
	 */
	public function setInfoPc( $info_pc ) {
		$this->info_pc = $info_pc;
	}
	
	/**
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * @param mixed $description
	 */
	public function setDescription( $description ) {
		$this->description = $description;
	}
	
}
	