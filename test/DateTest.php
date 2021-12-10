<?php
use howmanypills\Date;

/**
 * @test
 */
function theDaysBetweenTodayAndYesterdayShouldBeOne ()
{
	return (new Date(6, 12, 1982))->daysBetween(new Date(5, 12, 1982)) == 1;
}

/**
 * @test
 */
function theDaysBetweenTodayAndLastWeekShouldBeSeven ()
{
	return (new Date(6, 12, 1982))->daysBetween(new Date(29, 11, 1982)) == 7;
}

/**
 * @test
 */
function theDaysBetweenTodayAndLastMonthShouldBeThirty ()
{
	return (new Date(6, 12, 1982))->daysBetween(new Date(6, 11, 1982)) == 30;
}

/**
 * @test
 */
function theDaysBetweenTodayAndLastYearShouldBeThreeHundredAndSixtyFive ()
{
	return (new Date(6, 12, 1982))->daysBetween(new Date(6, 12, 1981)) == 365;
}