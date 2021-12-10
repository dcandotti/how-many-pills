<?php
use howmanypills\Today;

/**
 * @test
 */
function thereShouldBeZeroDaysBetweenADateAndItself ()
{
	return (new Today())->daysBetween(new Today()) === 0;
}