<?php
namespace howmanypills;

class Shipment
{
	private $date;
	private $pills;
	private $previous;

	public function __construct (Date $date, int $pills, Shipment $previousShipment = null)
	{
		$this->date = $date;
		$this->pills = $pills;
		$this->previous = $previousShipment;
	}

	public function pillsRemaining (): int
	{
		if ($this->previous === null) return $this->pills;

		return $this->pills - $this->date->daysBetween($this->previous->date) + $this->previous->pillsRemaining();
	}
}