<?php
declare(strict_types=1);

namespace Ogo;

use InvalidArgumentException;
use function is_resource;

class Stream
{
    /**
     * @var resource
     */
    private $stream;

    /**
     * @param resource $stream
     */
    public function __construct($stream)
    {
        if (!is_resource($stream)) {
            throw new InvalidArgumentException;
        }

        $this->stream = $stream;
    }
}
