<?php

/**
 *
 * Simple password manager written in PHP with Bootstrap and PDO database connections
 *
 *  File name: MethodScopeSniff.php
 *  Last Modified: 18.06.22 г., 10:21 ч.
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

/**
 * Verifies that class methods have scope modifiers.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

namespace PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\AbstractScopeSniff;
use PHP_CodeSniffer\Util\Tokens;

class MethodScopeSniff extends AbstractScopeSniff
{


    /**
     * Constructs a Squiz_Sniffs_Scope_MethodScopeSniff.
     */
    public function __construct()
    {
        parent::__construct(Tokens::$ooScopeTokens, [T_FUNCTION]);

    }//end __construct()


    /**
     * Processes the function tokens within the class.
     *
     * @param File $phpcsFile The file where this token was found.
     * @param int  $stackPtr  The position where the token was found.
     * @param int  $currScope The current scope opener token.
     *
     * @return void
     */
    protected function processTokenWithinScope(File $phpcsFile, $stackPtr, $currScope)
    {
        $tokens = $phpcsFile->getTokens();

        // Determine if this is a function which needs to be examined.
        $conditions = $tokens[$stackPtr]['conditions'];
        end($conditions);
        $deepestScope = key($conditions);
        if ($deepestScope !== $currScope) {
            return;
        }

        $methodName = $phpcsFile->getDeclarationName($stackPtr);
        if ($methodName === null) {
            // Ignore closures.
            return;
        }

        $properties = $phpcsFile->getMethodProperties($stackPtr);
        if ($properties['scope_specified'] === false) {
            $error = 'Visibility must be declared on method "%s"';
            $data  = [$methodName];
            $phpcsFile->addError($error, $stackPtr, 'Missing', $data);
        }

    }//end processTokenWithinScope()


    /**
     * Processes a token that is found within the scope that this test is
     * listening to.
     *
     * @param File $phpcsFile                        The file where this token was found.
     * @param int  $stackPtr                         The position in the stack where this
     *                                               token was found.
     *
     * @return void
     */
    protected function processTokenOutsideScope(File $phpcsFile, $stackPtr)
    {

    }//end processTokenOutsideScope()


}//end class
