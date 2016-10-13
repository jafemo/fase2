<?php
//////INICIAMOS LA CLASE//////
class ia{

	private $columna= '1';
	private $fila= '1';

	/*public function __construct($columna,$fila){
		$this->columna=$columna;
		$this->fila=$fila;
	}*/

//////ESTABLECEMOS LOS GETERS//////
	public function getColumna(){
		return $this->columna;
	}

	public function getFila(){
		return $this->fila;
	}
//////Y AHORA LOS SETTERS CON DOS VARIABLES DIFERENTES//////
	public function setColumna($col){
		$this->columna= $col;
	}
	public function setFila($fil){
		$this->fila = $fil;
	}

/////FUNCION RANDOM/////
	public function randomPos(){
		$this->columna=rand(0,3);
		$this->fila=rand(0,3);
	  }
}
?>
