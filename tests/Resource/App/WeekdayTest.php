<?php

namespace HalniqueTest\BearSunday\Resource\App;

use BEAR\Package\AppInjector;
use BEAR\Resource\ResourceInterface;
use PHPUnit\Framework\TestCase;

class WeekdayTest extends TestCase
{
    /**
     * @var ResourceInterface
     */
    private $resource;

    protected function setUp(): void
    {
        $this->resource = (new AppInjector('Halnique\BearSunday', 'app'))->getInstance(ResourceInterface::class);
    }

    public function testOnGet()
    {
        $resourceObject = $this->resource->get('app://self/weekday', [
            'year' => 2019,
            'month' => 7,
            'day' => 6,
        ]);
        $this->assertSame(200, $resourceObject->code);
        $this->assertSame('Sat', $resourceObject->body['weekday']);
    }
}
