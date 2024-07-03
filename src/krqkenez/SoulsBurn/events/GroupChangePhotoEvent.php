<?php

namespace krqkenez\SoulsBurn\events;

final class GroupChangePhotoEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "GroupChangePhotoEvent";
	}
	
}
