<?php


	Class Placa extends Carro {

		public $placa;

		public function mostraPlaca() {
			echo $this->getPlaca();
		}

		public function __construct($plac) {
			$this->placa = $plac;
		}

		public function getPlaca() {
			return $this->placa;
		}

		public function setPlaca($plac) {
			$this->placa = $plac;
		}
	}