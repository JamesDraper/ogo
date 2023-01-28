<?php
declare(strict_types=1);

namespace Test;

use Ogo\Stream;

use PHPUnit\Framework\TestCase;

use InvalidArgumentException;

use function fclose;
use function fopen;

final class StreamTest extends TestCase
{
    private const PATH = __DIR__ . '/../stream';

    /**
     * @test
     */
    public function it_should_fail_if_not_constructed_with_a_resource(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Stream(123);
    }

    /**
     * @test
     */
    public function it_should_fail_if_a_resource_is_closed(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $resource = fopen(self::PATH, 'w+');
        fclose($resource);

        new Stream($resource);
    }
}
