<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Dispatcher;

use UnitTester;

class GetReturnedValueCest
{
    /**
     * Tests Phalcon\Dispatcher :: getReturnedValue()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function dispatcherGetReturnedValue(UnitTester $I)
    {
        $I->wantToTest('Dispatcher - getReturnedValue()');

        $I->skipTest('Need implementation');
    }
}
