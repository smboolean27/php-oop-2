<?php

class Math {

	public static function sum($num1, $num2)
	{
		return $num1 + $num2;
	}

	public static function random($min, $max)
	{
		return rand($min, $max);
	}

}

echo Math::random(2,4);