<?php
use AppBundle\Service\BlogService;

class BlogServiceTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testTestBlogService()
    {
        $this->tester->amGoingTo('Test Blog Service');
        $sut = new BlogService();
        $this->tester->assertNotEmpty($sut->getBlogs());
        $this->tester->assertArrayHasKey('name', $sut->getBlogs());
    }
}