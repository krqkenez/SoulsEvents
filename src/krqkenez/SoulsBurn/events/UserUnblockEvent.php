<?php

namespace krqkenez\SoulsBurn\events;

final class UserUnblockEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "UserUnblockEvent";
	}
	
}
