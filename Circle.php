<?php

/* Создайте интерфейс “Фигура”, в котором описан метод для вычисления площади фигуры. Реализовать этот интерфейс в классе: круг. */

	include_once 'Figure.php';

	class Circle implements Figure {
		protected $radius;

		public function __construct($radius) {
			$this->radius = $radius;
		}

		public function getArea() {
			define("pi", 3.1415926535);
			return pi * ($this->radius * $this->radius);
		} 
	}

	$Circle = new Circle('7');
	echo $Circle->getArea();