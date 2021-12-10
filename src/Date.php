<?php
namespace howmanypills;

class Date
{
	private $day;
	private $month;
	private $year;

	public function __construct (int $day, int $month, int $year)
	{
		$this->day = $day;
		$this->month = $month;
		$this->year = $year;
	}

	public function day (): int
	{
		return $this->day;
	}

	public function month (): int
	{
		return $this->month;
	}

	public function year (): int
	{
		return $this->year;
	}

	public function daysBetween (Date $date): int
	{
		return intval((strtotime("{$this->day}-{$this->month}-{$this->year}")-strtotime("{$date->day}-{$date->month}-{$date->year}"))/86400);
	}
}