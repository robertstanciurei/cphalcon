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

namespace Phalcon\Test\Unit\Validation\Validator\StringLength\Min;

use UnitTester;

class SetAdviceCest
{
    /**
     * Tests Phalcon\Validation\Validator\StringLength\Min :: setAdvice()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-23
     */
    public function validationValidatorStringLengthMinSetAdvice(UnitTester $I)
    {
        $I->wantToTest('Validation\Validator\StringLength\Min - setAdvice()');

        $I->skipTest('Need implementation');
    }
}
