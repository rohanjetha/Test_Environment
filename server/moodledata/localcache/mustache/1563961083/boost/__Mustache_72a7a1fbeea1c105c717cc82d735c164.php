<?php

class __Mustache_72a7a1fbeea1c105c717cc82d735c164 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid mt-1 mt-md-5">
';
        $buffer .= $indent . '    <div class="row justify-content-md-center">
';
        $buffer .= $indent . '        <div class="col-md-8 col-xl-6">
';
        $buffer .= $indent . '            <div class="card">
';
        $buffer .= $indent . '                <div class="card-body">
';
        $buffer .= $indent . '                    <div class="card-title text-xs-center">
';
        // 'logourl' section
        $value = $context->find('logourl');
        $buffer .= $this->section8d25f7552e4cf4c2739ea8fddc0260ef($context, $indent, $value);
        // 'logourl' inverted section
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '                            <h2>';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '</h2>
';
        }
        $buffer .= $indent . '                        <hr>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="card-title">
';
        $buffer .= $indent . '                        <h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7011f9eedafcdb8d9dc662b124b2ed1e($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('formhtml'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8d25f7552e4cf4c2739ea8fddc0260ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h2><img class="img-fluid" src="{{logourl}}" title="{{sitename}}" alt="{{sitename}}"/></h2>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <h2><img class="img-fluid" src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/></h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7011f9eedafcdb8d9dc662b124b2ed1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newaccount';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'newaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
