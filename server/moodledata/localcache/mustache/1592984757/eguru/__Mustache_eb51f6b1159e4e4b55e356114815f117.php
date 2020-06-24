<?php

class __Mustache_eb51f6b1159e4e4b55e356114815f117 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_eguru/navbar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="header-main">
';
        $buffer .= $indent . '  <div class="container">
';
        $buffer .= $indent . '	<nav class="navbar navbar-toggleable-md">
';
        $buffer .= $indent . '		<div class="header-logo">
';
        $buffer .= $indent . '		  <a class="navbar-brand" href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= $value;
        $buffer .= '/?redirect=0">
';
        $buffer .= $indent . '			<img src="';
        $value = $this->resolveValue($context->find('logo'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" width="183" height="67" alt="Eguru">
';
        $buffer .= $indent . '		  </a>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
';
        $buffer .= $indent . '		  <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '		</button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<div class="collapse navbar-collapse" id="navbarSupportedContent">
';
        $buffer .= $indent . '		  <div class="custom-menu">
';
        $buffer .= $indent . '			<ul class="navbar-nav mr-auto">
';
        $buffer .= $indent . '			  ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '			</ul>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '		  </div>
';
        $buffer .= $indent . '		  <div class="clearfix"></div>
';
        $buffer .= $indent . '		</div>
';
        $buffer .= $indent . '	</nav>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!--E.O.Header-->';

        return $buffer;
    }
}
