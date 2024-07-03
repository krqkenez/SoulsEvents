<?php

namespace krqkenez\SoulsBurn\events;

final class DonutMoneyWithdrawEvent extends VkEvent
{

	public function __construct(protected array $data)
	{
		$this->name = "DonutMoneyWithdrawEvent";
	}
	
}
