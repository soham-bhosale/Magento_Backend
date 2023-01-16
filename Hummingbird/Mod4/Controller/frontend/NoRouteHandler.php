<?php

namespace Hummingbird\Mod4\Controller\frontend;
use Psr\Log\LoggerInterface;

class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    protected $logger;
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        // $requestPath = trim($request->getPathInfo(), '/');
        $request->setModuleName('contact');
        return true;
    }
}