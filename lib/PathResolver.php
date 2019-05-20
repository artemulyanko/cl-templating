<?php
declare(strict_types = 1);

namespace ClTemplating;

class PathResolver
{
    /**
     * @var string[]
     */
    private $paths;

    /**
     * PathResolver constructor.
     * @param array $paths
     */
    public function __construct(array $paths)
    {
        $this->paths = $paths;
    }

    /**
     * @param string $location
     * @return string
     * @throws PathNotFoundException
     */
    public function resolve(string $location): string
    {
        $tplPath = null;

        foreach ($this->paths as $path) {
            if ($tryPath = realpath($path . '/' . $location)) {
                $tplPath = $tryPath;
                break;
            }
        }

        if ($tplPath === null) {
            throw new PathNotFoundException("Cannot locate file: $location");
        }

        return $tplPath;
    }
}
