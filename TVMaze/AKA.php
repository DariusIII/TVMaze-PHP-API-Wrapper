<?php

namespace DariusIII\TVMaze;

Class AKA
{
	public string $akas;

	/**
	 * @param $aka_data
	 */
	public function __construct($aka_data)
	{
		$this->akas = '';
		
		if(!empty($aka_data['name'])) {
			$this->akas = $aka_data['name'];
		}
	}
}
