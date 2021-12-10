<?php
use howmanypills\DDMMYYYY;

/**
 * @test
 */
function theDayOfMyBirthdayIsSix ()
{
	return (new DDMMYYYY("06/12/1982"))->day() === 6;
}

/**
 * @test
 */
function theMonthOfMyBirthdayIsTwelve ()
{
	return (new DDMMYYYY("06/12/1982"))->month() === 12;
}

/**
 * @test
 */
function theYearOfMyBirthdayIsOneThousandNineHundredAndEightyTwo ()
{
	return (new DDMMYYYY("06/12/1982"))->year() === 1982;
}