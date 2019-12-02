<?php

class __Mustache_bbf6e9ef5539f7a528090de0f85b2bde extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/discussion_list')) {
            $context->pushBlockContext(array(
                'discussion_create_text' => array($this, 'block3d4065a38415c1906b1a53d231d5aee0'),
                'discussion_list_output' => array($this, 'block62e5c223d5f47444d29a2d7db904aeb1'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section60562f50222dfd2822e50e7da0116b1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addanewdiscussion, forum';
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
                
                $buffer .= 'addanewdiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe0c50e9ce334f65a4b0266831f11cae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussthistopic, forum';
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
                
                $buffer .= 'discussthistopic, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section429597b65fa005e53b426a92ca2358ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'repliesmany, forum';
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
                
                $buffer .= 'repliesmany, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0856db80e2fa594b2888a15348678ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}repliesmany, forum{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section429597b65fa005e53b426a92ca2358ab($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0308093357d730081f5298af4496c843(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'repliesone, forum';
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
                
                $buffer .= 'repliesone, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24304233f6197aa4f62f8f641e79efc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
           {{< mod_forum/forum_discussion_post }}
               {{$footer}}
                   <div class="link text-right">
                       <a href="{{urls.discuss}}">{{#str}}discussthistopic, forum{{/str}}</a>&nbsp;({{discussionrepliescount}}{{#isreplyplural}}{{#str}}repliesmany, forum{{/str}}{{/isreplyplural}}{{^isreplyplural}}{{#str}}repliesone, forum{{/str}}{{/isreplyplural}})
                   </div>
               {{/footer}}
               {{$replyoutput}}{{/replyoutput}}
           {{/ mod_forum/forum_discussion_post }}
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
                
                $buffer .= $indent . '           ';
                if ($parent = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
                    $context->pushBlockContext(array(
                        'footer' => array($this, 'blockAa487adef24a6b3f3dabfbca2d222fab'),
                        'replyoutput' => array($this, 'blockD41d8cd98f00b204e9800998ecf8427e'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block3d4065a38415c1906b1a53d231d5aee0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section60562f50222dfd2822e50e7da0116b1c($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function blockAa487adef24a6b3f3dabfbca2d222fab($context)
    {
        $indent = $buffer = '';
        $buffer .= '                   <div class="link text-right">
';
        $buffer .= $indent . '                       <a href="';
        $value = $this->resolveValue($context->findDot('urls.discuss'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBe0c50e9ce334f65a4b0266831f11cae($context, $indent, $value);
        $buffer .= '</a>&nbsp;(';
        $value = $this->resolveValue($context->find('discussionrepliescount'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        // 'isreplyplural' section
        $value = $context->find('isreplyplural');
        $buffer .= $this->sectionC0856db80e2fa594b2888a15348678ba($context, $indent, $value);
        // 'isreplyplural' inverted section
        $value = $context->find('isreplyplural');
        if (empty($value)) {
            
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section0308093357d730081f5298af4496c843($context, $indent, $value);
        }
        $buffer .= ')
';
        $buffer .= $indent . '                   </div>
';
    
        return $buffer;
    }

    public function blockD41d8cd98f00b204e9800998ecf8427e($context)
    {
        $indent = $buffer = '';
    
        return $buffer;
    }

    public function block62e5c223d5f47444d29a2d7db904aeb1($context)
    {
        $indent = $buffer = '';
        // 'posts' section
        $value = $context->find('posts');
        $buffer .= $this->section24304233f6197aa4f62f8f641e79efc5($context, $indent, $value);
    
        return $buffer;
    }
}
