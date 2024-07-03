<?php

namespace krqkenez\SoulsBurn\events;

final class UserBlockEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "UserBlockEvent";
	}
	
}
