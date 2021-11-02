<?php

namespace Minime\Annotations;

use Minime\Annotations\Fixtures\AnnotationsFixture;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

/**
 * BaseTest
 *
 */
abstract class BaseTest extends TestCase
{
    protected $fixture;

    protected $parser;

    public function setUp(): void
    {
        $this->fixture = new AnnotationsFixture;
    }

    protected function getDocblock($fixture)
    {
        $reflection = new ReflectionProperty($this->fixture, $fixture);

        return $reflection->getDocComment();
    }

    protected function getFixture($fixture)
    {
        return $this->parser->parse($this->getDocblock($fixture));
    }
}
