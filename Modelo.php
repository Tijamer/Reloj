<?php
	// Modelo.php 
	class Modelo {	// Reloj
		public $ancho, $alto;
		public $centrox, $centroy, $radio;
		public $arrptosext, $arrptosint;
		public $hora, $min, $seg;
		public function __construct($h, $m, $s, $ancho, $alto){
			$this->hora = $h;
			$this->min = $m;
			$this->seg = $s;
			$this->ancho = $ancho;
			$this->alto = $alto;
			$this->centrox = $ancho/2;
			$this->centroy = $alto/2;
			$this->radio = $ancho/2-30;
			$this->arrptosext = Array();
			$this->arrptosint = Array();
			$ang_rad_ini = 0;		
			$ang_rad_div = (2*M_PI)/60;
			$ang_rad_flecha = 10;
			for($i=0; $i<60; $i++){
				$this->arrptosext[$i] = 
					new Punto(
				$this->centrox+$this->radio*cos($ang_rad_ini),
				$this->centroy+$this->radio*sin($ang_rad_ini) 
					);
				$this->arrptosint[$i] = 
					new Punto(
				$this->centrox+($this->radio-10)*cos($ang_rad_ini),
				$this->centroy+($this->radio-10)*sin($ang_rad_ini) 
					);
				$ang_rad_ini += $ang_rad_div; 
			}
			//Nuestro
			for($i=0; $i<360; $i++){
				$this->arrptofin[$i] = 
					new Punto(
				$this->centrox+$this->radio*cos($ang_rad_flecha),
				$this->centroy+$this->radio*sin($ang_rad_flecha) 
					);
				$this->arrptosini[$i] = 
					new Punto(
				$this->centrox+($this->radio-165)*cos($ang_rad_flecha),
				$this->centroy+($this->radio-165)*sin($ang_rad_flecha) 
					);
				$this->arrm[$i]= new Punto(
					($this->centrox)+($this->radio-165)*cos($ang_rad_ini),
					($this->centroy)+($this->radio-165)*sin($ang_rad_ini)
					);
				$this->arrh[$i]= new Punto(
					($this->centrox)+($this->radio-165)*cos($ang_rad_ini),
					($this->centroy)+($this->radio-165)*sin($ang_rad_ini)
					);
				$this->arrs[$i] = 
					new Punto(
				$this->centrox+($this->radio-165)*cos($ang_rad_ini),
				$this->centroy+($this->radio-165)*sin($ang_rad_ini) 
					);
				$ang_rad_ini += $ang_rad_div; 
			}
			//Isra
			/*for($i=0; $i<60; $i++){
				$this->arrh[$i]= new Punto(
					($this->centrox)+($this->radio-30)*cos($ang_rad_ini),
					($this->centroy)+($this->radio-35)*sin($ang_rad_ini)
				);
				$this->arrm[$i]= new Punto(
					($this->centrox)+($this->radio-20)*cos($ang_rad_ini+11),
					($this->centroy)+($this->radio-25)*sin($ang_rad_ini+11)
				);
				$this->arrs[$i] = 
					new Punto(
				$this->centrox+($this->radio-10)*cos($ang_rad_ini),
				$this->centroy+($this->radio-15)*sin($ang_rad_ini) 
					);
				$ang_rad_ini += $ang_rad_div; 
			}*/
			
		}
	}
?>