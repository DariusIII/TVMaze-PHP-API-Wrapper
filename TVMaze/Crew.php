<?php
/**
 * Creator: jpinkney
 * Date: 9/15/15
 * Time: 2:12 PM
 */

namespace DariusIII\TVMaze;

/**
 * Class Crew
 *
 * @package DariusIII\TVMaze
 */
class Crew {

	/**
	 * @var
	 */
	public $type;

	/**
	 * @param $crew_data
	 */
	public function __construct($crew_data){
		$this->type = isset($crew_data['type']) ? $crew_data['type'] : null;
	}

}
