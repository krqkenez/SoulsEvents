<?php

namespace krqkenez\SoulsBurn\events;

final class MarketCommentDeleteEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MarketCommentDeleteEvent";
	}
	
}
