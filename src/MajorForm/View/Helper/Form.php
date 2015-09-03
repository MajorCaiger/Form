<?php

/**
 * Form
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
namespace MajorTable\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;

/**
 * Form
 *
 * @author Rob Caiger <rob@clocal.co.uk>
 */
class Form extends AbstractHelper
{
    /**
     * @param \Zend\Form\Form $form
     * @return $this|string
     */
    public function __invoke(\Zend\Form\Form $form)
    {
        if ($form !== null) {
            return $this->render($form);
        }

        return $this;
    }

    /**
     * @param \Zend\Form\Form $form
     * @return string
     */
    public function render(\Zend\Form\Form $form)
    {
        return $this->getView()->render('form/form', ['form' => $form]);
    }
}
