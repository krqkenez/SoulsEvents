<?php

namespace krqkenez\SoulsBurn\events;

final class BoardPostNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "BoardPostNewEvent";
	}
	
}
