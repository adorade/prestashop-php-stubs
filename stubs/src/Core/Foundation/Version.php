<?php

namespace PrestaShop\PrestaShop\Core\Foundation;

/**
 * Class responsible of managing the right version of Shop
 * for every internal/external services.
 */
class Version
{
    /**
     * Initialize version data.
     *
     * @param string $version Version
     * @param string $majorVersionString Legacy major version in string format (eg. "1.7")
     * @param int $majorVersion Major version
     * @param int $minorVersion [default=0] Minor version
     * @param int $patchVersion [default=0] Patch version
     * @param string $preReleaseVersion [default=''] Pre release version (eg. "dev", "beta"...)
     * @param string $buildMetadata [default=''] Build metadata (eg. build number)
     */
    public function __construct($version, $majorVersionString, $majorVersion, $minorVersion = 0, $patchVersion = 0, $preReleaseVersion = '', $buildMetadata = '')
    {
    }
    /**
     * Builds an instance form a version string
     *
     * @param string $version
     *
     * @return self
     *
     * @throws InvalidVersionException If the version is invalid
     */
    public static function buildFromString($version)
    {
    }
    /**
     * Returns the current version in legacy format (eg. "1.7.6.0")
     *
     * @param bool $full [default=false] If true, include pre-release and build metadata (eg. "1.7.6.0-dev+build.1")
     *
     * @return string
     */
    public function getVersion($full = false)
    {
    }
    /**
     * Returns SemVer compliant version (eg. "7.6.0")
     *
     * @return string
     */
    public function getSemVersion()
    {
    }
    /**
     * Returns the current major version as a string.
     *
     * @return string For example "1.7"
     */
    public function getMajorVersionString()
    {
    }
    /**
     * Returns the current major version as an integer.
     *
     * @return int For example 17
     */
    public function getMajorVersion()
    {
    }
    /**
     * Returns the current minor version.
     *
     * @return int
     */
    public function getMinorVersion()
    {
    }
    /**
     * Returns the current patch version.
     *
     * @return int
     */
    public function getPatchVersion()
    {
    }
    /**
     * Returns the current pre release version (if any)
     *
     * @return string
     */
    public function getPreReleaseVersion()
    {
    }
    /**
     * Returns the current build metadata (if any)
     *
     * @return string
     */
    public function getBuildMetadata()
    {
    }
    /**
     * Returns if the current version is greater than the provided version.
     *
     * @param string $version Must be a valid version string, for example "1.7.4.0"
     *
     * @return bool
     *
     * @throws InvalidVersionException If the provided version is invalid
     */
    public function isGreaterThan($version)
    {
    }
    /**
     * Returns if the current version is greater than or equal to the provided version.
     *
     * @param string $version Must be a valid version string, for example "1.7.4.0"
     *
     * @return bool
     *
     * @throws InvalidVersionException If the provided version is invalid
     */
    public function isGreaterThanOrEqualTo($version)
    {
    }
    /**
     * Returns if the current version is less than the provided version.
     *
     * @param string $version Must be a valid version string, for example "1.7.4.0"
     *
     * @return bool
     *
     * @throws InvalidVersionException If the provided version is invalid
     */
    public function isLessThan($version)
    {
    }
    /**
     * Returns if the current version is less than or equal to the provided version.
     *
     * @param string $version Must be a valid version string, for example "1.7.4.0"
     *
     * @return bool
     *
     * @throws InvalidVersionException If the provided version is invalid
     */
    public function isLessThanOrEqualTo($version)
    {
    }
    /**
     * Returns if the current version is equal to the provided version.
     *
     * @param string $version Must be a valid version string, for example "1.7.4.0"
     *
     * @return bool
     *
     * @throws InvalidVersionException If the provided version is invalid
     */
    public function isEqualTo($version)
    {
    }
    /**
     * Returns if the current version is not equal to the provided version.
     *
     * @param string $version Must be a valid version string, for example "1.7.4.0"
     *
     * @return bool
     *
     * @throws InvalidVersionException If the provided version is invalid
     */
    public function isNotEqualTo($version)
    {
    }
    /**
     * Returns the semantic version string
     */
    public function __toString()
    {
    }
}
