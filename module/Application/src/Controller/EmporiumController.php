<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EmporiumController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout('layout/layout');
        return new ViewModel();
    }
}
