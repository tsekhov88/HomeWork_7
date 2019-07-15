<?php

/* Реализовать класс User, который подсчитывает, сколько экземпляров данного класса было создано */

	class User {

		public static $count = 0;

	    public function __construct() {
	    	++self::$count;
	    }
	
		public static function getCount() {
			return self::$count;
		}
	}

	$instances1 = new User();
	$instances2 = new User();
	$instances3 = new User();
	$instances4 = new User();
	$instances5 = new User();

	echo User::getCount();