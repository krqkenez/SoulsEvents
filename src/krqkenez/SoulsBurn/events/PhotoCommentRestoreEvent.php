<?php

namespace krqkenez\SoulsBurn\events;

final class PhotoCommentRestoreEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "PhotoCommentRestoreEvent";
	}
	
}
