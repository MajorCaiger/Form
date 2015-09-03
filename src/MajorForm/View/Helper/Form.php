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
    public function __invoke(\Zend\Form\Form $form)
    {
        if ($form !== null) {
            return $this->render($form);
        }

        return $this;
    }

    public function render(\Zend\Form\Form $form)
    {
        // Finish this off
    }
}
