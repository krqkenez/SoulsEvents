<?php

namespace krqkenez\SoulsBurn\events;

final class GroupLeaveEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "GroupLeaveEvent";
	}
	
}
