<?php
namespace howmanypills;

class DDMMYYYY
	extends Date
{
	public function __construct (string $date)
	{
		if (!preg_match('/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/', $date)) throw new Exception("Date does not follow format dd/mm/yyyy: {$date}");
		list($day, $month, $year) = explode('/', $date);
		parent::__construct(intval($day), intval($month), intval($year));
	}
}