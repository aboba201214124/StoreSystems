<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ProductCest
{
    public function _before(AcceptanceTester $I)
    {
        $I -> amOnPage('/index.php');
    }

    // tests
    public function tryaddproduct(AcceptanceTester $I)
    {
        $I -> click("#addproduct");
        $I -> fillField("name", 'Баклажан');
        $I -> fillField("price", '100');
        $I -> click("submit");
        $I -> canSee('Баклажан');
    }

    public function TryEditProduct(AcceptanceTester $I)
    {
        $I -> click("#editproduct");
        $I -> fillField("name", 'Бананы');
        $I -> fillField("price", '500');
        $I -> click("submit");
        $I -> canSee('500');
    }
    public function TryDeleteProduct(AcceptanceTester $I)
    {
        $I -> click("#deleteproduct");
        $I -> dontSee('Бананы');
    }
}

