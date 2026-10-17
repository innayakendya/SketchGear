<?php
/**
 * Tests for SketchGear
 */

use PHPUnit\Framework\TestCase;
use Sketchgear\Sketchgear;

class SketchgearTest extends TestCase {
    private Sketchgear $instance;

    protected function setUp(): void {
        $this->instance = new Sketchgear(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketchgear::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
