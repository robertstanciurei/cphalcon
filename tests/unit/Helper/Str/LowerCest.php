<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Helper\Str;

use Phalcon\Helper\Str;
use UnitTester;

/**
 * Class LowerCest
 */
class LowerCest
{
    /**
     * Tests Phalcon\Helper\Str :: lower()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-04-06
     */
    public function textLower(UnitTester $I)
    {
        $I->wantToTest('Text - lower()');
        $expected = 'hello';
        $actual   = Str::lower('hello');
        $I->assertEquals($expected, $actual);

        $expected = 'hello';
        $actual   = Str::lower('HELLO');
        $I->assertEquals($expected, $actual);

        $expected = '1234';
        $actual   = Str::lower('1234');
        $I->assertEquals($expected, $actual);
    }

    /**
     * Tests Phalcon\Helper\Str :: lower() - multi-bytes encoding
     *
     * @param UnitTester $I
     *
     * @author Stanislav Kiryukhin <korsar.zn@gmail.com>
     * @since  2015-05-06
     */
    public function textLowerMultiBytesEncoding(UnitTester $I)
    {
        $I->wantToTest('Text - lower() - multi byte encoding');
        $expected = 'привет мир!';
        $actual   = Str::lower('привет мир!');
        $I->assertEquals($expected, $actual);

        $expected = 'привет мир!';
        $actual   = Str::lower('ПриВЕт Мир!');
        $I->assertEquals($expected, $actual);

        $expected = 'привет мир!';
        $actual   = Str::lower('ПРИВЕТ МИР!');
        $I->assertEquals($expected, $actual);


        $expected = 'männer';
        $actual   = Str::lower('männer');
        $I->assertEquals($expected, $actual);

        $expected = 'männer';
        $actual   = Str::lower('mÄnnER');
        $I->assertEquals($expected, $actual);

        $expected = 'männer';
        $actual   = Str::lower('MÄNNER');
        $I->assertEquals($expected, $actual);
    }
}
