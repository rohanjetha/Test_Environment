<?php

class __Mustache_54502b4e428f965537d7304f7f4ac8d7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'capabilities.subscribe' section
        $value = $context->findDot('capabilities.subscribe');
        $buffer .= $this->sectionA577a087bef34167936a728c9609c361($context, $indent, $value);

        return $buffer;
    }

    private function sectionAa9a01cf67c7c823b6a448332884799c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clicktounsubscribe, mod_forum';
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
                
                $buffer .= 'clicktounsubscribe, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47c219071701e54580e6727273d385de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            title="{{#str}}clicktounsubscribe, mod_forum{{/str}}"
            data-targetstate="0"
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
                
                $buffer .= $indent . '            title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAa9a01cf67c7c823b6a448332884799c($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            data-targetstate="0"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d35085280e8a97b3ec241425228b620(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clicktosubscribe, mod_forum';
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
                
                $buffer .= 'clicktosubscribe, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4882adc220557532147f123322e1a6d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/subscribed, mod_forum, {{#str}}clicktounsubscribe, mod_forum{{/str}}';
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
                
                $buffer .= 't/subscribed, mod_forum, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAa9a01cf67c7c823b6a448332884799c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f1c64dbde51129c7fd3da33bb5dae3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#pix}}t/subscribed, mod_forum, {{#str}}clicktounsubscribe, mod_forum{{/str}}{{/pix}}
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
                
                $buffer .= $indent . '            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section4882adc220557532147f123322e1a6d2($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8998f9b9b809ac5c04dcdb370107c4dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/unsubscribed, mod_forum, {{#str}}clicktosubscribe, mod_forum{{/str}}';
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
                
                $buffer .= 't/unsubscribed, mod_forum, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3d35085280e8a97b3ec241425228b620($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA577a087bef34167936a728c9609c361(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a
        href="{{{urls.subscribe}}}"
        class="py-3 btn btn-link"
        data-type="subscription-toggle"
        data-action="toggle"
        data-discussionid="{{id}}"
        data-forumid="{{forumid}}"
        {{#userstate.subscribed}}
            title="{{#str}}clicktounsubscribe, mod_forum{{/str}}"
            data-targetstate="0"
        {{/userstate.subscribed}}
        {{^userstate.subscribed}}
            title="{{#str}}clicktosubscribe, mod_forum{{/str}}"
            data-targetstate="1"
        {{/userstate.subscribed}}
    >
        {{#userstate.subscribed}}
            {{#pix}}t/subscribed, mod_forum, {{#str}}clicktounsubscribe, mod_forum{{/str}}{{/pix}}
        {{/userstate.subscribed}}
        {{^userstate.subscribed}}
            {{#pix}}t/unsubscribed, mod_forum, {{#str}}clicktosubscribe, mod_forum{{/str}}{{/pix}}
        {{/userstate.subscribed}}
    </a>
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
                
                $buffer .= $indent . '    <a
';
                $buffer .= $indent . '        href="';
                $value = $this->resolveValue($context->findDot('urls.subscribe'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '        class="py-3 btn btn-link"
';
                $buffer .= $indent . '        data-type="subscription-toggle"
';
                $buffer .= $indent . '        data-action="toggle"
';
                $buffer .= $indent . '        data-discussionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '        data-forumid="';
                $value = $this->resolveValue($context->find('forumid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                // 'userstate.subscribed' section
                $value = $context->findDot('userstate.subscribed');
                $buffer .= $this->section47c219071701e54580e6727273d385de($context, $indent, $value);
                // 'userstate.subscribed' inverted section
                $value = $context->findDot('userstate.subscribed');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section3d35085280e8a97b3ec241425228b620($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '            data-targetstate="1"
';
                }
                $buffer .= $indent . '    >
';
                // 'userstate.subscribed' section
                $value = $context->findDot('userstate.subscribed');
                $buffer .= $this->section8f1c64dbde51129c7fd3da33bb5dae3e($context, $indent, $value);
                // 'userstate.subscribed' inverted section
                $value = $context->findDot('userstate.subscribed');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->section8998f9b9b809ac5c04dcdb370107c4dd($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
