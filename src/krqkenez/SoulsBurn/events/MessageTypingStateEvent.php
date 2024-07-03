<?php

namespace krqkenez\SoulsBurn\events;

final class MessageTypingStateEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MessageTypingStateEvent";
	}
	
}
