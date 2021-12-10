<?php
namespace howmanypills;

class Pills
	implements Integer
{
	private $shipment;

	public function __construct (Shipment $lastShipment = null)
	{
		$this->shipment = new Shipment(new Today(), 0, $lastShipment);
	}

	public function intValue (): int
	{
		return $this->shipment->pillsRemaining();
	}
}