<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - WordPress Plugin
 *
 * @license GPLv3
 * @copyright A.Tselegidis (C) 2016
 * @link http://easyappointments.org
 * @since v1.0.0
 * ---------------------------------------------------------------------------- */

namespace EAWP\Core\ValueObjects;

/**
 * Link Information Entity
 *
 * Contains the connection information bewteen Easy!Appointments and WordPress.
 */
class LinkInformation {
    /**
     * Path
     *
     * @var \EAWP\Core\ValueObjects\Path
     */
    protected $path;

    /**
     * Url
     *
     * @var \EAWP\Core\ValueObjects\Url
     */
    protected $url;


    public function __construct(Path $path, Url $url = null) {
        $this->path = $path;
        $this->url = $url;
    }

    public function getPath() {
        return $this->path;
    }

    public function getUrl() {
        return $this->url;
    }
}