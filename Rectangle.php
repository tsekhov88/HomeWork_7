<?php

/* Создайте интерфейс “Фигура”, в котором описан метод для вычисления площади фигуры. Реализовать этот интерфейс в классе: прямоугольник. */

	include_once 'Figure.php';

	class Rectangle implements Figure {
		protected $height;
		protected $width;

		public function __construct($height, $width) {
			$this->height = $height;
			$this->width = $width;
		}

		public function getArea() {
			return $this->height * $this->width;
		} 
	}

	$Rectangle = new Rectangle('6', '7');
	echo $Rectangle->getArea();