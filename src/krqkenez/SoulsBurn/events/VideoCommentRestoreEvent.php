<?php

namespace krqkenez\SoulsBurn\events;

final class VideoCommentRestoreEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "VideoCommentRestoreEvent";
	}
	
}
