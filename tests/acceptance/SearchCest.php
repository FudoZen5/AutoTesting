<?php 

namespace App\Tests;

use AcceptanceTester;

class SearchCest
{
    /**
     * @param AcceptanceTester $I
     * @throws \Exception
     */
    public function firstTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('#search', 'QWERTY');
        $I->waitForElement('.products',5);
        //$I->wait(1);
        $I->see('Search results for \'QWERTY\'','.breadcrumbs');
        //$I->dontSeeElement('.products');
    }

    /**
     * @param AcceptanceTester $I
     * @throws \Exception
     */
    public function secondTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('#search', 'Hair');
        $I->waitForElement('.products',5);
        $I->seeElement('.products');
    }
}
