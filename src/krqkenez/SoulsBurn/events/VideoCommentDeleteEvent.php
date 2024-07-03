<?php

namespace krqkenez\SoulsBurn\events;

final class VideoCommentDeleteEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "VideoCommentDeleteEvent";
	}
	
}
