<?php

/**
 * User: jpinkney
 * Date: 9/15/15
 * Time: 2:15 PM
 */

namespace DariusIII\TVMaze;

/**
 * This is the file that you are going to include in each of your new projects
 */

/* - Enable these when desired and pass options through __construct
use DariusIII\TVMaze\TVProduction;
use DariusIII\TVMaze\TVShow;
use DariusIII\TVMaze\Actor;
use DariusIII\TVMaze\Character;
use DariusIII\TVMaze\Crew;
use DariusIII\TVMaze\Episode;
use DariusIII\TVMaze\AKA;
*/

/**
 * Class Client
 *
 * @package DariusIII\TVMaze
 */
class Client
{
	/**
	 * @var TVMaze
	 */
	public $TVMaze;

	public function __construct()
	{
		$this->TVMaze = new TVMaze();
	}
}
