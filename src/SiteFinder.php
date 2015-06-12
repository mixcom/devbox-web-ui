<?php

namespace Devbox\WebUI;

use Symfony\Component\Finder\Finder;

/**
 * Class to find sites and configurations in a certain path
 */
class SiteFinder
{

    /**
     * @var Finder
     */
    protected $finder;

    /**
     * @param Finder $finder
     */
    public function __construct(Finder $finder)
    {
        $this->finder = $finder;
    }

    /**
     * Find all sites in a certain path
     *
     * @param string $path The path to find sites in
     * @return Site[] List of sites in the path
     */
    public function find($path)
    {
        $result = array();

        $files = $this->finder->depth(0)->directories()->in($path);

        foreach ($files as $file) {
            $result[] = new Site($file);
        }

        return $result;
    }
}
