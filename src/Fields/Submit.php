<?php
namespace TypeRocket\Fields;

use \TypeRocket\Html as Html;

class Submit extends Field
{

    public function init()
    {
        $this->setType( 'submit' );
    }

    public function getString()
    {
        $name = '_tr_submit_form';

        $this->removeAttribute('id');
        $this->setAttribute('id', $name);

        $value = esc_attr( $this->getAttribute('value') );
        $this->removeAttribute('value');
        $this->removeAttribute('name');
        $this->appendStringToAttribute('class', ' button button-primary');

        $generator = new Html\Generator();
        return $generator->newInput( 'submit', $name, $value, $this->getAttributes() )->getString();
    }

}