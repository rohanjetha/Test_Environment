<?php

class __Mustache_cf3fedb665626d4db659ead7b13cb476 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="plans">
';
        $buffer .= $indent . '<div class="float-left">
';
        // 'navigation' section
        $value = $context->find('navigation');
        $buffer .= $this->section6d4af991aa56073211a0edc4e22533f1($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<table class="generaltable fullwidth">
';
        $buffer .= $indent . '    <caption>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section09e005df23779e0770c7817af8c87ce2($context, $indent, $value);
        $buffer .= '</caption>
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD62313e8ba55f79c5acde6aa1f29d2e6($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCfac7ef66189c234f117fe5c1b2d68e1($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6cf3cf31f053d15ce18f5e7bf34f2d21($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4df404defbaa4e47c852157743964c8c($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        // 'plans' section
        $value = $context->find('plans');
        $buffer .= $this->sectionA72c3b20785f26a253c1d57312021849($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';
        $buffer .= $indent . '
';
        // 'plans' inverted section
        $value = $context->find('plans');
        if (empty($value)) {
            
            $buffer .= $indent . '<p class="alert alert-info">
';
            $buffer .= $indent . '    ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionEa7d6067d46959966a4bf229173f651e($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '</p>
';
        }
        $buffer .= $indent . '
';
        // 'canreaduserevidence' section
        $value = $context->find('canreaduserevidence');
        $buffer .= $this->sectionF67db98a18769b02644c4e155630bda7($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section23ece2c85c02478798dfc408637c1b86($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6d4af991aa56073211a0edc4e22533f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{.}}}
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
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09e005df23779e0770c7817af8c87ce2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'listplanscaption, tool_lp';
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
                
                $buffer .= 'listplanscaption, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD62313e8ba55f79c5acde6aa1f29d2e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'planname, tool_lp';
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
                
                $buffer .= 'planname, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfac7ef66189c234f117fe5c1b2d68e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'templatebased, tool_lp';
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
                
                $buffer .= 'templatebased, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cf3cf31f053d15ce18f5e7bf34f2d21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'status, tool_lp';
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
                
                $buffer .= 'status, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4df404defbaa4e47c852157743964c8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions, tool_lp';
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
                
                $buffer .= 'actions, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d56240b217f929d4677ce34bb80d3a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'yes';
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
                
                $buffer .= 'yes';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC26716b10745efdad61bb760e472b3ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
               <span class="badge badge-info">{{#str}}yes{{/str}}</span>
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
                
                $buffer .= $indent . '               <span class="badge badge-info">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0d56240b217f929d4677ce34bb80d3a8($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0ac7f20e9de08dda74d7d5716455c77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'no';
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
                
                $buffer .= 'no';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
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
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbd46e03e5df2298387935c034164512(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{pluginbaseurl}}/editplan.php?id={{id}}&amp;userid={{userid}}&amp;return=plans
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
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/editplan.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;userid=';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&amp;return=plans
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06156a95c0067bea78d4929542c7acc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit';
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
                
                $buffer .= 't/edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cdac327a7ddab3f7ccb82af448ed9dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editthisplan, tool_lp';
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
                
                $buffer .= 'editthisplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30e5b1127e78adca71afb024437ca4e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'reopenplan, tool_lp';
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
                
                $buffer .= 'reopenplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc1446f01ed42d9b404cc209483517c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-reopen" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}reopenplan, tool_lp{{/str}}
                        </a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-reopen" href="#">
';
                $buffer .= $indent . '                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section30e5b1127e78adca71afb024437ca4e4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf94e292f88e092fe890901004b81523(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completeplan, tool_lp';
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
                
                $buffer .= 'completeplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section954b2994ab57e69a31489a2d5944c8c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-complete" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}completeplan, tool_lp{{/str}}
                        </a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-complete" href="#">
';
                $buffer .= $indent . '                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAf94e292f88e092fe890901004b81523($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8da287375ade747d99c234e6e8982412(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'requestreview, tool_lp';
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
                
                $buffer .= 'requestreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8e383265b38b2df254a318be47f861c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-request-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}requestreview, tool_lp{{/str}}</a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-request-review" href="#">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8da287375ade747d99c234e6e8982412($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbd111003f3359ac9cad2f73c86166ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancelreviewrequest, tool_lp';
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
                
                $buffer .= 'cancelreviewrequest, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF50232b96d384beb23e9788c65b456cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-cancel-review-request" href="#">{{#pix}}t/edit{{/pix}} {{#str}}cancelreviewrequest, tool_lp{{/str}}</a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-cancel-review-request" href="#">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDbd111003f3359ac9cad2f73c86166ba($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8adf1d824e306aaf125b1a037a20c224(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startreview, tool_lp';
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
                
                $buffer .= 'startreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC42fd713aec1f20d3b6b59a36fe846fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-start-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}startreview, tool_lp{{/str}}</a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-start-review" href="#">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8adf1d824e306aaf125b1a037a20c224($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf4950d626f5c331244c6f4673ecd957(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'stopreview, tool_lp';
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
                
                $buffer .= 'stopreview, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61e4f536bb8fe832fd0305a726561b17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-stop-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}stopreview, tool_lp{{/str}}</a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-stop-review" href="#">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDf4950d626f5c331244c6f4673ecd957($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6df78be086dead020f45626be3f6c906(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'planapprove, tool_lp';
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
                
                $buffer .= 'planapprove, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2bf4f382e515c98b11301a86971d384(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-approve" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planapprove, tool_lp{{/str}}</a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-approve" href="#">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6df78be086dead020f45626be3f6c906($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a875ec293f7a5dde815197b1bf15817(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'planunapprove, tool_lp';
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
                
                $buffer .= 'planunapprove, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section997f53e0e8dee2fcfeb580cb74f83fdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-unapprove" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planunapprove, tool_lp{{/str}}</a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-unapprove" href="#">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6a875ec293f7a5dde815197b1bf15817($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3676cac9b0cf0eb27ad766264e520177(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unlinkplantemplate, tool_lp';
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
                
                $buffer .= 'unlinkplantemplate, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section145a135448847a1bd1fb00835e2f3b73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="dropdown-item">
                        <a data-action="plan-unlink" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}unlinkplantemplate, tool_lp{{/str}}
                        </a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-unlink" href="#">
';
                $buffer .= $indent . '                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3676cac9b0cf0eb27ad766264e520177($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section164e871b9170fd2140595670ad4f9c08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete';
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
                
                $buffer .= 't/delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB193148a1db47cc30d2c61ca6c2a8459(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deletethisplan, tool_lp';
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
                
                $buffer .= 'deletethisplan, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3ec384946ed3b4a5c06f754fcac353f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div style="display: inline-block;">
                <ul title="{{#str}}edit{{/str}}" class="planactions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown dropdown-menu">
                    <li class="{{^canbeedited}} disabled {{/canbeedited}} dropdown-item">
                        <a href="{{#canbeedited}}
                                    {{pluginbaseurl}}/editplan.php?id={{id}}&amp;userid={{userid}}&amp;return=plans
                                 {{/canbeedited}}
                                 {{^canbeedited}}
                                    #
                                 {{/canbeedited}}
                                 ">
                            {{#pix}}t/edit{{/pix}} {{#str}}editthisplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{#isreopenallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-reopen" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}reopenplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/isreopenallowed}}
                    {{#iscompleteallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-complete" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}completeplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/iscompleteallowed}}
                    {{#isrequestreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-request-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}requestreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isrequestreviewallowed}}
                    {{#iscancelreviewrequestallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-cancel-review-request" href="#">{{#pix}}t/edit{{/pix}} {{#str}}cancelreviewrequest, tool_lp{{/str}}</a>
                    </li>
                    {{/iscancelreviewrequestallowed}}
                    {{#isstartreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-start-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}startreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isstartreviewallowed}}
                    {{#isstopreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-stop-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}stopreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isstopreviewallowed}}
                    {{#isapproveallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-approve" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planapprove, tool_lp{{/str}}</a>
                    </li>
                    {{/isapproveallowed}}
                    {{#isunapproveallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-unapprove" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planunapprove, tool_lp{{/str}}</a>
                    </li>
                    {{/isunapproveallowed}}
                    {{#isunlinkallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-unlink" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}unlinkplantemplate, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/isunlinkallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-delete" href="#">
                            {{#pix}}t/delete{{/pix}} {{#str}}deletethisplan, tool_lp{{/str}}
                        </a>
                    </li>
                    </ul>
                </ul>
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
                
                $buffer .= $indent . '                <div style="display: inline-block;">
';
                $buffer .= $indent . '                <ul title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '" class="planactions">
';
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                    <a href="#">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '</a><b class="caret"></b>
';
                $buffer .= $indent . '                    <ul class="dropdown dropdown-menu">
';
                $buffer .= $indent . '                    <li class="';
                // 'canbeedited' inverted section
                $value = $context->find('canbeedited');
                if (empty($value)) {
                    
                    $buffer .= ' disabled ';
                }
                $buffer .= ' dropdown-item">
';
                $buffer .= $indent . '                        <a href="';
                // 'canbeedited' section
                $value = $context->find('canbeedited');
                $buffer .= $this->sectionEbd46e03e5df2298387935c034164512($context, $indent, $value);
                // 'canbeedited' inverted section
                $value = $context->find('canbeedited');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    #
';
                }
                $buffer .= $indent . '                                 ">
';
                $buffer .= $indent . '                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section06156a95c0067bea78d4929542c7acc4($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2cdac327a7ddab3f7ccb82af448ed9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                // 'isreopenallowed' section
                $value = $context->find('isreopenallowed');
                $buffer .= $this->sectionBc1446f01ed42d9b404cc209483517c6($context, $indent, $value);
                // 'iscompleteallowed' section
                $value = $context->find('iscompleteallowed');
                $buffer .= $this->section954b2994ab57e69a31489a2d5944c8c5($context, $indent, $value);
                // 'isrequestreviewallowed' section
                $value = $context->find('isrequestreviewallowed');
                $buffer .= $this->sectionF8e383265b38b2df254a318be47f861c($context, $indent, $value);
                // 'iscancelreviewrequestallowed' section
                $value = $context->find('iscancelreviewrequestallowed');
                $buffer .= $this->sectionF50232b96d384beb23e9788c65b456cb($context, $indent, $value);
                // 'isstartreviewallowed' section
                $value = $context->find('isstartreviewallowed');
                $buffer .= $this->sectionC42fd713aec1f20d3b6b59a36fe846fc($context, $indent, $value);
                // 'isstopreviewallowed' section
                $value = $context->find('isstopreviewallowed');
                $buffer .= $this->section61e4f536bb8fe832fd0305a726561b17($context, $indent, $value);
                // 'isapproveallowed' section
                $value = $context->find('isapproveallowed');
                $buffer .= $this->sectionD2bf4f382e515c98b11301a86971d384($context, $indent, $value);
                // 'isunapproveallowed' section
                $value = $context->find('isunapproveallowed');
                $buffer .= $this->section997f53e0e8dee2fcfeb580cb74f83fdd($context, $indent, $value);
                // 'isunlinkallowed' section
                $value = $context->find('isunlinkallowed');
                $buffer .= $this->section145a135448847a1bd1fb00835e2f3b73($context, $indent, $value);
                $buffer .= $indent . '                    <li class="dropdown-item">
';
                $buffer .= $indent . '                        <a data-action="plan-delete" href="#">
';
                $buffer .= $indent . '                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section164e871b9170fd2140595670ad4f9c08($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB193148a1db47cc30d2c61ca6c2a8459($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA72c3b20785f26a253c1d57312021849(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr data-region="plan-node" data-id="{{id}}" data-userid="{{userid}}">
            <td>
                <span><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></span>
            </td>
             <td>
               {{#isbasedontemplate}}
               <span class="badge badge-info">{{#str}}yes{{/str}}</span>
               {{/isbasedontemplate}}
               {{^isbasedontemplate}}
               <span class="badge">{{#str}}no{{/str}}</span>
               {{/isbasedontemplate}}
            </td>
            <td>{{statusname}}</td>
            <td>
            {{#canmanage}}
                <div style="display: inline-block;">
                <ul title="{{#str}}edit{{/str}}" class="planactions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown dropdown-menu">
                    <li class="{{^canbeedited}} disabled {{/canbeedited}} dropdown-item">
                        <a href="{{#canbeedited}}
                                    {{pluginbaseurl}}/editplan.php?id={{id}}&amp;userid={{userid}}&amp;return=plans
                                 {{/canbeedited}}
                                 {{^canbeedited}}
                                    #
                                 {{/canbeedited}}
                                 ">
                            {{#pix}}t/edit{{/pix}} {{#str}}editthisplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{#isreopenallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-reopen" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}reopenplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/isreopenallowed}}
                    {{#iscompleteallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-complete" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}completeplan, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/iscompleteallowed}}
                    {{#isrequestreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-request-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}requestreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isrequestreviewallowed}}
                    {{#iscancelreviewrequestallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-cancel-review-request" href="#">{{#pix}}t/edit{{/pix}} {{#str}}cancelreviewrequest, tool_lp{{/str}}</a>
                    </li>
                    {{/iscancelreviewrequestallowed}}
                    {{#isstartreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-start-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}startreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isstartreviewallowed}}
                    {{#isstopreviewallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-stop-review" href="#">{{#pix}}t/edit{{/pix}} {{#str}}stopreview, tool_lp{{/str}}</a>
                    </li>
                    {{/isstopreviewallowed}}
                    {{#isapproveallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-approve" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planapprove, tool_lp{{/str}}</a>
                    </li>
                    {{/isapproveallowed}}
                    {{#isunapproveallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-unapprove" href="#">{{#pix}}t/edit{{/pix}} {{#str}}planunapprove, tool_lp{{/str}}</a>
                    </li>
                    {{/isunapproveallowed}}
                    {{#isunlinkallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-unlink" href="#">
                            {{#pix}}t/edit{{/pix}} {{#str}}unlinkplantemplate, tool_lp{{/str}}
                        </a>
                    </li>
                    {{/isunlinkallowed}}
                    <li class="dropdown-item">
                        <a data-action="plan-delete" href="#">
                            {{#pix}}t/delete{{/pix}} {{#str}}deletethisplan, tool_lp{{/str}}
                        </a>
                    </li>
                    </ul>
                </ul>
            </div>
            {{/canmanage}}
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
                
                $buffer .= $indent . '        <tr data-region="plan-node" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-userid="';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <span><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/plan.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</a></span>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '             <td>
';
                // 'isbasedontemplate' section
                $value = $context->find('isbasedontemplate');
                $buffer .= $this->sectionC26716b10745efdad61bb760e472b3ce($context, $indent, $value);
                // 'isbasedontemplate' inverted section
                $value = $context->find('isbasedontemplate');
                if (empty($value)) {
                    
                    $buffer .= $indent . '               <span class="badge">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionD0ac7f20e9de08dda74d7d5716455c77($context, $indent, $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>';
                $value = $this->resolveValue($context->find('statusname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '            <td>
';
                // 'canmanage' section
                $value = $context->find('canmanage');
                $buffer .= $this->sectionE3ec384946ed3b4a5c06f754fcac353f($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa7d6067d46959966a4bf229173f651e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nouserplans, tool_lp';
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
                
                $buffer .= 'nouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e27a62ff9d87b11696cc77f5117dae1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userevidence, tool_lp';
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
                
                $buffer .= 'userevidence, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF67db98a18769b02644c4e155630bda7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="float-left">
    <a href="{{pluginbaseurl}}/user_evidence_list.php?userid={{userid}}">{{#str}}userevidence, tool_lp{{/str}}</a>
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
                
                $buffer .= $indent . '<div class="float-left">
';
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/user_evidence_list.php?userid=';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3e27a62ff9d87b11696cc77f5117dae1($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23ece2c85c02478798dfc408637c1b86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
// Initialise the JS.
require([\'tool_lp/planactions\'],
        function(ActionsMod) {

    var planActions = new ActionsMod(\'plans\');
    planActions.enhanceMenubar(\'.planactions\');
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
                
                $buffer .= $indent . '// Initialise the JS.
';
                $buffer .= $indent . 'require([\'tool_lp/planactions\'],
';
                $buffer .= $indent . '        function(ActionsMod) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var planActions = new ActionsMod(\'plans\');
';
                $buffer .= $indent . '    planActions.enhanceMenubar(\'.planactions\');
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
