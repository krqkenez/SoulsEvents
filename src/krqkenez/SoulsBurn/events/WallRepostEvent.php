<?php

namespace krqkenez\SoulsBurn\events;

final class WallRepostEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "WallRepostEvent";
	}
	
}
