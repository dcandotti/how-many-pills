<?php
namespace howmanypills;

class Today
	extends Date
{
	public function __construct ()
	{
		parent::__construct(
			intval(date("j")),
			intval(date("n")),
			intval(date("Y"))
		);
	}
}