<?php

/**
 *
 * Simple password manager written in PHP with Bootstrap and PDO database connections
 *
 *  File name: LowercaseDeclarationSniff.php
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
 * Ensures all control structure keywords are lowercase.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

namespace PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

class LowercaseDeclarationSniff implements Sniff
{


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return [
            T_IF,
            T_ELSE,
            T_ELSEIF,
            T_FOREACH,
            T_FOR,
            T_DO,
            T_SWITCH,
            T_WHILE,
            T_TRY,
            T_CATCH,
            T_MATCH,
        ];

    }//end register()


    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param File $phpcsFile                        The file being scanned.
     * @param int  $stackPtr                         The position of the current token in
     *                                               the stack passed in $tokens.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        $content   = $tokens[$stackPtr]['content'];
        $contentLc = strtolower($content);
        if ($content !== $contentLc) {
            $error = '%s keyword must be lowercase; expected "%s" but found "%s"';
            $data  = [
                strtoupper($content),
                $contentLc,
                $content,
            ];

            $fix = $phpcsFile->addFixableError($error, $stackPtr, 'FoundUppercase', $data);
            if ($fix === true) {
                $phpcsFile->fixer->replaceToken($stackPtr, $contentLc);
            }
        }

    }//end process()


}//end class
