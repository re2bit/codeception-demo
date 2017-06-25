<?php
namespace AppBundle;


class DefaultControllerTest extends \Codeception\Test\Unit
{
    /**
     * @var \FunctionalTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testIndexPage()
    {
        $this->tester->amOnPage('/');
        $this->tester->see('NOOOOOOOOO How to create your first page in Symfony');
    }
}