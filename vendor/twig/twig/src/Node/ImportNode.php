<?php

/**
 *
 * Simple password manager written in PHP with Bootstrap and PDO database connections
 *
 *  File name: ImportNode.php
 *  Last Modified: 31.12.22 г., 22:09 ч.
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

namespace Twig\Node;

use Twig\Compiler;
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Expression\NameExpression;

/**
 * Represents an import node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ImportNode extends Node
{

	public function __construct(AbstractExpression $expr, AbstractExpression $var, int $lineno, string $tag = null, bool $global = true)
	{

		parent::__construct(['expr' => $expr, 'var' => $var], ['global' => $global], $lineno, $tag);
	}

	public function compile(Compiler $compiler): void
	{

		$compiler
			->addDebugInfo($this)
			->write('$macros[')
			->repr($this->getNode('var')->getAttribute('name'))
			->raw('] = ');

		if ($this->getAttribute('global')) {
			$compiler
				->raw('$this->macros[')
				->repr($this->getNode('var')->getAttribute('name'))
				->raw('] = ');
		}

		if ($this->getNode('expr') instanceof NameExpression && '_self' === $this->getNode('expr')->getAttribute('name')) {
			$compiler->raw('$this');
		} else {
			$compiler
				->raw('$this->loadTemplate(')
				->subcompile($this->getNode('expr'))
				->raw(', ')
				->repr($this->getTemplateName())
				->raw(', ')
				->repr($this->getTemplateLine())
				->raw(')->unwrap()');
		}

		$compiler->raw(";\n");
	}

}
