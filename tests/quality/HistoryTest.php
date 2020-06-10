<?php
namespace tests\quality;

use extas\components\quality\users\UserHistory;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

/**
 * Class UserTest
 *
 * @package tests\quality
 * @author jeyroik <jeyroik@gmail.com>
 */
class HistoryTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $env = Dotenv::create(getcwd() . '/tests/');
        $env->load();
    }

    public function testBasicMethods()
    {
        $time = time();
        $history = new UserHistory();
        $history->setMonth(202006)->setTimestamp($time);

        $this->assertEquals(202006 + $time, $history->getMonth() + $history->getTimestamp());
    }
}
