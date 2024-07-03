<?php

namespace krqkenez\SoulsBurn\events;

final class PhotoCommentEditEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "PhotoCommentEditEvent";
	}
	
}
