<?php

namespace Taskovich\VkEvents\events;

final class AppPayloadEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "AppPayloadEvent";
	}
	
}
