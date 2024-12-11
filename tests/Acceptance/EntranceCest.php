<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class EntranceCest
{
    public function _before(AcceptanceTester $I)
    {
        $I -> amOnPage('/index.php');
    }
    public function TryAddEntrance(AcceptanceTester $I)
    {
        $I -> click("#addentrance");
        $I -> selectOption("product","Баклажан");
        $I -> fillField("date", '2024-10-12');
        $I -> fillField("quantity", '100');
        $I -> click("submit");
        $I -> canSee('2024-10-12');
    }
    public function TryDeleteEntrance(AcceptanceTester $I)
    {
        $I -> click("#addentrance");
    }
    public function TryDeleteEntrancde(AcceptanceTester $I)
    {
        $I -> click("#addentrance");
    }
}