<?php

namespace krqkenez\SoulsBurn\events;

final class PhotoCommentDeleteEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "PhotoCommentDeleteEvent";
	}
	
}
