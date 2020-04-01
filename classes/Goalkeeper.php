<?php

namespace Classes;

use interfaces\PlayerInterface;
use Players\ElhadryChild;
use Players\ElhadryFather;

class Goalkeeper implements PlayerInterface
{
	public function play()
	{
		// TODO: Implement play() method.
		echo (new ElhadryChild())->Keeping();
	}
}