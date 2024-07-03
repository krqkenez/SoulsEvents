<?php

namespace krqkenez\SoulsBurn\events;

final class MarketOrderEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "MarketOrderEditEvent";
	}
	
}
