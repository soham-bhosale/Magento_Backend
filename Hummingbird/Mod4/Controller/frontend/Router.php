<?php

namespace Hummingbird\Mod4\Controller\frontend;

use Psr\Log\LoggerInterface;
use \Magento\Framework\Module\Manager;

/**
* Class Router
* @package Humage\Test\Controller\frontend
*/
class Router implements \Magento\Framework\App\RouterInterface
{
    /**
     * @var \Magento\Framework\App\ActionFactory
     */
    protected $actionPath;

    protected $iterations;

    /**
     * Router constructor.
     * @param \Magento\Framework\App\ActionFactory $actionFactory
     */

    protected $routerList;
    protected $logger;
    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, LoggerInterface $logger)
    {
        $this->actionPath = $actionFactory;
        $this->logger = $logger;
        $this->iterations = 0;
    }

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @return \Magento\Framework\App\ActionInterface|null
     * Regex to split words by capital case -->  /(?=[A-Z])/
     */
    public function match (\Magento\Framework\App\RequestInterface $request)
    {
        $this->iterations += 1;
        $info = trim($request->getPathInfo(), '/');
        if ($info == "contactuspage.html") {
            $request->setModuleName("contact");
            // $this->logger->info("Contactus.html got request   ".$request->getModuleName()."         Path".$request->getPathInfo());
            return $this->actionPath->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
        }
        $m = preg_split('/(?=[A-Z])/', $info);
        $this->logger->info("In match using custom router  " . $info . "     " . implode("#", $m) . "         " . $this->iterations);

        if (count($m) >= 3 && $this->iterations <= 5) {
            $request->setModuleName(strtolower($m[1]))->setControllerName(strtolower($m[2]))->setActionName(strtolower($m[3]));

            // Uncomment to log router path requests
            $controller = $request->getControllerName();
            $action     = $request->getActionName();
            $this->logger->info("Module->".$request->getModuleName()."      Controller->".$controller."       Action->".$action);
            
            return $this->actionPath->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
        } else {
            $this->logger->info("In match using custom router  " . $info . "     " . implode("#", $m) . "         " . $this->iterations);
            return null;
            // return $this->actionPath->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
        }
    }
}