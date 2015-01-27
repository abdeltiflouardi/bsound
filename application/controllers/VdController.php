<?php

class VdController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function addAction()
    {
        // action body
        $request = $this->getRequest();
        $form = new Application_Model_AddVideoForm();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                //$form->getValues();
                
                return $this->_helper->redirector('index');
            }
        }

        $this->view->videoForm = $form;
        unset ($videoForm);
    }


}



