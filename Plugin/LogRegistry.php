<?php

namespace Osarz\LogRegistry\Plugin;

use Magento\Framework\Registry;
use Psr\Log\LoggerInterface;

class LogRegistry
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function afterRegister(Registry $subject, $title)
    {
        $this->logger->debug("Message logged beacuse \Magento\Framework\Registry::register() was invoke");
    }

}
