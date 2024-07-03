<?php

namespace krqkenez\SoulsBurn\events;

final class WallReplyRestoreEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "WallReplyRestoreEvent";
	}
	
}
