<?php

namespace Application\Controller;

use Application\Form\LoginForm;
use Zend\Authentication\AuthenticationServiceInterface;
use Zend\Authentication\Adapter\DbTable\CallbackCheckAdapter;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{
    /**
     * @var AuthenticationServiceInterface
     */
    private $authService;

    public function __construct(AuthenticationServiceInterface $authService)
    {
        $this->authService = $authService;
    }

    public function loginAction()
    {
        if ($this->authService->hasIdentity()) {
            return $this->redirect()->toRoute('emporium');
        }

        $form = new LoginForm();
        $messageError = null;
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            $form->setData($data);
            if ($form->isValid()) {
                $formData = $form->getData();
                /** @var CallbackCheckAdapter $authAdapter */
                $authAdapter = $this->authService->getAdapter();
                $authAdapter->setIdentity($formData['alternate_id']);
                $authAdapter->setCredential($formData['password']);

                $result = $this->authService->authenticate();
                if ($result->isValid()) {
                    return $this->redirect()->toRoute('emporium');
                } else {
                    $messageError = "Login Inválido!";
                }
            }
        }
        $this->layout('layout/login');
        return new ViewModel([
            'form' => $form,
            'messageError' => $messageError
        ]);
    }

    public function logoutAction()
    {
        $this->authService->clearIdentity();
        return $this->redirect()->toRoute('login');
    }
}