<?php

/* Создайте интерфейс “Фигура”, в котором описан метод для вычисления площади фигуры. Реализовать этот интерфейс в классе: треугольник. */

	include_once 'Figure.php';

	class Triangle implements Figure {
		protected $a;
		protected $b;
		protected $c;

		public function __construct($a, $b, $c) {
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
		}

		public function getArea() {
			$per = ($this->a + $this->b + $this->c)/2;
			return sqrt($per * ($per - $this->a) * ($per - $this->b) * ($per - $this->c));
			
		} 
	}

	$Triangle = new Triangle('5', '7', '6');
	echo $Triangle->getArea();