<?php

class __Mustache_d38e58d5d0870704a4fbca3e776ff076 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-selectgroups-inline')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
