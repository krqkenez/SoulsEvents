<?php

namespace krqkenez\SoulsBurn\events;

final class AudioNewEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "AudioNewEvent";
	}
	
}
