<?php
	// Vista.php
	class Vista {
		public $img;
		public $blanco, $negro, $verdeclaro, $rojo;
		public function dibujarReloj($modelo){
			$this->img = imagecreate($modelo->ancho, $modelo->alto);
			$this->blanco = imagecolorallocate($this->img, 255, 255, 255);
			$this->negro = imagecolorallocate($this->img, 0, 0, 0);
			$this->rojo = imagecolorallocate($this->img, 255, 0, 0);
			$this->verdeclaro = imagecolorallocate($this->img, 196, 237, 220);
			imagefilledrectangle($this->img, 0, 0, $modelo->ancho, $modelo->alto, $this->blanco);
			imagefilledellipse($this->img, $modelo->centrox, $modelo->centroy, $modelo->ancho-30, $modelo->alto-30, $this->negro);
			imagefilledellipse($this->img, $modelo->centrox, $modelo->centroy, $modelo->ancho-40, $modelo->alto-40, $this->blanco);
			imagestring($this->img, 15, 270, 65, "1", $this->negro);
			imagestring($this->img, 15, 325, 110, "2", $this->negro);		
			imagestring($this->img, 15, 350, 195, "3", $this->negro);	
			imagestring($this->img, 15, 325, 270, "4", $this->negro);	
			imagestring($this->img, 15, 270, 325, "5", $this->negro);	
			imagestring($this->img, 15, 195, 345, "6", $this->negro);	
			imagestring($this->img, 15, 125, 325, "7", $this->negro);	
			imagestring($this->img, 15, 75, 270, "8", $this->negro);	
			imagestring($this->img, 15, 55, 193, "9", $this->negro);	
			imagestring($this->img, 15, 75, 120, "10", $this->negro);	
			imagestring($this->img, 15, 125, 65, "11", $this->negro);	
			imagestring($this->img, 15, 190, 50, "12", $this->negro);
			imagefilledellipse($this->img, $modelo->centrox, $modelo->centroy, $modelo->ancho-390, $modelo->alto-390, $this->negro);

			for($i=0; $i<340; $i++){		
				imagesetthickness($this->img, 3);		
				/*Min*/imageline($this->img, $modelo->arrptosini[$i]->x, $modelo->arrptosini[$i]->y, $modelo->arrptofin[$i]->x, $modelo->arrptofin[$i]->y, $this->negro);
				/*Hora*/imageline($this->img, $modelo->arrptosini[$i]->x, $modelo->arrptosini[$i]->y, $modelo->arrptofin[$i]->x+20, $modelo->arrptofin[$i]->y+30, $this->negro);
				/*Segundo*/imageline($this->img, $modelo->arrptosini[$i]->x, $modelo->arrptosini[$i]->y, $modelo->arrptofin[$i]->x+50, $modelo->arrptofin[$i]->y+50, $this->rojo);
			}
			for($i=0; $i<60; $i++){
				if($i%5==0){
					//imagesetthickness(resource $image, int $thickness): bool
					imagesetthickness($this->img, 3);
					imageline($this->img, $modelo->arrptosext[$i]->x, $modelo->arrptosext[$i]->y, $modelo->arrptosint[$i]->x, $modelo->arrptosint[$i]->y, $this->rojo);											
				}
				else{
					imagesetthickness($this->img, 1);
					//imageline($this->img, $modelo->arrptosext[$i]->x, $modelo->arrptosext[$i]->y, $modelo->arrptosint[$i]->x, $modelo->arrptosint[$i]->y, $this->negro);
					imagefilledellipse($this->img, $modelo->arrptosext[$i]->x, $modelo->arrptosext[$i]->y, 5, 5, $this->negro);
				}
			}
			imagepng($this->img);
			imagedestroy($this->img);
		}
	}
?>