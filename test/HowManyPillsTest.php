<?php
use howmanypills\Pills;
use howmanypills\Shipment;
use howmanypills\Today;

/**
 * @test
 */
function ifThereIsNoDataThereShouldBeNoPills ()
{
	return (new Pills())->intValue() === 0;
}

/**
 * @test
 */
function ifIOnlyReceivedOnePillTodayThenIHaveOnePill ()
{
	return (new Pills(new Shipment(new Today(), 1)))->intValue() === 1;
}

/**
 * @test
 */
function whateverAmountOfPillsThatIReceivedTodayShouldBeLeft ()
{
	$pills = 15;
	return (new Pills(new Shipment(new Today(), $pills)))->intValue() === $pills;
}