<?php

namespace DM\AjaxCom\Responder;

class Callback extends ResponseObjectAbstract
{
    const OBJECT_IDENTIFIER = 'changeurl';

    const OPTION_FUNCTION = 'function';

    /**
     * Constructor
     *
     * @param string $function
     */
    public function __construct($function)
    {
        $this->registerOption(self::OPTION_FUNCTION);
        $this->setOption(self::OPTION_FUNCTION, $function);
    }
}
