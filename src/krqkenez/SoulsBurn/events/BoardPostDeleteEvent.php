<?php

namespace krqkenez\SoulsBurn\events;

final class BoardPostDeleteEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "BoardPostDeleteEvent";
	}
	
}
