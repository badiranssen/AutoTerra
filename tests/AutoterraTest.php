<?php
/**
 * Tests for AutoTerra
 */

use PHPUnit\Framework\TestCase;
use Autoterra\Autoterra;

class AutoterraTest extends TestCase {
    private Autoterra $instance;

    protected function setUp(): void {
        $this->instance = new Autoterra(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autoterra::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
