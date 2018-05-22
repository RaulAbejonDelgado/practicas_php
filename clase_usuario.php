<?php

class Usuario{
	//atributos de usuario
	private $nombre;
	private $clave;
	//el constructor es lo primero que se crea cuando se instancia una clase, LO HE TENIDO QUE QUITAR .


		//esta funcion nos guardara el nombre de usuario
		public function setNombre($nom){
			$this->nombre = $nom;
			
		}
		//esta funcion nos devolvera el nombre de usuario
		public function getNombre(){
			return $this->nombre;
			

		}
		//esta funcion nos guardara la contraseña
		public function setClave($clav){
			$this->clave = $clav;
			
		}
		//esta funcion nos dara la contraseña
		public function getClave(){
			return $this->clave;
			
		}
		public function saludar(){
			echo "el usuario saluda";
			
		}


}


?>