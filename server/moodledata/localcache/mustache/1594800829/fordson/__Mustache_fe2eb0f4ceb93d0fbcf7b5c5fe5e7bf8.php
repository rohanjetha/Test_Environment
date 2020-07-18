<?php

class __Mustache_fe2eb0f4ceb93d0fbcf7b5c5fe5e7bf8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="discussion-list-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('groupchangemenu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'notifications' section
        $value = $context->find('notifications');
        $buffer .= $this->section37b939c27088111fca03ffd2edf85916($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'forum.capabilities.create' section
        $value = $context->findDot('forum.capabilities.create');
        $buffer .= $this->section4f9f095db96f0147039490bbdaa64392($context, $indent, $value);
        // 'forum.capabilities.create' inverted section
        $value = $context->findDot('forum.capabilities.create');
        if (empty($value)) {
            
            // 'forum.capabilities.selfenrol' section
            $value = $context->findDot('forum.capabilities.selfenrol');
            $buffer .= $this->section69f2f6e7afa5ad38ef631d39a74609fb($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'state.hasdiscussions' section
        $value = $context->findDot('state.hasdiscussions');
        $buffer .= $this->sectionD1a128f3c9ece295ffa43ae499107293($context, $indent, $value);
        // 'state.hasdiscussions' inverted section
        $value = $context->findDot('state.hasdiscussions');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="forumnodiscuss">
';
            $blockFunction = $context->findInBlock('no_discussions_text');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                $buffer .= $indent . '                (';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section59c4aea0943e493fb1621a8d24c8bd0f($context, $indent, $value);
                $buffer .= ')
';
            }
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionEaf54a101a2c05f5aee3d474b0117a14($context, $indent, $value);

        return $buffer;
    }

    private function section37b939c27088111fca03ffd2edf85916(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/notification}}
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
                
                if ($partial = $this->mustache->loadPartial('core/notification')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
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

    private function section4f9f095db96f0147039490bbdaa64392(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="p-t-1 p-b-1">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseAddForm">
                {{$discussion_create_text}}
                    {{#str}}addanewdiscussion, forum{{/str}}
                {{/discussion_create_text}}
            </a>
            <div class="collapse m-t-1" id="collapseAddForm">
                {{{newdiscussionhtml}}}
            </div>
        </div>
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
                
                $buffer .= $indent . '        <div class="p-t-1 p-b-1">
';
                $buffer .= $indent . '            <a class="btn btn-primary" data-toggle="collapse" href="#collapseAddForm">
';
                $blockFunction = $context->findInBlock('discussion_create_text');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                    ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section60562f50222dfd2822e50e7da0116b1c($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <div class="collapse m-t-1" id="collapseAddForm">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('newdiscussionhtml'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69f2f6e7afa5ad38ef631d39a74609fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="p-t-1 p-b-1">
                <a class="btn btn-primary" href="{{forum.urls.create}}">
                    {{$discussion_create_text}}
                        {{#str}}addanewdiscussion, forum{{/str}}
                    {{/discussion_create_text}}
                </a>
            </div>
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
                
                $buffer .= $indent . '            <div class="p-t-1 p-b-1">
';
                $buffer .= $indent . '                <a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->findDot('forum.urls.create'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $blockFunction = $context->findInBlock('discussion_create_text');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                        ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section60562f50222dfd2822e50e7da0116b1c($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb7616eb082d38ffbff265dd116717ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showingcountoftotaldiscussions, mod_forum, {"count": "{{visiblediscussioncount}}", "total":"{{totaldiscussioncount}}"} ';
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
                
                $buffer .= ' showingcountoftotaldiscussions, mod_forum, {"count": "';
                $value = $this->resolveValue($context->find('visiblediscussioncount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", "total":"';
                $value = $this->resolveValue($context->find('totaldiscussioncount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"} ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1992336f71ab27e96dd60b73814a51c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussion, mod_forum';
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
                
                $buffer .= 'discussion, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b223ddf50719647c9723401fba2694d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startedby, mod_forum';
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
                
                $buffer .= 'startedby, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88e57f90624c87c0f599df6e2b07da9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'group';
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
                
                $buffer .= 'group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB335b22c80de90a112aab93ddf58a14f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <th scope="col" class="group">{{#str}}group{{/str}}</th>
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
                
                $buffer .= $indent . '                            <th scope="col" class="group">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section88e57f90624c87c0f599df6e2b07da9c($context, $indent, $value);
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4f5cd2412b81cf4971a3c90bc81fb6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbyrepliesasc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbyrepliesasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD98678024f3969cfad681333304399ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'replies, mod_forum';
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
                
                $buffer .= 'replies, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61fd71a6b4af5bef754e61152bc3e899(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'desc, core';
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
                
                $buffer .= 'desc, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b40835e6575f136656670fa9ea6fa33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/downlong, core, {{#str}}desc, core{{/str}}';
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
                
                $buffer .= 't/downlong, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section61fd71a6b4af5bef754e61152bc3e899($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd47c3520c9187574a597a6ae83a6879(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{forum.urls.sortrepliesasc}}}" aria-label="{{#str}}discussionlistsortbyrepliesasc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortrepliesasc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA4f5cd2412b81cf4971a3c90bc81fb6e($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD98678024f3969cfad681333304399ae($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89bd64d1cf116028e547fc6701c7eaaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbyrepliesdesc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbyrepliesdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA27af5852a97444d420eb51cb1ac1990(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'asc, core';
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
                
                $buffer .= 'asc, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c3327255392726ae79b991bf76b33a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/uplong, core, {{#str}}asc, core{{/str}}';
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
                
                $buffer .= 't/uplong, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA27af5852a97444d420eb51cb1ac1990($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0c077a0b6de5957f28ab8a2495e36b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortrepliesdesc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section89bd64d1cf116028e547fc6701c7eaaa($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD98678024f3969cfad681333304399ae($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d43d020c5ed96f03c6c6a02db938621(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unread, mod_forum';
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
                
                $buffer .= 'unread, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbb870dc026f5469d13ab846cde860af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'markallread, mod_forum';
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
                
                $buffer .= 'markallread, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9d125a5afcc3c71288fe20008de1faa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/markasread, core, {{#str}}markallread, mod_forum{{/str}}';
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
                
                $buffer .= 't/markasread, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDbb870dc026f5469d13ab846cde860af($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD22980b4a0bb6b59a4a5622ea9a3e4ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <th scope="col" class="text-center">
                                {{#str}}unread, mod_forum{{/str}}
                                <a href="{{{forum.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markallread, mod_forum{{/str}}{{/pix}}</a>
                            </th>
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
                
                $buffer .= $indent . '                            <th scope="col" class="text-center">
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4d43d020c5ed96f03c6c6a02db938621($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.markasread'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionC9d125a5afcc3c71288fe20008de1faa($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3135a892d531c7b3b5305046f243eb83(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <th scope="col" class="text-center">
                                {{#state.sortorder.isrepliesdesc}}
                                    <a href="{{{forum.urls.sortrepliesasc}}}" aria-label="{{#str}}discussionlistsortbyrepliesasc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesdesc}}
                                {{#state.sortorder.isrepliesasc}}
                                    <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesasc}}
                                {{^state.sortorder.isrepliesdesc}}
                                    {{^state.sortorder.isrepliesasc}}
                                        <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a>
                                    {{/state.sortorder.isrepliesasc}}
                                {{/state.sortorder.isrepliesdesc}}
                            </th>

                            {{#forum.userstate.tracked}}
                            <th scope="col" class="text-center">
                                {{#str}}unread, mod_forum{{/str}}
                                <a href="{{{forum.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markallread, mod_forum{{/str}}{{/pix}}</a>
                            </th>
                            {{/forum.userstate.tracked}}
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
                
                $buffer .= $indent . '                            <th scope="col" class="text-center">
';
                // 'state.sortorder.isrepliesdesc' section
                $value = $context->findDot('state.sortorder.isrepliesdesc');
                $buffer .= $this->sectionAd47c3520c9187574a597a6ae83a6879($context, $indent, $value);
                // 'state.sortorder.isrepliesasc' section
                $value = $context->findDot('state.sortorder.isrepliesasc');
                $buffer .= $this->sectionF0c077a0b6de5957f28ab8a2495e36b3($context, $indent, $value);
                // 'state.sortorder.isrepliesdesc' inverted section
                $value = $context->findDot('state.sortorder.isrepliesdesc');
                if (empty($value)) {
                    
                    // 'state.sortorder.isrepliesasc' inverted section
                    $value = $context->findDot('state.sortorder.isrepliesasc');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                                        <a href="';
                        $value = $this->resolveValue($context->findDot('forum.urls.sortrepliesdesc'), $context);
                        $buffer .= $value;
                        $buffer .= '" aria-label="';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section89bd64d1cf116028e547fc6701c7eaaa($context, $indent, $value);
                        $buffer .= '">';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->sectionD98678024f3969cfad681333304399ae($context, $indent, $value);
                        $buffer .= '</a>
';
                    }
                }
                $buffer .= $indent . '                            </th>
';
                $buffer .= $indent . '
';
                // 'forum.userstate.tracked' section
                $value = $context->findDot('forum.userstate.tracked');
                $buffer .= $this->sectionD22980b4a0bb6b59a4a5622ea9a3e4ef($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7533e01c6ea8dc878fabfc9fc56be8f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbylastpostasc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbylastpostasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc4bf659abc5d7e4d1fa879fd68d56c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lastpost, mod_forum';
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
                
                $buffer .= 'lastpost, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf41f5a70ec653be31c680fe6f214bb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortlastpostasc}}}" aria-label="{{#str}}discussionlistsortbylastpostasc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortlastpostasc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7533e01c6ea8dc878fabfc9fc56be8f7($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBc4bf659abc5d7e4d1fa879fd68d56c8($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa917cd08c45399601e65090de917ad3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbylastpostdesc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbylastpostdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8b5f3d676edeb6e56041988af4fb3b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortlastpostdesc}}}" aria-label="{{#str}}discussionlistsortbylastpostdesc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortlastpostdesc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEa917cd08c45399601e65090de917ad3($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBc4bf659abc5d7e4d1fa879fd68d56c8($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD63e738434cd61dad4b2bba49b7a4122(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbycreatedasc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbycreatedasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8348364d2b97a55ebd68db983e1de366(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'created, mod_forum';
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
                
                $buffer .= 'created, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20dff399a4f09e5167e703bc5cc9ee24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortcreatedasc}}}" aria-label="{{#str}}discussionlistsortbycreatedasc, mod_forum{{/str}}">{{#str}}created, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortcreatedasc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD63e738434cd61dad4b2bba49b7a4122($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8348364d2b97a55ebd68db983e1de366($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBdc811e93d0aad60fc1b9667602657a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbycreateddesc, mod_forum';
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
                
                $buffer .= 'discussionlistsortbycreateddesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfcb04709f1a007e132d9e1adf3eecaf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortcreateddesc}}}" aria-label="{{#str}}discussionlistsortbycreateddesc, mod_forum{{/str}}">{{#str}}created, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
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
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortcreateddesc'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBdc811e93d0aad60fc1b9667602657a8($context, $indent, $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8348364d2b97a55ebd68db983e1de366($context, $indent, $value);
                $buffer .= '</a> <span class="text-primary">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87530e27518e1dc0e6cb3ff0dcd6ab9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^visible}}dimmed_text{{/visible}}';
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
                
                // 'visible' inverted section
                $value = $context->find('visible');
                if (empty($value)) {
                    
                    $buffer .= 'dimmed_text';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section222e7a0f7220f7a3a083c5d392baa927(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#istimed}}{{^visible}}dimmed_text{{/visible}}{{/istimed}}';
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
                
                // 'istimed' section
                $value = $context->find('istimed');
                $buffer .= $this->section87530e27518e1dc0e6cb3ff0dcd6ab9a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA80f28843b433fe65ddf4e33b6495a3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionpinned, mod_forum';
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
                
                $buffer .= 'discussionpinned, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94ac079e2e1fe2969312dd51a9e1d942(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/pinned, mod_forum, {{#str}}discussionpinned, mod_forum{{/str}}';
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
                
                $buffer .= 'i/pinned, mod_forum, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA80f28843b433fe65ddf4e33b6495a3d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD457f2607ee5447319b74d4f284c326f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#pix}}i/pinned, mod_forum, {{#str}}discussionpinned, mod_forum{{/str}}{{/pix}}
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
                
                $buffer .= $indent . '                                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section94ac079e2e1fe2969312dd51a9e1d942($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section299f04c84910f862a3d597e5a60a6256(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{> mod_forum/forum_discussion_favourite_toggle}}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_favourite_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section702351094cafd0f597cee4369a69f5c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pictureof, moodle, {{fullname}}';
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
                
                $buffer .= 'pictureof, moodle, ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0d62f6fe08f44dbf0891334a01b3d3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex flex-row">
                                        <div class="align-middle p-0">
                                            <img
                                                class="rounded-circle userpicture"
                                                src="{{urls.profileimage}}"
                                                alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                                title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                            >
                                        </div>
                                        <div class="align-middle p-2">
                                            {{fullname}}
                                        </div>
                                    </div>
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
                
                $buffer .= $indent . '                                    <div class="d-flex flex-row">
';
                $buffer .= $indent . '                                        <div class="align-middle p-0">
';
                $buffer .= $indent . '                                            <img
';
                $buffer .= $indent . '                                                class="rounded-circle userpicture"
';
                $buffer .= $indent . '                                                src="';
                $value = $this->resolveValue($context->findDot('urls.profileimage'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                            >
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="align-middle p-2">
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9676b028b46e3df83a3055c6a32599ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' memberofgroup, group, {{name}}';
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
                
                $buffer .= ' memberofgroup, group, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE103d4001a9c5c8aed5c9292425b5842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{name}} ';
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
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b2f354867f833f98de800787fde10dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a href="{{{urls.userlist}}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                    <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                         aria-hidden="true"
                                                         class="border rounded h-auto rounded-circle grouppicture"
                                                         src="{{{urls.picture}}}"
                                                         title="{{#str}} pictureof, core, {{name}} {{/str}}">
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
                
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->findDot('urls.userlist'), $context);
                $buffer .= $value;
                $buffer .= '" role="button" aria-label=\'';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '\'>
';
                $buffer .= $indent . '                                                    <img alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                         aria-hidden="true"
';
                $buffer .= $indent . '                                                         class="border rounded h-auto rounded-circle grouppicture"
';
                $buffer .= $indent . '                                                         src="';
                $value = $this->resolveValue($context->findDot('urls.picture'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                         title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e87e79b92663285f09c93264c87c373(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#urls.userlist}}
                                                <a href="{{{urls.userlist}}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                    <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                         aria-hidden="true"
                                                         class="border rounded h-auto rounded-circle grouppicture"
                                                         src="{{{urls.picture}}}"
                                                         title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                                </a>
                                            {{/urls.userlist}}
                                            {{^urls.userlist}}
                                                <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                     class="border rounded h-auto rounded-circle grouppicture"
                                                     src="{{{urls.picture}}}"
                                                     title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                            {{/urls.userlist}}
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
                
                // 'urls.userlist' section
                $value = $context->findDot('urls.userlist');
                $buffer .= $this->section4b2f354867f833f98de800787fde10dc($context, $indent, $value);
                // 'urls.userlist' inverted section
                $value = $context->findDot('urls.userlist');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                <img alt="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                     class="border rounded h-auto rounded-circle grouppicture"
';
                    $buffer .= $indent . '                                                     src="';
                    $value = $this->resolveValue($context->findDot('urls.picture'), $context);
                    $buffer .= $value;
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                     title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                    $buffer .= '">
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDfd8ce4a46dcca2eace436fa4f4eb018(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>{{name}}</a>
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
                
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->findDot('urls.userlist'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label=\'';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28dc6ba675ac2fd1f92a07cda0ef723d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{#urls.picture}}
                                            {{#urls.userlist}}
                                                <a href="{{{urls.userlist}}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                    <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                         aria-hidden="true"
                                                         class="border rounded h-auto rounded-circle grouppicture"
                                                         src="{{{urls.picture}}}"
                                                         title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                                </a>
                                            {{/urls.userlist}}
                                            {{^urls.userlist}}
                                                <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                     class="border rounded h-auto rounded-circle grouppicture"
                                                     src="{{{urls.picture}}}"
                                                     title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                            {{/urls.userlist}}
                                        {{/urls.picture}}
                                        {{^urls.picture}}
                                            {{#urls.userlist}}
                                                <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>{{name}}</a>
                                            {{/urls.userlist}}
                                            {{^urls.userlist}}
                                                {{name}}
                                            {{/urls.userlist}}
                                        {{/urls.picture}}
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
                
                // 'urls.picture' section
                $value = $context->findDot('urls.picture');
                $buffer .= $this->section2e87e79b92663285f09c93264c87c373($context, $indent, $value);
                // 'urls.picture' inverted section
                $value = $context->findDot('urls.picture');
                if (empty($value)) {
                    
                    // 'urls.userlist' section
                    $value = $context->findDot('urls.userlist');
                    $buffer .= $this->sectionDfd8ce4a46dcca2eace436fa4f4eb018($context, $indent, $value);
                    // 'urls.userlist' inverted section
                    $value = $context->findDot('urls.userlist');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                                                ';
                        $value = $this->resolveValue($context->find('name'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '
';
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb8502eddc4dd736bd4a657eea49483d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <td scope="col" class="group align-middle">
                                    {{#discussion.group}}
                                        {{#urls.picture}}
                                            {{#urls.userlist}}
                                                <a href="{{{urls.userlist}}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                    <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                         aria-hidden="true"
                                                         class="border rounded h-auto rounded-circle grouppicture"
                                                         src="{{{urls.picture}}}"
                                                         title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                                </a>
                                            {{/urls.userlist}}
                                            {{^urls.userlist}}
                                                <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                     class="border rounded h-auto rounded-circle grouppicture"
                                                     src="{{{urls.picture}}}"
                                                     title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                            {{/urls.userlist}}
                                        {{/urls.picture}}
                                        {{^urls.picture}}
                                            {{#urls.userlist}}
                                                <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>{{name}}</a>
                                            {{/urls.userlist}}
                                            {{^urls.userlist}}
                                                {{name}}
                                            {{/urls.userlist}}
                                        {{/urls.picture}}
                                    {{/discussion.group}}
                                </td>
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
                
                $buffer .= $indent . '                                <td scope="col" class="group align-middle">
';
                // 'discussion.group' section
                $value = $context->findDot('discussion.group');
                $buffer .= $this->section28dc6ba675ac2fd1f92a07cda0ef723d($context, $indent, $value);
                $buffer .= $indent . '                                </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a6fee4ef2392cab054eba51f6bd53f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'markalldread, mod_forum';
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
                
                $buffer .= 'markalldread, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section040116c22c4d0bb28949aa08480c7948(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/markasread, core, {{#str}}markalldread, mod_forum{{/str}}';
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
                
                $buffer .= 't/markasread, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5a6fee4ef2392cab054eba51f6bd53f8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c1bfd633cd85c4a76f4176691fc5c65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="p-1 w-100 h-100 d-block unread">
                                                <a href="{{{discussion.urls.viewfirstunread}}}">{{unread}}</a>
                                                <a href="{{{discussion.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markalldread, mod_forum{{/str}}{{/pix}}</a>
                                            </span>
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
                
                $buffer .= $indent . '                                            <span class="p-1 w-100 h-100 d-block unread">
';
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.viewfirstunread'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('unread'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.markasread'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section040116c22c4d0bb28949aa08480c7948($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8542e15da12a4eb213e939093c97ff13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <td scope="col" class="p-0 text-center align-middle">
                                        {{#unread}}
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="p-1 w-100 h-100 d-block unread">
                                                <a href="{{{discussion.urls.viewfirstunread}}}">{{unread}}</a>
                                                <a href="{{{discussion.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markalldread, mod_forum{{/str}}{{/pix}}</a>
                                            </span>
                                        {{/unread}}
                                        {{^unread}}
                                            <span class="p-3 w-100 h-100 d-block">
                                                0
                                            </span>
                                        {{/unread}}
                                    </td>
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
                
                $buffer .= $indent . '                                    <td scope="col" class="p-0 text-center align-middle">
';
                // 'unread' section
                $value = $context->find('unread');
                $buffer .= $this->section1c1bfd633cd85c4a76f4176691fc5c65($context, $indent, $value);
                // 'unread' inverted section
                $value = $context->find('unread');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <span class="p-3 w-100 h-100 d-block">
';
                    $buffer .= $indent . '                                                0
';
                    $buffer .= $indent . '                                            </span>
';
                }
                $buffer .= $indent . '                                    </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa2386156da52aba435895c760dade95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <td scope="col" class="p-0 text-center align-middle">
                                    <a href="{{discussion.urls.view}}" class="p-3 w-100 h-100 d-block">
                                        {{replies}}
                                    </a>
                                </td>
                                {{#forum.userstate.tracked}}
                                    <td scope="col" class="p-0 text-center align-middle">
                                        {{#unread}}
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="p-1 w-100 h-100 d-block unread">
                                                <a href="{{{discussion.urls.viewfirstunread}}}">{{unread}}</a>
                                                <a href="{{{discussion.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markalldread, mod_forum{{/str}}{{/pix}}</a>
                                            </span>
                                        {{/unread}}
                                        {{^unread}}
                                            <span class="p-3 w-100 h-100 d-block">
                                                0
                                            </span>
                                        {{/unread}}
                                    </td>
                                {{/forum.userstate.tracked}}
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
                
                $buffer .= $indent . '                                <td scope="col" class="p-0 text-center align-middle">
';
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.view'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="p-3 w-100 h-100 d-block">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('replies'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </td>
';
                // 'forum.userstate.tracked' section
                $value = $context->findDot('forum.userstate.tracked');
                $buffer .= $this->section8542e15da12a4eb213e939093c97ff13($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc48615a60e51b82c1d60b995c063bab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pictureof, moodle, {{latestpostauthor.fullname}}';
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
                
                $buffer .= 'pictureof, moodle, ';
                $value = $this->resolveValue($context->findDot('latestpostauthor.fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39978570f671e2d5d699604316408597(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'strftimerecentfull';
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
                
                $buffer .= 'strftimerecentfull';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section156e3a8ee35fb0b7d95ff7707acd090d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{discussion.times.modified}}, {{#str}}strftimerecentfull{{/str}}
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
                
                $buffer .= '
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->findDot('discussion.times.modified'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section39978570f671e2d5d699604316408597($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC33c4536dadd0001fad38cc5a1ae4098(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex flex-row">
                                        <div class="align-middle p-0">
                                            <a href="{{latestpostauthor.urls.profile}}">
                                                <img
                                                    class="rounded-circle userpicture"
                                                    src="{{latestpostauthor.urls.profileimage}}"
                                                    alt="{{#str}}pictureof, moodle, {{latestpostauthor.fullname}}{{/str}}"
                                                    title="{{#str}}pictureof, moodle, {{latestpostauthor.fullname}}{{/str}}"
                                                >
                                            </a>
                                        </div>
                                        <div class="p-2 p-t-0 p-b-0 d-inline-flex flex-column">
                                            <div>
                                                <a href="{{latestpostauthor.urls.profile}}">{{latestpostauthor.fullname}}</a>
                                            </div>
                                            <div>
                                                <a href="{{{discussion.urls.viewlatest}}}">{{#userdate}}
                                                    {{discussion.times.modified}}, {{#str}}strftimerecentfull{{/str}}
                                                {{/userdate}}</a>
                                            </div>
                                        </div>
                                    </div>
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
                
                $buffer .= $indent . '                                    <div class="d-flex flex-row">
';
                $buffer .= $indent . '                                        <div class="align-middle p-0">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->findDot('latestpostauthor.urls.profile'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                <img
';
                $buffer .= $indent . '                                                    class="rounded-circle userpicture"
';
                $buffer .= $indent . '                                                    src="';
                $value = $this->resolveValue($context->findDot('latestpostauthor.urls.profileimage'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCc48615a60e51b82c1d60b995c063bab($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCc48615a60e51b82c1d60b995c063bab($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="p-2 p-t-0 p-b-0 d-inline-flex flex-column">
';
                $buffer .= $indent . '                                            <div>
';
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->findDot('latestpostauthor.urls.profile'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->findDot('latestpostauthor.fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div>
';
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.viewlatest'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section156e3a8ee35fb0b7d95ff7707acd090d($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section433f39e3c5bd4c2dcd843edc203bae05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{discussion.times.created}}, {{#str}}strftimerecentfull{{/str}}';
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
                
                $value = $this->resolveValue($context->findDot('discussion.times.created'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section39978570f671e2d5d699604316408597($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ccbf80d161997c4baef0b05485835ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displaystart, mod_forum ';
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
                
                $buffer .= ' displaystart, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4e16e061960a196ec6b5f2437ea8277(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'strftimerecentfull ';
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
                
                $buffer .= 'strftimerecentfull ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24ff06191b18882ceaed7cc3b01f6b89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}, {{#str}}strftimerecentfull {{/str}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF4e16e061960a196ec6b5f2437ea8277($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99472e12865839bead582dfe317d663c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{!                                           }}{{#str}} displaystart, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}}strftimerecentfull {{/str}}{{/userdate}}
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
                
                $buffer .= $indent . '                                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2ccbf80d161997c4baef0b05485835ae($context, $indent, $value);
                $buffer .= ': ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section24ff06191b18882ceaed7cc3b01f6b89($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC74c530d1c92114824bc15207014927a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displayend, mod_forum ';
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
                
                $buffer .= ' displayend, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2007fc7bd8735c4f9911714350871620(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimerecentfull ';
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
                
                $buffer .= ' strftimerecentfull ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b4f581b0a86189d2c92e77f58c9f69d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}, {{#str}} strftimerecentfull {{/str}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2007fc7bd8735c4f9911714350871620($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD526a5f8ebccda72b0a3d28bcf7bbb05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{!                                           }}{{#str}} displayend, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}} strftimerecentfull {{/str}}{{/userdate}}
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
                
                $buffer .= $indent . '                                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC74c530d1c92114824bc15207014927a($context, $indent, $value);
                $buffer .= ': ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section1b4f581b0a86189d2c92e77f58c9f69d($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0bfcb9a3fb4fb0120f0c94c442609a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timedvisible, mod_forum ';
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
                
                $buffer .= ' timedvisible, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04f960d65cec2400bf585e4f366ff318(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{!                                           }}{{#str}} timedvisible, mod_forum {{/str}}
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
                
                $buffer .= $indent . '                                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFc0bfcb9a3fb4fb0120f0c94c442609a($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF47b85b884f7419363d9acf74d9b42ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timedhidden, mod_forum ';
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
                
                $buffer .= ' timedhidden, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4af192325ed626b223d28d251b4c88d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    i/calendar, moodle,
                                    {{#discussion.times.start}}
                                    {{!                                           }}{{#str}} displaystart, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}}strftimerecentfull {{/str}}{{/userdate}}
                                    {{/discussion.times.start}}
                                    {{#discussion.times.end}}
                                    {{!                                           }}{{#str}} displayend, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}} strftimerecentfull {{/str}}{{/userdate}}
                                    {{/discussion.times.end}}
                                    {{#discussion.timed.visible}}
                                    {{!                                           }}{{#str}} timedvisible, mod_forum {{/str}}
                                    {{/discussion.timed.visible}}
                                    {{^discussion.timed.visible}}
                                    {{!                                           }}{{#str}} timedhidden, mod_forum {{/str}}
                                    {{/discussion.timed.visible}}
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
                
                $buffer .= $indent . '                                    i/calendar, moodle,
';
                // 'discussion.times.start' section
                $value = $context->findDot('discussion.times.start');
                $buffer .= $this->section99472e12865839bead582dfe317d663c($context, $indent, $value);
                // 'discussion.times.end' section
                $value = $context->findDot('discussion.times.end');
                $buffer .= $this->sectionD526a5f8ebccda72b0a3d28bcf7bbb05($context, $indent, $value);
                // 'discussion.timed.visible' section
                $value = $context->findDot('discussion.timed.visible');
                $buffer .= $this->section04f960d65cec2400bf585e4f366ff318($context, $indent, $value);
                // 'discussion.timed.visible' inverted section
                $value = $context->findDot('discussion.timed.visible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionF47b85b884f7419363d9acf74d9b42ad($context, $indent, $value);
                    $buffer .= '
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4cc24a5848a7d67aba56151b0ac1c5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="timedpost">
                                    {{#pix}}
                                    i/calendar, moodle,
                                    {{#discussion.times.start}}
                                    {{!                                           }}{{#str}} displaystart, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}}strftimerecentfull {{/str}}{{/userdate}}
                                    {{/discussion.times.start}}
                                    {{#discussion.times.end}}
                                    {{!                                           }}{{#str}} displayend, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}} strftimerecentfull {{/str}}{{/userdate}}
                                    {{/discussion.times.end}}
                                    {{#discussion.timed.visible}}
                                    {{!                                           }}{{#str}} timedvisible, mod_forum {{/str}}
                                    {{/discussion.timed.visible}}
                                    {{^discussion.timed.visible}}
                                    {{!                                           }}{{#str}} timedhidden, mod_forum {{/str}}
                                    {{/discussion.timed.visible}}
                                    {{/pix}}
                                </div>
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
                
                $buffer .= $indent . '                                <div class="timedpost">
';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionE4af192325ed626b223d28d251b4c88d($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section803e155e7b88f0a1bd6fbad5707cfc46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'locked, forum';
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
                
                $buffer .= 'locked, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b37564ffb2146cba9418123feb9eb60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/lock, core, {{#str}}locked, forum{{/str}}';
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
                
                $buffer .= 'i/lock, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section803e155e7b88f0a1bd6fbad5707cfc46($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8a1984ed7b3d581038b513ec46a73c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div>
                                            {{> mod_forum/discussion_subscription_toggle}}
                                        </div>
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
                
                $buffer .= $indent . '                                        <div>
';
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_subscription_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section067a91abd41b9f8c01e9c09a112536b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="mt-3" data-container=\'discussion-tools\'>
                                            {{> mod_forum/forum_action_menu}}
                                        </div>
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
                
                $buffer .= $indent . '                                        <div class="mt-3" data-container=\'discussion-tools\'>
';
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9736e46145a775bacec53c984410e01a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex flex-wrap justify-content-end pr-4">
                                        <div class="pt-1 mt-2  {{^discussion.locked}}hidden{{/discussion.locked}}" data-region="locked-icon">
                                            <span class="btn" >{{#pix}}i/lock, core, {{#str}}locked, forum{{/str}}{{/pix}}</span>
                                        </div>
                                        {{#forum.capabilities.subscribe}}
                                        <div>
                                            {{> mod_forum/discussion_subscription_toggle}}
                                        </div>
                                        {{/forum.capabilities.subscribe}}
                                        {{#hasanyactions}}
                                        <div class="mt-3" data-container=\'discussion-tools\'>
                                            {{> mod_forum/forum_action_menu}}
                                        </div>
                                        {{/hasanyactions}}
                                    </div>
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
                
                $buffer .= $indent . '                                    <div class="d-flex flex-wrap justify-content-end pr-4">
';
                $buffer .= $indent . '                                        <div class="pt-1 mt-2  ';
                // 'discussion.locked' inverted section
                $value = $context->findDot('discussion.locked');
                if (empty($value)) {
                    
                    $buffer .= 'hidden';
                }
                $buffer .= '" data-region="locked-icon">
';
                $buffer .= $indent . '                                            <span class="btn" >';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section5b37564ffb2146cba9418123feb9eb60($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </div>
';
                // 'forum.capabilities.subscribe' section
                $value = $context->findDot('forum.capabilities.subscribe');
                $buffer .= $this->sectionA8a1984ed7b3d581038b513ec46a73c0($context, $indent, $value);
                // 'hasanyactions' section
                $value = $context->find('hasanyactions');
                $buffer .= $this->section067a91abd41b9f8c01e9c09a112536b5($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section302c8a4291e9d6f7205207ead092d813(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <!-- The discussion class is only required for behat tests to identify the row -->
                        <tr class="discussion {{#discussion.timed}}{{#istimed}}{{^visible}}dimmed_text{{/visible}}{{/istimed}}{{/discussion.timed}}">
                            <td scope="col" class="pinned p-0 text-center align-middle">
                                {{#discussion.pinned}}
                                    {{#pix}}i/pinned, mod_forum, {{#str}}discussionpinned, mod_forum{{/str}}{{/pix}}
                                {{/discussion.pinned}}
                                {{^discussion.pinned}}
                                    {{#discussion}}
                                        {{> mod_forum/forum_discussion_favourite_toggle}}
                                    {{/discussion}}
                                {{/discussion.pinned}}
                            </td>
                            <td scope="col" class="topic p-0 align-middle">
                                <a class="p-3 p-l-0 w-100 h-100 d-block" href="{{discussion.urls.view}}">{{{discussion.name}}}</a>
                            </td>
                            <td scope="col" class="author align-middle">
                                {{#firstpostauthor}}
                                    <div class="d-flex flex-row">
                                        <div class="align-middle p-0">
                                            <img
                                                class="rounded-circle userpicture"
                                                src="{{urls.profileimage}}"
                                                alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                                title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                            >
                                        </div>
                                        <div class="align-middle p-2">
                                            {{fullname}}
                                        </div>
                                    </div>
                                {{/firstpostauthor}}
                            </td>
                            {{#forum.state.groupmode}}
                                <td scope="col" class="group align-middle">
                                    {{#discussion.group}}
                                        {{#urls.picture}}
                                            {{#urls.userlist}}
                                                <a href="{{{urls.userlist}}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                    <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                         aria-hidden="true"
                                                         class="border rounded h-auto rounded-circle grouppicture"
                                                         src="{{{urls.picture}}}"
                                                         title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                                </a>
                                            {{/urls.userlist}}
                                            {{^urls.userlist}}
                                                <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                     class="border rounded h-auto rounded-circle grouppicture"
                                                     src="{{{urls.picture}}}"
                                                     title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                            {{/urls.userlist}}
                                        {{/urls.picture}}
                                        {{^urls.picture}}
                                            {{#urls.userlist}}
                                                <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>{{name}}</a>
                                            {{/urls.userlist}}
                                            {{^urls.userlist}}
                                                {{name}}
                                            {{/urls.userlist}}
                                        {{/urls.picture}}
                                    {{/discussion.group}}
                                </td>
                            {{/forum.state.groupmode}}
                            {{#forum.capabilities.viewdiscussions}}
                                <td scope="col" class="p-0 text-center align-middle">
                                    <a href="{{discussion.urls.view}}" class="p-3 w-100 h-100 d-block">
                                        {{replies}}
                                    </a>
                                </td>
                                {{#forum.userstate.tracked}}
                                    <td scope="col" class="p-0 text-center align-middle">
                                        {{#unread}}
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="p-1 w-100 h-100 d-block unread">
                                                <a href="{{{discussion.urls.viewfirstunread}}}">{{unread}}</a>
                                                <a href="{{{discussion.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markalldread, mod_forum{{/str}}{{/pix}}</a>
                                            </span>
                                        {{/unread}}
                                        {{^unread}}
                                            <span class="p-3 w-100 h-100 d-block">
                                                0
                                            </span>
                                        {{/unread}}
                                    </td>
                                {{/forum.userstate.tracked}}
                            {{/forum.capabilities.viewdiscussions}}
                            <td scope="col" class="text-left">
                                {{! TODO Check q&a, eachuser }}
                                {{#latestpostid}}
                                    <div class="d-flex flex-row">
                                        <div class="align-middle p-0">
                                            <a href="{{latestpostauthor.urls.profile}}">
                                                <img
                                                    class="rounded-circle userpicture"
                                                    src="{{latestpostauthor.urls.profileimage}}"
                                                    alt="{{#str}}pictureof, moodle, {{latestpostauthor.fullname}}{{/str}}"
                                                    title="{{#str}}pictureof, moodle, {{latestpostauthor.fullname}}{{/str}}"
                                                >
                                            </a>
                                        </div>
                                        <div class="p-2 p-t-0 p-b-0 d-inline-flex flex-column">
                                            <div>
                                                <a href="{{latestpostauthor.urls.profile}}">{{latestpostauthor.fullname}}</a>
                                            </div>
                                            <div>
                                                <a href="{{{discussion.urls.viewlatest}}}">{{#userdate}}
                                                    {{discussion.times.modified}}, {{#str}}strftimerecentfull{{/str}}
                                                {{/userdate}}</a>
                                            </div>
                                        </div>
                                    </div>
                                {{/latestpostid}}
                            </td>
                            <td scope="col" class="text-left align-middle">
                                {{#userdate}}{{discussion.times.created}}, {{#str}}strftimerecentfull{{/str}}{{/userdate}}
                            </td>
                            <td scope="col" class="timed p-0 text-center align-middle">
                                {{#discussion.timed.istimed}}
                                <div class="timedpost">
                                    {{#pix}}
                                    i/calendar, moodle,
                                    {{#discussion.times.start}}
                                    {{!                                           }}{{#str}} displaystart, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}}strftimerecentfull {{/str}}{{/userdate}}
                                    {{/discussion.times.start}}
                                    {{#discussion.times.end}}
                                    {{!                                           }}{{#str}} displayend, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}} strftimerecentfull {{/str}}{{/userdate}}
                                    {{/discussion.times.end}}
                                    {{#discussion.timed.visible}}
                                    {{!                                           }}{{#str}} timedvisible, mod_forum {{/str}}
                                    {{/discussion.timed.visible}}
                                    {{^discussion.timed.visible}}
                                    {{!                                           }}{{#str}} timedhidden, mod_forum {{/str}}
                                    {{/discussion.timed.visible}}
                                    {{/pix}}
                                </div>
                                {{/discussion.timed.istimed}}
                            </td>
                            <td scope="col" class="p-0 align-middle" data-container="discussion-summary-actions">
                                {{#discussion}}
                                    <div class="d-flex flex-wrap justify-content-end pr-4">
                                        <div class="pt-1 mt-2  {{^discussion.locked}}hidden{{/discussion.locked}}" data-region="locked-icon">
                                            <span class="btn" >{{#pix}}i/lock, core, {{#str}}locked, forum{{/str}}{{/pix}}</span>
                                        </div>
                                        {{#forum.capabilities.subscribe}}
                                        <div>
                                            {{> mod_forum/discussion_subscription_toggle}}
                                        </div>
                                        {{/forum.capabilities.subscribe}}
                                        {{#hasanyactions}}
                                        <div class="mt-3" data-container=\'discussion-tools\'>
                                            {{> mod_forum/forum_action_menu}}
                                        </div>
                                        {{/hasanyactions}}
                                    </div>
                                {{/discussion}}
                            </td>
                        </tr>
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
                
                $buffer .= $indent . '                        <!-- The discussion class is only required for behat tests to identify the row -->
';
                $buffer .= $indent . '                        <tr class="discussion ';
                // 'discussion.timed' section
                $value = $context->findDot('discussion.timed');
                $buffer .= $this->section222e7a0f7220f7a3a083c5d392baa927($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <td scope="col" class="pinned p-0 text-center align-middle">
';
                // 'discussion.pinned' section
                $value = $context->findDot('discussion.pinned');
                $buffer .= $this->sectionD457f2607ee5447319b74d4f284c326f($context, $indent, $value);
                // 'discussion.pinned' inverted section
                $value = $context->findDot('discussion.pinned');
                if (empty($value)) {
                    
                    // 'discussion' section
                    $value = $context->find('discussion');
                    $buffer .= $this->section299f04c84910f862a3d597e5a60a6256($context, $indent, $value);
                }
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td scope="col" class="topic p-0 align-middle">
';
                $buffer .= $indent . '                                <a class="p-3 p-l-0 w-100 h-100 d-block" href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.view'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->findDot('discussion.name'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td scope="col" class="author align-middle">
';
                // 'firstpostauthor' section
                $value = $context->find('firstpostauthor');
                $buffer .= $this->sectionA0d62f6fe08f44dbf0891334a01b3d3b($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                // 'forum.state.groupmode' section
                $value = $context->findDot('forum.state.groupmode');
                $buffer .= $this->sectionAb8502eddc4dd736bd4a657eea49483d($context, $indent, $value);
                // 'forum.capabilities.viewdiscussions' section
                $value = $context->findDot('forum.capabilities.viewdiscussions');
                $buffer .= $this->sectionCa2386156da52aba435895c760dade95($context, $indent, $value);
                $buffer .= $indent . '                            <td scope="col" class="text-left">
';
                // 'latestpostid' section
                $value = $context->find('latestpostid');
                $buffer .= $this->sectionC33c4536dadd0001fad38cc5a1ae4098($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td scope="col" class="text-left align-middle">
';
                $buffer .= $indent . '                                ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section433f39e3c5bd4c2dcd843edc203bae05($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td scope="col" class="timed p-0 text-center align-middle">
';
                // 'discussion.timed.istimed' section
                $value = $context->findDot('discussion.timed.istimed');
                $buffer .= $this->sectionB4cc24a5848a7d67aba56151b0ac1c5b($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td scope="col" class="p-0 align-middle" data-container="discussion-summary-actions">
';
                // 'discussion' section
                $value = $context->find('discussion');
                $buffer .= $this->section9736e46145a775bacec53c984410e01a($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1c9709a2e02997a7f8767356e8634bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="forumaddnew">
                <a href="{{create_discussion_link}}" class="btn btn-primary">{{create_discussion_link_text}}</a>
            </div>
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
                
                $buffer .= $indent . '            <div class="forumaddnew">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('create_discussion_link'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-primary">';
                $value = $this->resolveValue($context->find('create_discussion_link_text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1a128f3c9ece295ffa43ae499107293(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$discussion_top_pagination}}
            {{{ pagination }}}
        {{/discussion_top_pagination}}
        {{$discussion_list_output}}
            <span id="discussion-table-description-{{uniqid}}" class="sr-only">
                {{#str}} showingcountoftotaldiscussions, mod_forum, {"count": "{{visiblediscussioncount}}", "total":"{{totaldiscussioncount}}"} {{/str}}
            </span>
            <table
                class="table table-hover table-striped discussion-list"
                aria-label=\'{{#str}} showingcountoftotaldiscussions, mod_forum, {"count": "{{visiblediscussioncount}}", "total":"{{totaldiscussioncount}}"} {{/str}}\'
                aria-describedby="discussion-table-description-{{uniqid}}"
            >
                {{$discussion_list_header}}
                <thead>
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col" class="p-l-0">{{#str}}discussion, mod_forum{{/str}}</th>
                        <th scope="col" class="author">{{#str}}startedby, mod_forum{{/str}}</th>
                        {{#forum.state.groupmode}}
                            <th scope="col" class="group">{{#str}}group{{/str}}</th>
                        {{/forum.state.groupmode}}
                        {{#forum.capabilities.viewdiscussions}}
                            <th scope="col" class="text-center">
                                {{#state.sortorder.isrepliesdesc}}
                                    <a href="{{{forum.urls.sortrepliesasc}}}" aria-label="{{#str}}discussionlistsortbyrepliesasc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesdesc}}
                                {{#state.sortorder.isrepliesasc}}
                                    <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesasc}}
                                {{^state.sortorder.isrepliesdesc}}
                                    {{^state.sortorder.isrepliesasc}}
                                        <a href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a>
                                    {{/state.sortorder.isrepliesasc}}
                                {{/state.sortorder.isrepliesdesc}}
                            </th>

                            {{#forum.userstate.tracked}}
                            <th scope="col" class="text-center">
                                {{#str}}unread, mod_forum{{/str}}
                                <a href="{{{forum.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markallread, mod_forum{{/str}}{{/pix}}</a>
                            </th>
                            {{/forum.userstate.tracked}}
                        {{/forum.capabilities.viewdiscussions}}
                        <th scope="col" class="lastpost">
                            {{#state.sortorder.islastpostdesc}}
                                <a href="{{{forum.urls.sortlastpostasc}}}" aria-label="{{#str}}discussionlistsortbylastpostasc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.islastpostdesc}}
                            {{#state.sortorder.islastpostasc}}
                                <a href="{{{forum.urls.sortlastpostdesc}}}" aria-label="{{#str}}discussionlistsortbylastpostdesc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.islastpostasc}}
                            {{^state.sortorder.islastpostdesc}}
                                {{^state.sortorder.islastpostasc}}
                                    <a href="{{{forum.urls.sortlastpostdesc}}}" aria-label="{{#str}}discussionlistsortbylastpostdesc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a>
                                {{/state.sortorder.islastpostasc}}
                            {{/state.sortorder.islastpostdesc}}
                        </th>
                        <th scope="col" class="created">
                            {{#state.sortorder.iscreateddesc}}
                                <a href="{{{forum.urls.sortcreatedasc}}}" aria-label="{{#str}}discussionlistsortbycreatedasc, mod_forum{{/str}}">{{#str}}created, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.iscreateddesc}}
                            {{#state.sortorder.iscreatedasc}}
                                <a href="{{{forum.urls.sortcreateddesc}}}" aria-label="{{#str}}discussionlistsortbycreateddesc, mod_forum{{/str}}">{{#str}}created, mod_forum{{/str}}</a> <span class="text-primary">{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.iscreatedasc}}
                            {{^state.sortorder.iscreateddesc}}
                                {{^state.sortorder.iscreatedasc}}
                                    <a href="{{{forum.urls.sortcreateddesc}}}" aria-label="{{#str}}discussionlistsortbycreateddesc, mod_forum{{/str}}">{{#str}}created, mod_forum{{/str}}</a>
                                {{/state.sortorder.iscreatedasc}}
                            {{/state.sortorder.iscreateddesc}}
                        </th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col" class="discussionsubscription"></th>
                    </tr>
                </thead>
                {{/discussion_list_header}}
                {{$discussion_list_body}}
                <tbody>
                    {{#summaries}}
                        <!-- The discussion class is only required for behat tests to identify the row -->
                        <tr class="discussion {{#discussion.timed}}{{#istimed}}{{^visible}}dimmed_text{{/visible}}{{/istimed}}{{/discussion.timed}}">
                            <td scope="col" class="pinned p-0 text-center align-middle">
                                {{#discussion.pinned}}
                                    {{#pix}}i/pinned, mod_forum, {{#str}}discussionpinned, mod_forum{{/str}}{{/pix}}
                                {{/discussion.pinned}}
                                {{^discussion.pinned}}
                                    {{#discussion}}
                                        {{> mod_forum/forum_discussion_favourite_toggle}}
                                    {{/discussion}}
                                {{/discussion.pinned}}
                            </td>
                            <td scope="col" class="topic p-0 align-middle">
                                <a class="p-3 p-l-0 w-100 h-100 d-block" href="{{discussion.urls.view}}">{{{discussion.name}}}</a>
                            </td>
                            <td scope="col" class="author align-middle">
                                {{#firstpostauthor}}
                                    <div class="d-flex flex-row">
                                        <div class="align-middle p-0">
                                            <img
                                                class="rounded-circle userpicture"
                                                src="{{urls.profileimage}}"
                                                alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                                title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}"
                                            >
                                        </div>
                                        <div class="align-middle p-2">
                                            {{fullname}}
                                        </div>
                                    </div>
                                {{/firstpostauthor}}
                            </td>
                            {{#forum.state.groupmode}}
                                <td scope="col" class="group align-middle">
                                    {{#discussion.group}}
                                        {{#urls.picture}}
                                            {{#urls.userlist}}
                                                <a href="{{{urls.userlist}}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                    <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                         aria-hidden="true"
                                                         class="border rounded h-auto rounded-circle grouppicture"
                                                         src="{{{urls.picture}}}"
                                                         title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                                </a>
                                            {{/urls.userlist}}
                                            {{^urls.userlist}}
                                                <img alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                     class="border rounded h-auto rounded-circle grouppicture"
                                                     src="{{{urls.picture}}}"
                                                     title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                            {{/urls.userlist}}
                                        {{/urls.picture}}
                                        {{^urls.picture}}
                                            {{#urls.userlist}}
                                                <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>{{name}}</a>
                                            {{/urls.userlist}}
                                            {{^urls.userlist}}
                                                {{name}}
                                            {{/urls.userlist}}
                                        {{/urls.picture}}
                                    {{/discussion.group}}
                                </td>
                            {{/forum.state.groupmode}}
                            {{#forum.capabilities.viewdiscussions}}
                                <td scope="col" class="p-0 text-center align-middle">
                                    <a href="{{discussion.urls.view}}" class="p-3 w-100 h-100 d-block">
                                        {{replies}}
                                    </a>
                                </td>
                                {{#forum.userstate.tracked}}
                                    <td scope="col" class="p-0 text-center align-middle">
                                        {{#unread}}
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="p-1 w-100 h-100 d-block unread">
                                                <a href="{{{discussion.urls.viewfirstunread}}}">{{unread}}</a>
                                                <a href="{{{discussion.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markalldread, mod_forum{{/str}}{{/pix}}</a>
                                            </span>
                                        {{/unread}}
                                        {{^unread}}
                                            <span class="p-3 w-100 h-100 d-block">
                                                0
                                            </span>
                                        {{/unread}}
                                    </td>
                                {{/forum.userstate.tracked}}
                            {{/forum.capabilities.viewdiscussions}}
                            <td scope="col" class="text-left">
                                {{! TODO Check q&a, eachuser }}
                                {{#latestpostid}}
                                    <div class="d-flex flex-row">
                                        <div class="align-middle p-0">
                                            <a href="{{latestpostauthor.urls.profile}}">
                                                <img
                                                    class="rounded-circle userpicture"
                                                    src="{{latestpostauthor.urls.profileimage}}"
                                                    alt="{{#str}}pictureof, moodle, {{latestpostauthor.fullname}}{{/str}}"
                                                    title="{{#str}}pictureof, moodle, {{latestpostauthor.fullname}}{{/str}}"
                                                >
                                            </a>
                                        </div>
                                        <div class="p-2 p-t-0 p-b-0 d-inline-flex flex-column">
                                            <div>
                                                <a href="{{latestpostauthor.urls.profile}}">{{latestpostauthor.fullname}}</a>
                                            </div>
                                            <div>
                                                <a href="{{{discussion.urls.viewlatest}}}">{{#userdate}}
                                                    {{discussion.times.modified}}, {{#str}}strftimerecentfull{{/str}}
                                                {{/userdate}}</a>
                                            </div>
                                        </div>
                                    </div>
                                {{/latestpostid}}
                            </td>
                            <td scope="col" class="text-left align-middle">
                                {{#userdate}}{{discussion.times.created}}, {{#str}}strftimerecentfull{{/str}}{{/userdate}}
                            </td>
                            <td scope="col" class="timed p-0 text-center align-middle">
                                {{#discussion.timed.istimed}}
                                <div class="timedpost">
                                    {{#pix}}
                                    i/calendar, moodle,
                                    {{#discussion.times.start}}
                                    {{!                                           }}{{#str}} displaystart, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}}strftimerecentfull {{/str}}{{/userdate}}
                                    {{/discussion.times.start}}
                                    {{#discussion.times.end}}
                                    {{!                                           }}{{#str}} displayend, mod_forum {{/str}}: {{#userdate}}{{.}}, {{#str}} strftimerecentfull {{/str}}{{/userdate}}
                                    {{/discussion.times.end}}
                                    {{#discussion.timed.visible}}
                                    {{!                                           }}{{#str}} timedvisible, mod_forum {{/str}}
                                    {{/discussion.timed.visible}}
                                    {{^discussion.timed.visible}}
                                    {{!                                           }}{{#str}} timedhidden, mod_forum {{/str}}
                                    {{/discussion.timed.visible}}
                                    {{/pix}}
                                </div>
                                {{/discussion.timed.istimed}}
                            </td>
                            <td scope="col" class="p-0 align-middle" data-container="discussion-summary-actions">
                                {{#discussion}}
                                    <div class="d-flex flex-wrap justify-content-end pr-4">
                                        <div class="pt-1 mt-2  {{^discussion.locked}}hidden{{/discussion.locked}}" data-region="locked-icon">
                                            <span class="btn" >{{#pix}}i/lock, core, {{#str}}locked, forum{{/str}}{{/pix}}</span>
                                        </div>
                                        {{#forum.capabilities.subscribe}}
                                        <div>
                                            {{> mod_forum/discussion_subscription_toggle}}
                                        </div>
                                        {{/forum.capabilities.subscribe}}
                                        {{#hasanyactions}}
                                        <div class="mt-3" data-container=\'discussion-tools\'>
                                            {{> mod_forum/forum_action_menu}}
                                        </div>
                                        {{/hasanyactions}}
                                    </div>
                                {{/discussion}}
                            </td>
                        </tr>
                    {{/summaries}}
                </tbody>
                {{/discussion_list_body}}
            </table>
        {{/discussion_list_output}}
        {{$discussion_bottom_pagination}}
            {{{ pagination }}}
        {{/discussion_bottom_pagination}}
        {{#can_create_discussion}}
            <div class="forumaddnew">
                <a href="{{create_discussion_link}}" class="btn btn-primary">{{create_discussion_link_text}}</a>
            </div>
        {{/can_create_discussion}}
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
                
                $blockFunction = $context->findInBlock('discussion_top_pagination');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->find('pagination'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                $blockFunction = $context->findInBlock('discussion_list_output');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '            <span id="discussion-table-description-';
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" class="sr-only">
';
                    $buffer .= $indent . '                ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionEb7616eb082d38ffbff265dd116717ed($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '            </span>
';
                    $buffer .= $indent . '            <table
';
                    $buffer .= $indent . '                class="table table-hover table-striped discussion-list"
';
                    $buffer .= $indent . '                aria-label=\'';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionEb7616eb082d38ffbff265dd116717ed($context, $indent, $value);
                    $buffer .= '\'
';
                    $buffer .= $indent . '                aria-describedby="discussion-table-description-';
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '            >
';
                    $blockFunction = $context->findInBlock('discussion_list_header');
                    if (is_callable($blockFunction)) {
                        $buffer .= call_user_func($blockFunction, $context);
                    } else {
                        $buffer .= $indent . '                <thead>
';
                        $buffer .= $indent . '                    <tr>
';
                        $buffer .= $indent . '                        <th scope="col">&nbsp;</th>
';
                        $buffer .= $indent . '                        <th scope="col" class="p-l-0">';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->sectionC1992336f71ab27e96dd60b73814a51c($context, $indent, $value);
                        $buffer .= '</th>
';
                        $buffer .= $indent . '                        <th scope="col" class="author">';
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section0b223ddf50719647c9723401fba2694d($context, $indent, $value);
                        $buffer .= '</th>
';
                        // 'forum.state.groupmode' section
                        $value = $context->findDot('forum.state.groupmode');
                        $buffer .= $this->sectionB335b22c80de90a112aab93ddf58a14f($context, $indent, $value);
                        // 'forum.capabilities.viewdiscussions' section
                        $value = $context->findDot('forum.capabilities.viewdiscussions');
                        $buffer .= $this->section3135a892d531c7b3b5305046f243eb83($context, $indent, $value);
                        $buffer .= $indent . '                        <th scope="col" class="lastpost">
';
                        // 'state.sortorder.islastpostdesc' section
                        $value = $context->findDot('state.sortorder.islastpostdesc');
                        $buffer .= $this->sectionEf41f5a70ec653be31c680fe6f214bb0($context, $indent, $value);
                        // 'state.sortorder.islastpostasc' section
                        $value = $context->findDot('state.sortorder.islastpostasc');
                        $buffer .= $this->sectionC8b5f3d676edeb6e56041988af4fb3b7($context, $indent, $value);
                        // 'state.sortorder.islastpostdesc' inverted section
                        $value = $context->findDot('state.sortorder.islastpostdesc');
                        if (empty($value)) {
                            
                            // 'state.sortorder.islastpostasc' inverted section
                            $value = $context->findDot('state.sortorder.islastpostasc');
                            if (empty($value)) {
                                
                                $buffer .= $indent . '                                    <a href="';
                                $value = $this->resolveValue($context->findDot('forum.urls.sortlastpostdesc'), $context);
                                $buffer .= $value;
                                $buffer .= '" aria-label="';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->sectionEa917cd08c45399601e65090de917ad3($context, $indent, $value);
                                $buffer .= '">';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->sectionBc4bf659abc5d7e4d1fa879fd68d56c8($context, $indent, $value);
                                $buffer .= '</a>
';
                            }
                        }
                        $buffer .= $indent . '                        </th>
';
                        $buffer .= $indent . '                        <th scope="col" class="created">
';
                        // 'state.sortorder.iscreateddesc' section
                        $value = $context->findDot('state.sortorder.iscreateddesc');
                        $buffer .= $this->section20dff399a4f09e5167e703bc5cc9ee24($context, $indent, $value);
                        // 'state.sortorder.iscreatedasc' section
                        $value = $context->findDot('state.sortorder.iscreatedasc');
                        $buffer .= $this->sectionBfcb04709f1a007e132d9e1adf3eecaf($context, $indent, $value);
                        // 'state.sortorder.iscreateddesc' inverted section
                        $value = $context->findDot('state.sortorder.iscreateddesc');
                        if (empty($value)) {
                            
                            // 'state.sortorder.iscreatedasc' inverted section
                            $value = $context->findDot('state.sortorder.iscreatedasc');
                            if (empty($value)) {
                                
                                $buffer .= $indent . '                                    <a href="';
                                $value = $this->resolveValue($context->findDot('forum.urls.sortcreateddesc'), $context);
                                $buffer .= $value;
                                $buffer .= '" aria-label="';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->sectionBdc811e93d0aad60fc1b9667602657a8($context, $indent, $value);
                                $buffer .= '">';
                                // 'str' section
                                $value = $context->find('str');
                                $buffer .= $this->section8348364d2b97a55ebd68db983e1de366($context, $indent, $value);
                                $buffer .= '</a>
';
                            }
                        }
                        $buffer .= $indent . '                        </th>
';
                        $buffer .= $indent . '                        <th scope="col">&nbsp;</th>
';
                        $buffer .= $indent . '                        <th scope="col" class="discussionsubscription"></th>
';
                        $buffer .= $indent . '                    </tr>
';
                        $buffer .= $indent . '                </thead>
';
                    }
                    $blockFunction = $context->findInBlock('discussion_list_body');
                    if (is_callable($blockFunction)) {
                        $buffer .= call_user_func($blockFunction, $context);
                    } else {
                        $buffer .= $indent . '                <tbody>
';
                        // 'summaries' section
                        $value = $context->find('summaries');
                        $buffer .= $this->section302c8a4291e9d6f7205207ead092d813($context, $indent, $value);
                        $buffer .= $indent . '                </tbody>
';
                    }
                    $buffer .= $indent . '            </table>
';
                }
                $blockFunction = $context->findInBlock('discussion_bottom_pagination');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->find('pagination'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                // 'can_create_discussion' section
                $value = $context->find('can_create_discussion');
                $buffer .= $this->sectionF1c9709a2e02997a7f8767356e8634bf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59c4aea0943e493fb1621a8d24c8bd0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nodiscussions, forum';
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
                
                $buffer .= 'nodiscussions, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEaf54a101a2c05f5aee3d474b0117a14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'mod_forum/discussion_list\'], function($, View) {
        var root = $(\'#discussion-list-{{uniqid}}\');
        View.init(root);
    });
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
                
                $buffer .= $indent . '    require([\'jquery\', \'mod_forum/discussion_list\'], function($, View) {
';
                $buffer .= $indent . '        var root = $(\'#discussion-list-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '        View.init(root);
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
