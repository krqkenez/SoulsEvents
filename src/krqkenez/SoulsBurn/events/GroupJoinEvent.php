<?php

namespace krqkenez\SoulsBurn\events;

final class GroupJoinEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "GroupJoinEvent";
	}
	
}
