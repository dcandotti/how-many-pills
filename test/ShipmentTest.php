<?php
use howmanypills\Shipment;
use howmanypills\Date;

/**
 * @test
 */
function pillsRemainingTest ()
{
	return (new Shipment(new Date(15, 12, 2021), 20, new Shipment(new Date(1, 12, 2021), 20)))->pillsRemaining() === 26;
}

/**
 * @test
 */
function chainedPillsRemainingTest1 ()
{
	return (new Shipment(new Date(2, 12, 2021), 10, new Shipment(new Date(1, 12, 2021), 10)))->pillsRemaining() === 19;
}

/**
 * @test
 */
function chainedPillsRemainingTest2 ()
{
	return (new Shipment(new Date(3, 12, 2021), 10, new Shipment(new Date(2, 12, 2021), 10, new Shipment(new Date(1, 12, 2021), 10))))->pillsRemaining() === 28;
}