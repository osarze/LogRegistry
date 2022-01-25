<?php

namespace Osarz\LogRegistry\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Registry;

class Example extends Action
{
    protected $title;
    protected $registry;

    public function __construct(Context $context, Registry $registry)
    {
        parent::__construct($context);
        $this->registry = $registry;
    }

    public function execute()
    {
        $this->registry->register('emmanuel', 'emmanuel value');

        echo $this->setTitle('This is an example controller to test the plugin');
        echo $this->getTitle();
    }

    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
