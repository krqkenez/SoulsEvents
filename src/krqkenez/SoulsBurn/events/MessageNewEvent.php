<?php

namespace krqkenez\SoulsBurn\events;

final class MessageNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MessageNewEvent";
	}
	
}
