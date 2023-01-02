<?php

/**
 *
 * Simple password manager written in PHP with Bootstrap and PDO database connections
 *
 *  File name: IncludeTokenParser.php
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
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\TokenParser;

use Twig\Node\IncludeNode;
use Twig\Node\Node;
use Twig\Token;

/**
 * Includes a template.
 *
 *   {% include 'header.html' %}
 *     Body
 *   {% include 'footer.html' %}
 *
 * @internal
 */
class IncludeTokenParser extends AbstractTokenParser
{

	public function parse(Token $token): Node
	{

		$expr = $this->parser->getExpressionParser()->parseExpression();

		[$variables, $only, $ignoreMissing] = $this->parseArguments();

		return new IncludeNode($expr, $variables, $only, $ignoreMissing, $token->getLine(), $this->getTag());
	}

	protected function parseArguments()
	{

		$stream = $this->parser->getStream();

		$ignoreMissing = false;
		if ($stream->nextIf(/* Token::NAME_TYPE */ 5, 'ignore')) {
			$stream->expect(/* Token::NAME_TYPE */ 5, 'missing');

			$ignoreMissing = true;
		}

		$variables = null;
		if ($stream->nextIf(/* Token::NAME_TYPE */ 5, 'with')) {
			$variables = $this->parser->getExpressionParser()->parseExpression();
		}

		$only = false;
		if ($stream->nextIf(/* Token::NAME_TYPE */ 5, 'only')) {
			$only = true;
		}

		$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

		return [$variables, $only, $ignoreMissing];
	}

	public function getTag(): string
	{

		return 'include';
	}

}
