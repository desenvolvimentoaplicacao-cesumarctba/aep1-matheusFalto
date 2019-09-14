<?php


	Class Carro {

		// atributos

		public  $cor;
		public  $modelo;
		public  $marca;
		private $proprietario;
		
		// metodos

		public function mostraCarro() {
			echo "<pre>".$this->getProprietario() . " marca " . $this->getMarca() . " modelo " . $this->getModelo() . " cor " . $this->getCor(). "</pre>";
		}

		// metodos especiais

		public function __construct($cor, $mod, $mar, $pro) {
			$this->cor = $cor;
			$this->modelo = $mod;
			$this->marca = $mar;
			$this->proprietario = $pro;
		}

		public function getCor() {
			return $this->cor;
		}

		public function setCor($cor) {
			$this->cor = $cor;
		}

		public function getModelo() {
			return $this->modelo;
		}

		public function setModelo($mod) {
			$this->modelo = $mod;
		}

		public function getMarca() {
			return $this->marca;
		}

		public function setMarca($mar) {
			$this->marca = $mar;
		}

		public function getProprietario() {
			return $this->proprietario;
		}

		public function setProprietario($pro) {
			$this->proprietario = $pro;
		}
		public function mostrarClasse(){
			echo "<pre>";
			print_r($this);
			echo "</pre>";
		}
	}