<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Unit\Autoload;

use UnitTester;

class UnregisterCest
{
    /**
     * Tests Phalcon\Autoload\Loader:: unregister()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function loaderUnregister(UnitTester $I)
    {
        $I->wantToTest('Autoload\Loader- unregister()');

        $I->skipTest('Need implementation');
    }
}
