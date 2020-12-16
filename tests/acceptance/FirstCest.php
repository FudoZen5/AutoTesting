<?php 

namespace App\Tests;

class FirstCest
{
    /**
     * @param \AcceptanceTester $I
     * @throws \Exception
     */
    public function firstLoginTest(\AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Account');
        $I->click(['class' => 'account-link']);
        $I->waitForElement('.login', 3);
        $I->fillField('#login-email', 'fudonakamura00@mail.ru');
        $I->fillField('#login-password','ZTest12345678910');
        $I->click('Login');
        $I->waitForElement('.message', 3);
        $I->see('Invalid login or password.');

    }

    /**
     * @param \AcceptanceTester $I
     * @throws \Exception
     */
    public function secondLoginTest(\AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Account');
        $I->click(['class' => 'account-link']);
        $I->waitForElement('.login', 3);
        $I->fillField('#login-email', 'fudonakamura00@mail.ru');
        $I->fillField('#login-password','zTest12345');
        $I->click('Login');
        $I->waitForElement('.message', 3);
        $I->see('Invalid login or password.');
    }

    /**
     * @param \AcceptanceTester $I
     * @throws \Exception
     */
    public function thirdLoginTest(\AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Account');
        $I->click(['class' => 'account-link']);
        $I->waitForElement('.login', 3);
        $I->fillField('#login-email', 'fudonakamura00@mail.ru');
        $I->fillField('#login-password','ZTest123456');
        $I->click('Login');
        $I->waitForElement('.account-information', 10);
        //$I->waitForElement('.email', 10);
        $I->see('fudonakamura00@mail.ru','.email');
        $I->click(['class' => 'account-logout']);
        $I->waitForElement('.store-messages',10);
        $I->seeElement('.success');
    }
}