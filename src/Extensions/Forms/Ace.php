<?php

namespace Liumenggit\Ace\Extensions\Forms;

use Dcat\Admin\Form\Field;

class Ace extends Field
{
    protected $view = 'liumenggit.ace::index';

    protected function prepareInputValue($value)
    {
        return (string)$value;
    }
}
