<?php
namespace Katas\Tests;

use Katas\GiveAProperName;
use PHPUnit\Framework\TestCase;

class GiveAProperNameTest extends TestCase
{
    /** @test */
    public function pleaseRenameMeOrDeleteMe(): void
    {
        $myObject = new GiveAProperName();
        $this->assertTrue($myObject->giveMeAProperName());
    }
}
