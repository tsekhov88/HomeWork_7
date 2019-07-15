<?php

/* Сделать 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом трейте будет метод method1, возвращающий 1, во втором трейте - метод method2, возвращающий 2, а в третьем трейте - метод method3, возвращающий 3. Пусть все эти методы будут приватными.

Сделайте класс Test, использующий все три созданных нами трейта. Сделать в этом классе публичный метод getSum, возвращающий сумму результатов методов подключенных трейтов. */

	include_once "trait1.php";
	include_once "trait2.php";
	include_once "trait3.php";

	class Test {
		use Trait1;
		use Trait2;
		use Trait3;

		public function getSum() {
			return $this->method1() + $this->method2() + $this->method3();
		}
	}