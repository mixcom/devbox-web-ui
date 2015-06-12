<?php

namespace Devbox\WebUI;

use Symfony\Component\Finder\SplFileInfo;

/**
 * Represent a local site
 */
class Site
{

    /**
     * The real directory this site represents
     *
     * @var SplFileInfo
     */
    protected $directory;

    /**
     * @param SplFileInfo $directory
     */
    public function __construct(SplFileInfo $directory)
    {
        $this->directory = $directory;
    }

    /**
     * The the name of this site
     *
     * @return string
     */
    public function getName()
    {
        return ucfirst($this->directory->getFilename());
    }

    /**
     * Returns the link to the site locally
     *
     * @return string
     */
    public function getLink()
    {
        return 'http://' . $this->directory->getFilename() . '.192.168.33.11.xip.io';
    }

    /**
     * Returns the folder where this site is located
     *
     * @return string
     */
    public function getFolder()
    {
        return $this->directory->getFilename();
    }
}