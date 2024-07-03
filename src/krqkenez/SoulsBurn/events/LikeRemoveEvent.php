<?php

namespace krqkenez\SoulsBurn\events;

final class LikeRemoveEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "LikeRemoveEvent";
	}
	
}
