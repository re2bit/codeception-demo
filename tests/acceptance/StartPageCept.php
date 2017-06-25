<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->see('Symfony');
$I->wait(3);
$I->see('Dies ist ein Test');
