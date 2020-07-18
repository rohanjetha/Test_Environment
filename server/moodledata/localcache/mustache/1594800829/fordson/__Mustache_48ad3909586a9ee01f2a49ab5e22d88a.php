<?php

class __Mustache_48ad3909586a9ee01f2a49ab5e22d88a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="ml-auto dropdown">
';
        $buffer .= $indent . '    <button class="';
        // 'settings.excludetext' inverted section
        $value = $context->findDot('settings.excludetext');
        if (empty($value)) {
            
            $buffer .= 'dropdown-toggle';
        }
        $buffer .= ' m-t-0 p-t-0 btn btn-link btn-icon"
';
        $buffer .= $indent . '        type="button"
';
        $buffer .= $indent . '        role="button"
';
        $buffer .= $indent . '        data-toggle="dropdown"
';
        $buffer .= $indent . '        aria-haspopup="true"
';
        $buffer .= $indent . '        tabindex="0"
';
        $buffer .= $indent . '        aria-controls="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-menu"
';
        $buffer .= $indent . '        aria-expanded="false">
';
        // 'settings.togglemoreicon' section
        $value = $context->findDot('settings.togglemoreicon');
        $buffer .= $this->sectionE72f853c73d497330d17dd749b189133($context, $indent, $value);
        // 'settings.togglemoreicon' inverted section
        $value = $context->findDot('settings.togglemoreicon');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section69527bcedf704ed2bb6a9a31baf770bf($context, $indent, $value);
            $buffer .= '
';
        }
        // 'settings.excludetext' inverted section
        $value = $context->findDot('settings.excludetext');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section2f3e1314eee82127f771d153b61eb44a($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div class="dropdown-menu dropdown-menu-right menu"
';
        $buffer .= $indent . '         aria-labelledby="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-menu"
';
        $buffer .= $indent . '         data-rel="menu-content"
';
        $buffer .= $indent . '         role="menu"
';
        $buffer .= $indent . '         id="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-menu">
';
        // 'capabilities.favourite' section
        $value = $context->findDot('capabilities.favourite');
        $buffer .= $this->section4a3b97bb1bbb533176740a05c75cace4($context, $indent, $value);
        // 'capabilities.pin' section
        $value = $context->findDot('capabilities.pin');
        $buffer .= $this->section4c92459ba413de5918d4dab379aaf192($context, $indent, $value);
        // 'capabilities.manage' section
        $value = $context->findDot('capabilities.manage');
        $buffer .= $this->section8b204644982ee7867ea70b12eb5e4ddd($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionC8b699f068c55fd0cc54a2d4ef8c2622(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/moremenu, core';
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
                
                $buffer .= ' i/moremenu, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE72f853c73d497330d17dd749b189133(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#pix}} i/moremenu, core{{/pix}}
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
                $buffer .= $this->sectionC8b699f068c55fd0cc54a2d4ef8c2622($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69527bcedf704ed2bb6a9a31baf770bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, core';
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
                
                $buffer .= ' i/settings, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f3e1314eee82127f771d153b61eb44a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settings, mod_forum ';
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
                
                $buffer .= ' settings, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a3b97bb1bbb533176740a05c75cace4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> mod_forum/discussion_favourite_toggle}}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_favourite_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c92459ba413de5918d4dab379aaf192(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> mod_forum/discussion_pin_toggle}}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_pin_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b204644982ee7867ea70b12eb5e4ddd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^istimelocked}}
            {{> forum/discussion_lock_toggle }}
        {{/istimelocked}}
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
                
                // 'istimelocked' inverted section
                $value = $context->find('istimelocked');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('forum/discussion_lock_toggle')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
