<?php


/**
 * Class WorkspaceControllerCest
 */
class WorkspaceControllerCest
{
    // ...
    public function testShowAction(FunctionalTester $I)
    {
        $I->wantTo('too see inside the \"Writing\" workspace');
        $I->amOnPage('/workspace/writing');
        $I->see('Symfony book');
    }
}
