<?php

namespace krqkenez\SoulsBurn\events;

final class MarketCommentEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MarketCommentEditEvent";
	}
	
}
