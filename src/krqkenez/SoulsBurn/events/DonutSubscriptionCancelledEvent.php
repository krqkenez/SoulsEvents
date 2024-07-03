<?php

namespace krqkenez\SoulsBurn\events;

final class DonutSubscriptionCancelledEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "DonutSubscriptionCancelledEvent";
	}
	
}
