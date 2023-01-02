<?php

/**
 *
 * Simple password manager written in PHP with Bootstrap and PDO database connections
 *
 *  File name: WithNode.php
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

/**
 * Represents a nested "with" scope.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WithNode extends Node
{

	public function __construct(Node $body, ?Node $variables, bool $only, int $lineno, string $tag = null)
	{

		$nodes = ['body' => $body];
		if (null !== $variables) {
			$nodes['variables'] = $variables;
		}

		parent::__construct($nodes, ['only' => $only], $lineno, $tag);
	}

	public function compile(Compiler $compiler): void
	{

		$compiler->addDebugInfo($this);

		$parentContextName = $compiler->getVarName();

		$compiler->write(sprintf("\$%s = \$context;\n", $parentContextName));

		if ($this->hasNode('variables')) {
			$node = $this->getNode('variables');
			$varsName = $compiler->getVarName();
			$compiler
				->write(sprintf('$%s = ', $varsName))
				->subcompile($node)
				->raw(";\n")
				->write(sprintf("if (!twig_test_iterable(\$%s)) {\n", $varsName))
				->indent()
				->write("throw new RuntimeError('Variables passed to the \"with\" tag must be a hash.', ")
				->repr($node->getTemplateLine())
				->raw(", \$this->getSourceContext());\n")
				->outdent()
				->write("}\n")
				->write(sprintf("\$%s = twig_to_array(\$%s);\n", $varsName, $varsName));

			if ($this->getAttribute('only')) {
				$compiler->write("\$context = [];\n");
			}

			$compiler->write(sprintf("\$context = \$this->env->mergeGlobals(array_merge(\$context, \$%s));\n", $varsName));
		}

		$compiler
			->subcompile($this->getNode('body'))
			->write(sprintf("\$context = \$%s;\n", $parentContextName));
	}

}
