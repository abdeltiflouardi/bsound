<?php

class Application_Model_AddVideoForm extends Zend_Form
{
    public function init(){
        $this->setMethod("post");

        $video = $this->createElement('text', 'video');
        $video  ->setRequired(true)
                ->setLabel("Video");

        $thumb = $this->createElement('text', 'thumb');
        $thumb->setLabel("Thumb")
                ->setRequired(true);

        // Ajout des éléments au formulaire
        $this->addElement($video)
            ->addElement($thumb)
            ->addElement('submit', 'add', array('label' => 'add'));
            
    }

}

