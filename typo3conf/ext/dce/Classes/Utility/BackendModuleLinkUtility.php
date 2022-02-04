<?php

declare(strict_types = 1);

namespace T3\Dce\Utility;

use TYPO3\CMS\Backend\Routing\Exception\RouteNotFoundException;
use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class BackendModuleLinkUtility
{
    /**
     * Returns the URL to a given module.
     *
     * @param string $moduleName    Name of the module
     * @param array  $urlParameters URL parameters that should be added as key value pairs
     *
     * @return string Calculated URL
     */
    public static function getModuleUrl(string $moduleName, array $urlParameters = []): string
    {
        $uriBuilder = GeneralUtility::makeInstance(UriBuilder::class);
        try {
            $uri = $uriBuilder->buildUriFromRoute($moduleName, $urlParameters);
        } catch (RouteNotFoundException $e) {
            $uri = $uriBuilder->buildUriFromRoutePath($moduleName, $urlParameters);
        }

        return (string)$uri;
    }
}
