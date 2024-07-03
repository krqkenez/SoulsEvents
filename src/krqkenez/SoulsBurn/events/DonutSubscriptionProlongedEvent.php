<?php

namespace krqkenez\SoulsBurn\events;

final class DonutSubscriptionProlongedEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "DonutSubscriptionProlongedEvent";
	}
	
}
