<?php

namespace krqkenez\SoulsBurn\events;

final class BoardPostRestoreEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "BoardPostRestoreEvent";
	}
	
}
