<?php

namespace RectorPrefix20211109\TYPO3\CMS\Core\Http;

use RectorPrefix20211109\Psr\Http\Message\ResponseInterface;
if (\class_exists('TYPO3\\CMS\\Core\\Http\\ResponseFactoryInterface')) {
    return;
}
interface ResponseFactoryInterface
{
    /**
     * @param string $html
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createHtmlResponse($html);
    /**
     * @param string $json
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createJsonResponse($json);
}
