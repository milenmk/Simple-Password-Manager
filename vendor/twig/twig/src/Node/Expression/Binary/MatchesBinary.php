<?php

/**
 *
 * Simple password manager written in PHP with Bootstrap and PDO database connections
 *
 *  File name: MatchesBinary.php
 *  Last Modified: 30.12.22 г., 5:53 ч.
 *
 *  @link          https://blacktiehost.com
 *  @since         1.0.0
 *  @version       2.1.0
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

namespace Twig\Node\Expression\Binary;

use Twig\Compiler;

class MatchesBinary extends AbstractBinary
{

	public function compile(Compiler $compiler): void
	{

		$compiler
			->raw('twig_matches(')
			->subcompile($this->getNode('right'))
			->raw(', ')
			->subcompile($this->getNode('left'))
			->raw(')');
	}

	public function operator(Compiler $compiler): Compiler
	{

		return $compiler->raw('');
	}

}
