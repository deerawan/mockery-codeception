<?php

class Husband
{
	public function __construct(Wife $wife)
	{
		$this->wife = $wife;
	}

	public function needKiss()
	{
		$isFrenchKiss = $this->wife->kiss();

		if ($isFrenchKiss) {
			return 'very happy';
		} else {
			return 'just so so';
		}
	}
}