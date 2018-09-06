<?php

class AppCest
{
    // tests
    public function appTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click(['id' => 'button']);
        $I->see('Hello World');
    }
}
