<?php

/**
 *
 * Simple password manager written in PHP with Bootstrap and PDO database connections
 *
 *  File name: FileCommentUnitTest.php
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
 * Unit test class for the FileComment sniff.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

namespace PHP_CodeSniffer\Standards\PEAR\Tests\Commenting;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

class FileCommentUnitTest extends AbstractSniffUnitTest
{


    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    public function getErrorList($testFile='FileCommentUnitTest.inc')
    {
        switch ($testFile) {
        case 'FileCommentUnitTest.1.inc':
            return [
                21 => 1,
                23 => 2,
                24 => 1,
                26 => 1,
                28 => 1,
                29 => 1,
                30 => 1,
                31 => 1,
                32 => 2,
                33 => 1,
                34 => 1,
                35 => 1,
                40 => 2,
                41 => 2,
                43 => 1,
            ];

        case 'FileCommentUnitTest.2.inc':
            return [1 => 1];

        case 'FileCommentUnitTest.3.inc':
            return [1 => 1];

        default:
            return [];
        }//end switch

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    public function getWarningList($testFile='FileCommentUnitTest.inc')
    {
        switch ($testFile) {
        case 'FileCommentUnitTest.1.inc':
            return [
                29 => 1,
                30 => 1,
                34 => 1,
                43 => 1,
            ];

        default:
            return [];
        }//end switch

    }//end getWarningList()


}//end class
