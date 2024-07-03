<?php

namespace krqkenez\SoulsBurn\events;

final class MessageReplyEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MessageReplyEvent";
	}
	
}
