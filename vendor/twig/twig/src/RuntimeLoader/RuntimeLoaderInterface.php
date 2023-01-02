<?php

/**
 *
 * Simple password manager written in PHP with Bootstrap and PDO database connections
 *
 *  File name: RuntimeLoaderInterface.php
 *  Last Modified: 31.12.22 г., 22:11 ч.
 *
 *  @link          https://blacktiehost.com
 *  @since         1.0.0
 *  @version       2.2.0
 *  @author        Milen Karaganski <milen@blacktiehost.com>
 *
 *  @license       GPL-3.0+
 *  @license       http://www.gnu.org/licenses/gpl-3.0.txt
 *  @copyright     Copyright (c)  2020 - 2022 blacktiehost.com
 *
 */

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\RuntimeLoader;

/**
 * Creates runtime implementations for Twig elements (filters/functions/tests).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface RuntimeLoaderInterface
{

	/**
	 * Creates the runtime implementation of a Twig element (filter/function/test).
	 *
	 * @return object|null The runtime instance or null if the loader does not know how to create the runtime for this class
	 */
	public function load(string $class);

}
