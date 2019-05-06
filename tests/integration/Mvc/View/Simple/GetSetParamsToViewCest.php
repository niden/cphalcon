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

namespace Phalcon\Test\Integration\Mvc\View\Simple;

use IntegrationTester;
use Phalcon\Mvc\View\Simple;

/**
 * Class GetSetParamsToViewCest
 */
class GetSetParamsToViewCest
{
    /**
     * Tests Phalcon\Mvc\View\Simple :: getParamsToView()/setParamsToView()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcViewSimpleGetSetParamsToView(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\View\Simple - getParamsToView()/setParamsToView()');

        $view = new Simple();

        $expected = [
            'foo2' => 'bar2',
            'foo3' => 'bar3',
        ];

        $I->assertEquals(
            $view,
            $view->setVars($expected)
        );
        $I->assertEquals(
            $view,
            $view->setParamToView('foo4', 'bar4')
        );

        $expectedParamsToView = [
            'foo2' => 'bar2',
            'foo3' => 'bar3',
            'foo4' => 'bar4',
        ];

        $I->assertEquals(
            $expectedParamsToView,
            $view->getParamsToView()
        );
    }
}
