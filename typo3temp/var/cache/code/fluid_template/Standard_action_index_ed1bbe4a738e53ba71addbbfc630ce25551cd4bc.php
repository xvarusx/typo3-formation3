<?php

class Standard_action_index_ed1bbe4a738e53ba71addbbfc630ce25551cd4bc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'dce' => 
  array (
    0 => 'T3\\Dce\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    <h3>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$output9 = '';
$array10 = array (
);
$output9 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array10);

$output9 .= 'currentTemplate';
$arguments7['key'] = $output9;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
    </h3>
    <div>
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['table'] = NULL;
$arguments11['row'] = NULL;
$arguments11['size'] = 'small';
$arguments11['alternativeMarkupIdentifier'] = NULL;
$arguments11['table'] = 'sys_template';
$array13 = array (
);$arguments11['row'] = $renderingContext->getVariableProvider()->getByPath('templateRecord', $array13);

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
        <strong>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$array16 = array (
);return $renderingContext->getVariableProvider()->getByPath('linkWrapTemplateTitle', $array16);
};
$arguments14 = array();
$arguments14['value'] = NULL;

$output6 .= isset($arguments14['value']) ? $arguments14['value'] : $renderChildrenClosure15();

$output6 .= '
        </strong>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
            (';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('templateRecord.sitetitle', $array23)]);

$output22 .= ')
        ';
return $output22;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('templateRecord.sitetitle', $array20);
$array19['1'] = ' != \'\'';

$expression21 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '');};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
    </div>
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
        ';
$array33 = array (
);
$output32 .= $renderingContext->getVariableProvider()->getByPath('manyTemplatesMenu', $array33);

$output32 .= '
    ';
return $output32;
};
$arguments30 = array();
$arguments30['value'] = NULL;

$output29 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output29 .= '
';
return $output29;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('manyTemplatesMenu', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output507 = '';

$output507 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output510 = '';

$output510 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
$output644 = '';

$output644 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
$output647 = '';

$output647 .= '
                <div style="padding-top: 10px;">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments648 = array();
$arguments648['key'] = NULL;
$arguments648['id'] = NULL;
$arguments648['default'] = NULL;
$arguments648['arguments'] = NULL;
$arguments648['extensionName'] = NULL;
$arguments648['languageKey'] = NULL;
$arguments648['alternativeLanguageKeys'] = NULL;
$output650 = '';
$array651 = array (
);
$output650 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array651);

$output650 .= 'editProperty';
$arguments648['key'] = $output650;

$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext)]);

$output647 .= '
                        </h3>
                        <label>';
$array652 = array (
);
$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array652)]);

$output647 .= ' =</label>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments653 = array();
$arguments653['additionalAttributes'] = NULL;
$arguments653['data'] = NULL;
$arguments653['name'] = NULL;
$arguments653['value'] = NULL;
$arguments653['property'] = NULL;
$arguments653['autofocus'] = NULL;
$arguments653['disabled'] = NULL;
$arguments653['maxlength'] = NULL;
$arguments653['readonly'] = NULL;
$arguments653['size'] = NULL;
$arguments653['placeholder'] = NULL;
$arguments653['pattern'] = NULL;
$arguments653['errorClass'] = 'f3-form-error';
$arguments653['class'] = NULL;
$arguments653['dir'] = NULL;
$arguments653['id'] = NULL;
$arguments653['lang'] = NULL;
$arguments653['style'] = NULL;
$arguments653['title'] = NULL;
$arguments653['accesskey'] = NULL;
$arguments653['tabindex'] = NULL;
$arguments653['onclick'] = NULL;
$arguments653['required'] = false;
$arguments653['type'] = 'text';
$arguments653['class'] = 'form-control';
$output655 = '';

$output655 .= 'data[';
$array656 = array (
);
$output655 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array656);

$output655 .= '][value]';
$arguments653['name'] = $output655;
$array657 = array (
);$arguments653['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array657);

$output647 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments653, $renderChildrenClosure654, $renderingContext);

$output647 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments658 = array();
$arguments658['additionalAttributes'] = NULL;
$arguments658['data'] = NULL;
$arguments658['name'] = NULL;
$arguments658['value'] = NULL;
$arguments658['property'] = NULL;
$arguments658['disabled'] = NULL;
$arguments658['class'] = NULL;
$arguments658['dir'] = NULL;
$arguments658['id'] = NULL;
$arguments658['lang'] = NULL;
$arguments658['style'] = NULL;
$arguments658['title'] = NULL;
$arguments658['accesskey'] = NULL;
$arguments658['tabindex'] = NULL;
$arguments658['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments660 = array();
$arguments660['key'] = NULL;
$arguments660['id'] = NULL;
$arguments660['default'] = NULL;
$arguments660['arguments'] = NULL;
$arguments660['extensionName'] = NULL;
$arguments660['languageKey'] = NULL;
$arguments660['alternativeLanguageKeys'] = NULL;
$output662 = '';
$array663 = array (
);
$output662 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array663);

$output662 .= 'updateButton';
$arguments660['key'] = $output662;
$arguments658['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);
$arguments658['class'] = 'btn btn-default';
$arguments658['name'] = 'update_value';

$output647 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);

$output647 .= '
                </div>
                <div style="padding-top: 20px">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments664 = array();
$arguments664['key'] = NULL;
$arguments664['id'] = NULL;
$arguments664['default'] = NULL;
$arguments664['arguments'] = NULL;
$arguments664['extensionName'] = NULL;
$arguments664['languageKey'] = NULL;
$arguments664['alternativeLanguageKeys'] = NULL;
$output666 = '';
$array667 = array (
);
$output666 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array667);

$output666 .= 'addProperty';
$arguments664['key'] = $output666;

$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext)]);

$output647 .= '
                        </h3>
                    </div>
                    <div class="form-inline form-inline-spaced">
                        <div class="form-group">
                            <label class="sr-only">';
$array668 = array (
);
$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array668)]);

$output647 .= '.</label>
                            <div class="input-group">
                                <div class="input-group-addon">';
$array669 = array (
);
$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array669)]);

$output647 .= '.</div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments670 = array();
$arguments670['additionalAttributes'] = NULL;
$arguments670['data'] = NULL;
$arguments670['name'] = NULL;
$arguments670['value'] = NULL;
$arguments670['property'] = NULL;
$arguments670['autofocus'] = NULL;
$arguments670['disabled'] = NULL;
$arguments670['maxlength'] = NULL;
$arguments670['readonly'] = NULL;
$arguments670['size'] = NULL;
$arguments670['placeholder'] = NULL;
$arguments670['pattern'] = NULL;
$arguments670['errorClass'] = 'f3-form-error';
$arguments670['class'] = NULL;
$arguments670['dir'] = NULL;
$arguments670['id'] = NULL;
$arguments670['lang'] = NULL;
$arguments670['style'] = NULL;
$arguments670['title'] = NULL;
$arguments670['accesskey'] = NULL;
$arguments670['tabindex'] = NULL;
$arguments670['onclick'] = NULL;
$arguments670['required'] = false;
$arguments670['type'] = 'text';
$arguments670['class'] = 'form-control';
$output672 = '';

$output672 .= 'data[';
$array673 = array (
);
$output672 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array673);

$output672 .= '][name]';
$arguments670['name'] = $output672;

$output647 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext);

$output647 .= '
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>=</label>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments674 = array();
$arguments674['additionalAttributes'] = NULL;
$arguments674['data'] = NULL;
$arguments674['name'] = NULL;
$arguments674['value'] = NULL;
$arguments674['property'] = NULL;
$arguments674['autofocus'] = NULL;
$arguments674['disabled'] = NULL;
$arguments674['maxlength'] = NULL;
$arguments674['readonly'] = NULL;
$arguments674['size'] = NULL;
$arguments674['placeholder'] = NULL;
$arguments674['pattern'] = NULL;
$arguments674['errorClass'] = 'f3-form-error';
$arguments674['class'] = NULL;
$arguments674['dir'] = NULL;
$arguments674['id'] = NULL;
$arguments674['lang'] = NULL;
$arguments674['style'] = NULL;
$arguments674['title'] = NULL;
$arguments674['accesskey'] = NULL;
$arguments674['tabindex'] = NULL;
$arguments674['onclick'] = NULL;
$arguments674['required'] = false;
$arguments674['type'] = 'text';
$arguments674['class'] = 'form-control';
$output676 = '';

$output676 .= 'data[';
$array677 = array (
);
$output676 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array677);

$output676 .= '][propertyValue]';
$arguments674['name'] = $output676;

$output647 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext);

$output647 .= '
                    </div>
                    <div class="form-group">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure679 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments678 = array();
$arguments678['additionalAttributes'] = NULL;
$arguments678['data'] = NULL;
$arguments678['name'] = NULL;
$arguments678['value'] = NULL;
$arguments678['property'] = NULL;
$arguments678['disabled'] = NULL;
$arguments678['class'] = NULL;
$arguments678['dir'] = NULL;
$arguments678['id'] = NULL;
$arguments678['lang'] = NULL;
$arguments678['style'] = NULL;
$arguments678['title'] = NULL;
$arguments678['accesskey'] = NULL;
$arguments678['tabindex'] = NULL;
$arguments678['onclick'] = NULL;
$arguments678['class'] = 'btn btn-default';
$arguments678['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments680 = array();
$arguments680['key'] = NULL;
$arguments680['id'] = NULL;
$arguments680['default'] = NULL;
$arguments680['arguments'] = NULL;
$arguments680['extensionName'] = NULL;
$arguments680['languageKey'] = NULL;
$arguments680['alternativeLanguageKeys'] = NULL;
$output682 = '';
$array683 = array (
);
$output682 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array683);

$output682 .= 'addButton';
$arguments680['key'] = $output682;
$arguments678['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext);

$output647 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments678, $renderChildrenClosure679, $renderingContext);

$output647 .= '
                    </div>
                </div>
                <div style="padding-top: 20px;">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure685 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments684 = array();
$arguments684['key'] = NULL;
$arguments684['id'] = NULL;
$arguments684['default'] = NULL;
$arguments684['arguments'] = NULL;
$arguments684['extensionName'] = NULL;
$arguments684['languageKey'] = NULL;
$arguments684['alternativeLanguageKeys'] = NULL;
$output686 = '';
$array687 = array (
);
$output686 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array687);

$output686 .= 'clearObject';
$arguments684['key'] = $output686;

$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments684, $renderChildrenClosure685, $renderingContext)]);

$output647 .= '
                        </h3>
                    </div>
                    <div class="form-inline form-inline-spaced">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    ';
$array688 = array (
);
$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array688)]);

$output647 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
$output691 = '';

$output691 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments692 = array();
$arguments692['key'] = NULL;
$arguments692['id'] = NULL;
$arguments692['default'] = NULL;
$arguments692['arguments'] = NULL;
$arguments692['extensionName'] = NULL;
$arguments692['languageKey'] = NULL;
$arguments692['alternativeLanguageKeys'] = NULL;
$output694 = '';
$array695 = array (
);
$output694 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array695);

$output694 .= 'clear';
$arguments692['key'] = $output694;

$output691 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);

$output691 .= '
                                    ';
return $output691;
};
$arguments689 = array();
$arguments689['value'] = NULL;
$arguments689['mode'] = 'upper';
$arguments689['mode'] = 'upper';

$output647 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext)]);

$output647 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure697 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments696 = array();
$arguments696['additionalAttributes'] = NULL;
$arguments696['data'] = NULL;
$arguments696['name'] = NULL;
$arguments696['value'] = NULL;
$arguments696['property'] = NULL;
$arguments696['disabled'] = NULL;
$arguments696['errorClass'] = 'f3-form-error';
$arguments696['class'] = NULL;
$arguments696['dir'] = NULL;
$arguments696['id'] = NULL;
$arguments696['lang'] = NULL;
$arguments696['style'] = NULL;
$arguments696['title'] = NULL;
$arguments696['accesskey'] = NULL;
$arguments696['tabindex'] = NULL;
$arguments696['onclick'] = NULL;
$arguments696['checked'] = NULL;
$arguments696['multiple'] = false;
$output698 = '';

$output698 .= 'data[';
$array699 = array (
);
$output698 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array699);

$output698 .= '][clearValue]';
$arguments696['name'] = $output698;
$arguments696['value'] = 1;

$output647 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments696, $renderChildrenClosure697, $renderingContext);

$output647 .= '
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['additionalAttributes'] = NULL;
$arguments700['data'] = NULL;
$arguments700['name'] = NULL;
$arguments700['value'] = NULL;
$arguments700['property'] = NULL;
$arguments700['disabled'] = NULL;
$arguments700['class'] = NULL;
$arguments700['dir'] = NULL;
$arguments700['id'] = NULL;
$arguments700['lang'] = NULL;
$arguments700['style'] = NULL;
$arguments700['title'] = NULL;
$arguments700['accesskey'] = NULL;
$arguments700['tabindex'] = NULL;
$arguments700['onclick'] = NULL;
$arguments700['class'] = 'btn btn-default';
$arguments700['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments702 = array();
$arguments702['key'] = NULL;
$arguments702['id'] = NULL;
$arguments702['default'] = NULL;
$arguments702['arguments'] = NULL;
$arguments702['extensionName'] = NULL;
$arguments702['languageKey'] = NULL;
$arguments702['alternativeLanguageKeys'] = NULL;
$output704 = '';
$array705 = array (
);
$output704 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array705);

$output704 .= 'clearButton';
$arguments702['key'] = $output704;
$arguments700['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext);

$output647 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext);

$output647 .= '
                        </div>
                    </div>
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure707 = function() use ($renderingContext, $self) {
$output739 = '';

$output739 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output748 = '';

$output748 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure750 = function() use ($renderingContext, $self) {
$output752 = '';

$output752 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure754 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments753 = array();
$arguments753['key'] = NULL;
$arguments753['id'] = NULL;
$arguments753['default'] = NULL;
$arguments753['arguments'] = NULL;
$arguments753['extensionName'] = NULL;
$arguments753['languageKey'] = NULL;
$arguments753['alternativeLanguageKeys'] = NULL;
$output755 = '';
$array756 = array (
);
$output755 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array756);

$output755 .= 'addKey';
$arguments753['key'] = $output755;
// Rendering Array
$array757 = array();
$array758 = array (
);$array757['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array758);
$arguments753['arguments'] = $array757;

$output752 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments753, $renderChildrenClosure754, $renderingContext)]);

$output752 .= '
                            ';
return $output752;
};
$arguments749 = array();
$arguments749['additionalAttributes'] = NULL;
$arguments749['data'] = NULL;
$arguments749['uri'] = NULL;
$arguments749['defaultScheme'] = 'http';
$arguments749['class'] = NULL;
$arguments749['dir'] = NULL;
$arguments749['id'] = NULL;
$arguments749['lang'] = NULL;
$arguments749['style'] = NULL;
$arguments749['title'] = NULL;
$arguments749['accesskey'] = NULL;
$arguments749['tabindex'] = NULL;
$arguments749['onclick'] = NULL;
$arguments749['name'] = NULL;
$arguments749['rel'] = NULL;
$arguments749['rev'] = NULL;
$arguments749['target'] = NULL;
$array751 = array (
);$arguments749['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array751);
$arguments749['defaultScheme'] = '';
$arguments749['class'] = 'btn btn-default';

$output748 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments749, $renderChildrenClosure750, $renderingContext);

$output748 .= '
                        ';
return $output748;
};
$arguments743 = array();
$arguments743['then'] = NULL;
$arguments743['else'] = NULL;
$arguments743['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array745 = array();
$array746 = array (
);$array745['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array746);

$expression747 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments743['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression747(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array745)
					),
					$renderingContext
				);
$arguments743['__thenClosure'] = $renderChildrenClosure744;

$output742 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext);

$output742 .= '
                    ';
return $output742;
};
$arguments740 = array();

$output739 .= '';

$output739 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure760 = function() use ($renderingContext, $self) {
$output761 = '';

$output761 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
$output765 = '';

$output765 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure767 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments766 = array();
$arguments766['key'] = NULL;
$arguments766['id'] = NULL;
$arguments766['default'] = NULL;
$arguments766['arguments'] = NULL;
$arguments766['extensionName'] = NULL;
$arguments766['languageKey'] = NULL;
$arguments766['alternativeLanguageKeys'] = NULL;
$output768 = '';
$array769 = array (
);
$output768 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array769);

$output768 .= 'removeKey';
$arguments766['key'] = $output768;
// Rendering Array
$array770 = array();
$array771 = array (
);$array770['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array771);
$arguments766['arguments'] = $array770;

$output765 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments766, $renderChildrenClosure767, $renderingContext)]);

$output765 .= '
                        ';
return $output765;
};
$arguments762 = array();
$arguments762['additionalAttributes'] = NULL;
$arguments762['data'] = NULL;
$arguments762['uri'] = NULL;
$arguments762['defaultScheme'] = 'http';
$arguments762['class'] = NULL;
$arguments762['dir'] = NULL;
$arguments762['id'] = NULL;
$arguments762['lang'] = NULL;
$arguments762['style'] = NULL;
$arguments762['title'] = NULL;
$arguments762['accesskey'] = NULL;
$arguments762['tabindex'] = NULL;
$arguments762['onclick'] = NULL;
$arguments762['name'] = NULL;
$arguments762['rel'] = NULL;
$arguments762['rev'] = NULL;
$arguments762['target'] = NULL;
$array764 = array (
);$arguments762['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array764);
$arguments762['defaultScheme'] = '';
$arguments762['class'] = 'btn btn-default';

$output761 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments762, $renderChildrenClosure763, $renderingContext);

$output761 .= '
                    ';
return $output761;
};
$arguments759 = array();
$arguments759['if'] = NULL;

$output739 .= '';

$output739 .= '
                ';
return $output739;
};
$arguments706 = array();
$arguments706['then'] = NULL;
$arguments706['else'] = NULL;
$arguments706['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array736 = array();
$array737 = array (
);$array736['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array737);

$expression738 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments706['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression738(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array736)
					),
					$renderingContext
				);
$arguments706['__thenClosure'] = function() use ($renderingContext, $self) {
$output708 = '';

$output708 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure710 = function() use ($renderingContext, $self) {
$output714 = '';

$output714 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure716 = function() use ($renderingContext, $self) {
$output718 = '';

$output718 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments719 = array();
$arguments719['key'] = NULL;
$arguments719['id'] = NULL;
$arguments719['default'] = NULL;
$arguments719['arguments'] = NULL;
$arguments719['extensionName'] = NULL;
$arguments719['languageKey'] = NULL;
$arguments719['alternativeLanguageKeys'] = NULL;
$output721 = '';
$array722 = array (
);
$output721 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array722);

$output721 .= 'addKey';
$arguments719['key'] = $output721;
// Rendering Array
$array723 = array();
$array724 = array (
);$array723['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array724);
$arguments719['arguments'] = $array723;

$output718 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext)]);

$output718 .= '
                            ';
return $output718;
};
$arguments715 = array();
$arguments715['additionalAttributes'] = NULL;
$arguments715['data'] = NULL;
$arguments715['uri'] = NULL;
$arguments715['defaultScheme'] = 'http';
$arguments715['class'] = NULL;
$arguments715['dir'] = NULL;
$arguments715['id'] = NULL;
$arguments715['lang'] = NULL;
$arguments715['style'] = NULL;
$arguments715['title'] = NULL;
$arguments715['accesskey'] = NULL;
$arguments715['tabindex'] = NULL;
$arguments715['onclick'] = NULL;
$arguments715['name'] = NULL;
$arguments715['rel'] = NULL;
$arguments715['rev'] = NULL;
$arguments715['target'] = NULL;
$array717 = array (
);$arguments715['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array717);
$arguments715['defaultScheme'] = '';
$arguments715['class'] = 'btn btn-default';

$output714 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments715, $renderChildrenClosure716, $renderingContext);

$output714 .= '
                        ';
return $output714;
};
$arguments709 = array();
$arguments709['then'] = NULL;
$arguments709['else'] = NULL;
$arguments709['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array711 = array();
$array712 = array (
);$array711['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array712);

$expression713 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments709['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression713(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array711)
					),
					$renderingContext
				);
$arguments709['__thenClosure'] = $renderChildrenClosure710;

$output708 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments709, $renderChildrenClosure710, $renderingContext);

$output708 .= '
                    ';
return $output708;
};
$arguments706['__elseClosures'][] = function() use ($renderingContext, $self) {
$output725 = '';

$output725 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
$output729 = '';

$output729 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure731 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments730 = array();
$arguments730['key'] = NULL;
$arguments730['id'] = NULL;
$arguments730['default'] = NULL;
$arguments730['arguments'] = NULL;
$arguments730['extensionName'] = NULL;
$arguments730['languageKey'] = NULL;
$arguments730['alternativeLanguageKeys'] = NULL;
$output732 = '';
$array733 = array (
);
$output732 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array733);

$output732 .= 'removeKey';
$arguments730['key'] = $output732;
// Rendering Array
$array734 = array();
$array735 = array (
);$array734['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array735);
$arguments730['arguments'] = $array734;

$output729 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments730, $renderChildrenClosure731, $renderingContext)]);

$output729 .= '
                        ';
return $output729;
};
$arguments726 = array();
$arguments726['additionalAttributes'] = NULL;
$arguments726['data'] = NULL;
$arguments726['uri'] = NULL;
$arguments726['defaultScheme'] = 'http';
$arguments726['class'] = NULL;
$arguments726['dir'] = NULL;
$arguments726['id'] = NULL;
$arguments726['lang'] = NULL;
$arguments726['style'] = NULL;
$arguments726['title'] = NULL;
$arguments726['accesskey'] = NULL;
$arguments726['tabindex'] = NULL;
$arguments726['onclick'] = NULL;
$arguments726['name'] = NULL;
$arguments726['rel'] = NULL;
$arguments726['rev'] = NULL;
$arguments726['target'] = NULL;
$array728 = array (
);$arguments726['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array728);
$arguments726['defaultScheme'] = '';
$arguments726['class'] = 'btn btn-default';

$output725 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext);

$output725 .= '
                    ';
return $output725;
};

$output647 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments706, $renderChildrenClosure707, $renderingContext);

$output647 .= '
            ';
return $output647;
};
$arguments645 = array();

$output644 .= '';

$output644 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure773 = function() use ($renderingContext, $self) {
$output774 = '';

$output774 .= '
                ';
$array775 = array (
);
$output774 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array775)]);

$output774 .= ' = <strong>';
$array776 = array (
);
$output774 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array776)]);

$output774 .= '</strong>
            ';
return $output774;
};
$arguments772 = array();
$arguments772['if'] = NULL;

$output644 .= '';

$output644 .= '
        ';
return $output644;
};
$arguments511 = array();
$arguments511['then'] = NULL;
$arguments511['else'] = NULL;
$arguments511['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array641 = array();
$array642 = array (
);$array641['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array642);

$expression643 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments511['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression643(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array641)
					),
					$renderingContext
				);
$arguments511['__thenClosure'] = function() use ($renderingContext, $self) {
$output513 = '';

$output513 .= '
                <div style="padding-top: 10px;">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments514 = array();
$arguments514['key'] = NULL;
$arguments514['id'] = NULL;
$arguments514['default'] = NULL;
$arguments514['arguments'] = NULL;
$arguments514['extensionName'] = NULL;
$arguments514['languageKey'] = NULL;
$arguments514['alternativeLanguageKeys'] = NULL;
$output516 = '';
$array517 = array (
);
$output516 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array517);

$output516 .= 'editProperty';
$arguments514['key'] = $output516;

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments514, $renderChildrenClosure515, $renderingContext)]);

$output513 .= '
                        </h3>
                        <label>';
$array518 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array518)]);

$output513 .= ' =</label>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments519 = array();
$arguments519['additionalAttributes'] = NULL;
$arguments519['data'] = NULL;
$arguments519['name'] = NULL;
$arguments519['value'] = NULL;
$arguments519['property'] = NULL;
$arguments519['autofocus'] = NULL;
$arguments519['disabled'] = NULL;
$arguments519['maxlength'] = NULL;
$arguments519['readonly'] = NULL;
$arguments519['size'] = NULL;
$arguments519['placeholder'] = NULL;
$arguments519['pattern'] = NULL;
$arguments519['errorClass'] = 'f3-form-error';
$arguments519['class'] = NULL;
$arguments519['dir'] = NULL;
$arguments519['id'] = NULL;
$arguments519['lang'] = NULL;
$arguments519['style'] = NULL;
$arguments519['title'] = NULL;
$arguments519['accesskey'] = NULL;
$arguments519['tabindex'] = NULL;
$arguments519['onclick'] = NULL;
$arguments519['required'] = false;
$arguments519['type'] = 'text';
$arguments519['class'] = 'form-control';
$output521 = '';

$output521 .= 'data[';
$array522 = array (
);
$output521 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array522);

$output521 .= '][value]';
$arguments519['name'] = $output521;
$array523 = array (
);$arguments519['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array523);

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext);

$output513 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['additionalAttributes'] = NULL;
$arguments524['data'] = NULL;
$arguments524['name'] = NULL;
$arguments524['value'] = NULL;
$arguments524['property'] = NULL;
$arguments524['disabled'] = NULL;
$arguments524['class'] = NULL;
$arguments524['dir'] = NULL;
$arguments524['id'] = NULL;
$arguments524['lang'] = NULL;
$arguments524['style'] = NULL;
$arguments524['title'] = NULL;
$arguments524['accesskey'] = NULL;
$arguments524['tabindex'] = NULL;
$arguments524['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments526 = array();
$arguments526['key'] = NULL;
$arguments526['id'] = NULL;
$arguments526['default'] = NULL;
$arguments526['arguments'] = NULL;
$arguments526['extensionName'] = NULL;
$arguments526['languageKey'] = NULL;
$arguments526['alternativeLanguageKeys'] = NULL;
$output528 = '';
$array529 = array (
);
$output528 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array529);

$output528 .= 'updateButton';
$arguments526['key'] = $output528;
$arguments524['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);
$arguments524['class'] = 'btn btn-default';
$arguments524['name'] = 'update_value';

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output513 .= '
                </div>
                <div style="padding-top: 20px">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments530 = array();
$arguments530['key'] = NULL;
$arguments530['id'] = NULL;
$arguments530['default'] = NULL;
$arguments530['arguments'] = NULL;
$arguments530['extensionName'] = NULL;
$arguments530['languageKey'] = NULL;
$arguments530['alternativeLanguageKeys'] = NULL;
$output532 = '';
$array533 = array (
);
$output532 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array533);

$output532 .= 'addProperty';
$arguments530['key'] = $output532;

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext)]);

$output513 .= '
                        </h3>
                    </div>
                    <div class="form-inline form-inline-spaced">
                        <div class="form-group">
                            <label class="sr-only">';
$array534 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array534)]);

$output513 .= '.</label>
                            <div class="input-group">
                                <div class="input-group-addon">';
$array535 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array535)]);

$output513 .= '.</div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['additionalAttributes'] = NULL;
$arguments536['data'] = NULL;
$arguments536['name'] = NULL;
$arguments536['value'] = NULL;
$arguments536['property'] = NULL;
$arguments536['autofocus'] = NULL;
$arguments536['disabled'] = NULL;
$arguments536['maxlength'] = NULL;
$arguments536['readonly'] = NULL;
$arguments536['size'] = NULL;
$arguments536['placeholder'] = NULL;
$arguments536['pattern'] = NULL;
$arguments536['errorClass'] = 'f3-form-error';
$arguments536['class'] = NULL;
$arguments536['dir'] = NULL;
$arguments536['id'] = NULL;
$arguments536['lang'] = NULL;
$arguments536['style'] = NULL;
$arguments536['title'] = NULL;
$arguments536['accesskey'] = NULL;
$arguments536['tabindex'] = NULL;
$arguments536['onclick'] = NULL;
$arguments536['required'] = false;
$arguments536['type'] = 'text';
$arguments536['class'] = 'form-control';
$output538 = '';

$output538 .= 'data[';
$array539 = array (
);
$output538 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array539);

$output538 .= '][name]';
$arguments536['name'] = $output538;

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output513 .= '
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>=</label>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments540 = array();
$arguments540['additionalAttributes'] = NULL;
$arguments540['data'] = NULL;
$arguments540['name'] = NULL;
$arguments540['value'] = NULL;
$arguments540['property'] = NULL;
$arguments540['autofocus'] = NULL;
$arguments540['disabled'] = NULL;
$arguments540['maxlength'] = NULL;
$arguments540['readonly'] = NULL;
$arguments540['size'] = NULL;
$arguments540['placeholder'] = NULL;
$arguments540['pattern'] = NULL;
$arguments540['errorClass'] = 'f3-form-error';
$arguments540['class'] = NULL;
$arguments540['dir'] = NULL;
$arguments540['id'] = NULL;
$arguments540['lang'] = NULL;
$arguments540['style'] = NULL;
$arguments540['title'] = NULL;
$arguments540['accesskey'] = NULL;
$arguments540['tabindex'] = NULL;
$arguments540['onclick'] = NULL;
$arguments540['required'] = false;
$arguments540['type'] = 'text';
$arguments540['class'] = 'form-control';
$output542 = '';

$output542 .= 'data[';
$array543 = array (
);
$output542 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array543);

$output542 .= '][propertyValue]';
$arguments540['name'] = $output542;

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output513 .= '
                    </div>
                    <div class="form-group">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['additionalAttributes'] = NULL;
$arguments544['data'] = NULL;
$arguments544['name'] = NULL;
$arguments544['value'] = NULL;
$arguments544['property'] = NULL;
$arguments544['disabled'] = NULL;
$arguments544['class'] = NULL;
$arguments544['dir'] = NULL;
$arguments544['id'] = NULL;
$arguments544['lang'] = NULL;
$arguments544['style'] = NULL;
$arguments544['title'] = NULL;
$arguments544['accesskey'] = NULL;
$arguments544['tabindex'] = NULL;
$arguments544['onclick'] = NULL;
$arguments544['class'] = 'btn btn-default';
$arguments544['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments546 = array();
$arguments546['key'] = NULL;
$arguments546['id'] = NULL;
$arguments546['default'] = NULL;
$arguments546['arguments'] = NULL;
$arguments546['extensionName'] = NULL;
$arguments546['languageKey'] = NULL;
$arguments546['alternativeLanguageKeys'] = NULL;
$output548 = '';
$array549 = array (
);
$output548 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array549);

$output548 .= 'addButton';
$arguments546['key'] = $output548;
$arguments544['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments546, $renderChildrenClosure547, $renderingContext);

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output513 .= '
                    </div>
                </div>
                <div style="padding-top: 20px;">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments550 = array();
$arguments550['key'] = NULL;
$arguments550['id'] = NULL;
$arguments550['default'] = NULL;
$arguments550['arguments'] = NULL;
$arguments550['extensionName'] = NULL;
$arguments550['languageKey'] = NULL;
$arguments550['alternativeLanguageKeys'] = NULL;
$output552 = '';
$array553 = array (
);
$output552 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array553);

$output552 .= 'clearObject';
$arguments550['key'] = $output552;

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext)]);

$output513 .= '
                        </h3>
                    </div>
                    <div class="form-inline form-inline-spaced">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    ';
$array554 = array (
);
$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array554)]);

$output513 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
$output557 = '';

$output557 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments558 = array();
$arguments558['key'] = NULL;
$arguments558['id'] = NULL;
$arguments558['default'] = NULL;
$arguments558['arguments'] = NULL;
$arguments558['extensionName'] = NULL;
$arguments558['languageKey'] = NULL;
$arguments558['alternativeLanguageKeys'] = NULL;
$output560 = '';
$array561 = array (
);
$output560 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array561);

$output560 .= 'clear';
$arguments558['key'] = $output560;

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output557 .= '
                                    ';
return $output557;
};
$arguments555 = array();
$arguments555['value'] = NULL;
$arguments555['mode'] = 'upper';
$arguments555['mode'] = 'upper';

$output513 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext)]);

$output513 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments562 = array();
$arguments562['additionalAttributes'] = NULL;
$arguments562['data'] = NULL;
$arguments562['name'] = NULL;
$arguments562['value'] = NULL;
$arguments562['property'] = NULL;
$arguments562['disabled'] = NULL;
$arguments562['errorClass'] = 'f3-form-error';
$arguments562['class'] = NULL;
$arguments562['dir'] = NULL;
$arguments562['id'] = NULL;
$arguments562['lang'] = NULL;
$arguments562['style'] = NULL;
$arguments562['title'] = NULL;
$arguments562['accesskey'] = NULL;
$arguments562['tabindex'] = NULL;
$arguments562['onclick'] = NULL;
$arguments562['checked'] = NULL;
$arguments562['multiple'] = false;
$output564 = '';

$output564 .= 'data[';
$array565 = array (
);
$output564 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array565);

$output564 .= '][clearValue]';
$arguments562['name'] = $output564;
$arguments562['value'] = 1;

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output513 .= '
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments566 = array();
$arguments566['additionalAttributes'] = NULL;
$arguments566['data'] = NULL;
$arguments566['name'] = NULL;
$arguments566['value'] = NULL;
$arguments566['property'] = NULL;
$arguments566['disabled'] = NULL;
$arguments566['class'] = NULL;
$arguments566['dir'] = NULL;
$arguments566['id'] = NULL;
$arguments566['lang'] = NULL;
$arguments566['style'] = NULL;
$arguments566['title'] = NULL;
$arguments566['accesskey'] = NULL;
$arguments566['tabindex'] = NULL;
$arguments566['onclick'] = NULL;
$arguments566['class'] = 'btn btn-default';
$arguments566['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments568 = array();
$arguments568['key'] = NULL;
$arguments568['id'] = NULL;
$arguments568['default'] = NULL;
$arguments568['arguments'] = NULL;
$arguments568['extensionName'] = NULL;
$arguments568['languageKey'] = NULL;
$arguments568['alternativeLanguageKeys'] = NULL;
$output570 = '';
$array571 = array (
);
$output570 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array571);

$output570 .= 'clearButton';
$arguments568['key'] = $output570;
$arguments566['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext);

$output513 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output513 .= '
                        </div>
                    </div>
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
$output614 = '';

$output614 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure616 = function() use ($renderingContext, $self) {
$output618 = '';

$output618 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure620 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments619 = array();
$arguments619['key'] = NULL;
$arguments619['id'] = NULL;
$arguments619['default'] = NULL;
$arguments619['arguments'] = NULL;
$arguments619['extensionName'] = NULL;
$arguments619['languageKey'] = NULL;
$arguments619['alternativeLanguageKeys'] = NULL;
$output621 = '';
$array622 = array (
);
$output621 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array622);

$output621 .= 'addKey';
$arguments619['key'] = $output621;
// Rendering Array
$array623 = array();
$array624 = array (
);$array623['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array624);
$arguments619['arguments'] = $array623;

$output618 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments619, $renderChildrenClosure620, $renderingContext)]);

$output618 .= '
                            ';
return $output618;
};
$arguments615 = array();
$arguments615['additionalAttributes'] = NULL;
$arguments615['data'] = NULL;
$arguments615['uri'] = NULL;
$arguments615['defaultScheme'] = 'http';
$arguments615['class'] = NULL;
$arguments615['dir'] = NULL;
$arguments615['id'] = NULL;
$arguments615['lang'] = NULL;
$arguments615['style'] = NULL;
$arguments615['title'] = NULL;
$arguments615['accesskey'] = NULL;
$arguments615['tabindex'] = NULL;
$arguments615['onclick'] = NULL;
$arguments615['name'] = NULL;
$arguments615['rel'] = NULL;
$arguments615['rev'] = NULL;
$arguments615['target'] = NULL;
$array617 = array (
);$arguments615['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array617);
$arguments615['defaultScheme'] = '';
$arguments615['class'] = 'btn btn-default';

$output614 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments615, $renderChildrenClosure616, $renderingContext);

$output614 .= '
                        ';
return $output614;
};
$arguments609 = array();
$arguments609['then'] = NULL;
$arguments609['else'] = NULL;
$arguments609['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array611 = array();
$array612 = array (
);$array611['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array612);

$expression613 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments609['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression613(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array611)
					),
					$renderingContext
				);
$arguments609['__thenClosure'] = $renderChildrenClosure610;

$output608 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output608 .= '
                    ';
return $output608;
};
$arguments606 = array();

$output605 .= '';

$output605 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
$output627 = '';

$output627 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure629 = function() use ($renderingContext, $self) {
$output631 = '';

$output631 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments632 = array();
$arguments632['key'] = NULL;
$arguments632['id'] = NULL;
$arguments632['default'] = NULL;
$arguments632['arguments'] = NULL;
$arguments632['extensionName'] = NULL;
$arguments632['languageKey'] = NULL;
$arguments632['alternativeLanguageKeys'] = NULL;
$output634 = '';
$array635 = array (
);
$output634 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array635);

$output634 .= 'removeKey';
$arguments632['key'] = $output634;
// Rendering Array
$array636 = array();
$array637 = array (
);$array636['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array637);
$arguments632['arguments'] = $array636;

$output631 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments632, $renderChildrenClosure633, $renderingContext)]);

$output631 .= '
                        ';
return $output631;
};
$arguments628 = array();
$arguments628['additionalAttributes'] = NULL;
$arguments628['data'] = NULL;
$arguments628['uri'] = NULL;
$arguments628['defaultScheme'] = 'http';
$arguments628['class'] = NULL;
$arguments628['dir'] = NULL;
$arguments628['id'] = NULL;
$arguments628['lang'] = NULL;
$arguments628['style'] = NULL;
$arguments628['title'] = NULL;
$arguments628['accesskey'] = NULL;
$arguments628['tabindex'] = NULL;
$arguments628['onclick'] = NULL;
$arguments628['name'] = NULL;
$arguments628['rel'] = NULL;
$arguments628['rev'] = NULL;
$arguments628['target'] = NULL;
$array630 = array (
);$arguments628['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array630);
$arguments628['defaultScheme'] = '';
$arguments628['class'] = 'btn btn-default';

$output627 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments628, $renderChildrenClosure629, $renderingContext);

$output627 .= '
                    ';
return $output627;
};
$arguments625 = array();
$arguments625['if'] = NULL;

$output605 .= '';

$output605 .= '
                ';
return $output605;
};
$arguments572 = array();
$arguments572['then'] = NULL;
$arguments572['else'] = NULL;
$arguments572['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array602 = array();
$array603 = array (
);$array602['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array603);

$expression604 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments572['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression604(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array602)
					),
					$renderingContext
				);
$arguments572['__thenClosure'] = function() use ($renderingContext, $self) {
$output574 = '';

$output574 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$output580 = '';

$output580 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$output584 = '';

$output584 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments585 = array();
$arguments585['key'] = NULL;
$arguments585['id'] = NULL;
$arguments585['default'] = NULL;
$arguments585['arguments'] = NULL;
$arguments585['extensionName'] = NULL;
$arguments585['languageKey'] = NULL;
$arguments585['alternativeLanguageKeys'] = NULL;
$output587 = '';
$array588 = array (
);
$output587 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array588);

$output587 .= 'addKey';
$arguments585['key'] = $output587;
// Rendering Array
$array589 = array();
$array590 = array (
);$array589['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array590);
$arguments585['arguments'] = $array589;

$output584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext)]);

$output584 .= '
                            ';
return $output584;
};
$arguments581 = array();
$arguments581['additionalAttributes'] = NULL;
$arguments581['data'] = NULL;
$arguments581['uri'] = NULL;
$arguments581['defaultScheme'] = 'http';
$arguments581['class'] = NULL;
$arguments581['dir'] = NULL;
$arguments581['id'] = NULL;
$arguments581['lang'] = NULL;
$arguments581['style'] = NULL;
$arguments581['title'] = NULL;
$arguments581['accesskey'] = NULL;
$arguments581['tabindex'] = NULL;
$arguments581['onclick'] = NULL;
$arguments581['name'] = NULL;
$arguments581['rel'] = NULL;
$arguments581['rev'] = NULL;
$arguments581['target'] = NULL;
$array583 = array (
);$arguments581['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array583);
$arguments581['defaultScheme'] = '';
$arguments581['class'] = 'btn btn-default';

$output580 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output580 .= '
                        ';
return $output580;
};
$arguments575 = array();
$arguments575['then'] = NULL;
$arguments575['else'] = NULL;
$arguments575['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array577 = array();
$array578 = array (
);$array577['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array578);

$expression579 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments575['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression579(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array577)
					),
					$renderingContext
				);
$arguments575['__thenClosure'] = $renderChildrenClosure576;

$output574 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext);

$output574 .= '
                    ';
return $output574;
};
$arguments572['__elseClosures'][] = function() use ($renderingContext, $self) {
$output591 = '';

$output591 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
$output595 = '';

$output595 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments596 = array();
$arguments596['key'] = NULL;
$arguments596['id'] = NULL;
$arguments596['default'] = NULL;
$arguments596['arguments'] = NULL;
$arguments596['extensionName'] = NULL;
$arguments596['languageKey'] = NULL;
$arguments596['alternativeLanguageKeys'] = NULL;
$output598 = '';
$array599 = array (
);
$output598 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array599);

$output598 .= 'removeKey';
$arguments596['key'] = $output598;
// Rendering Array
$array600 = array();
$array601 = array (
);$array600['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array601);
$arguments596['arguments'] = $array600;

$output595 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext)]);

$output595 .= '
                        ';
return $output595;
};
$arguments592 = array();
$arguments592['additionalAttributes'] = NULL;
$arguments592['data'] = NULL;
$arguments592['uri'] = NULL;
$arguments592['defaultScheme'] = 'http';
$arguments592['class'] = NULL;
$arguments592['dir'] = NULL;
$arguments592['id'] = NULL;
$arguments592['lang'] = NULL;
$arguments592['style'] = NULL;
$arguments592['title'] = NULL;
$arguments592['accesskey'] = NULL;
$arguments592['tabindex'] = NULL;
$arguments592['onclick'] = NULL;
$arguments592['name'] = NULL;
$arguments592['rel'] = NULL;
$arguments592['rev'] = NULL;
$arguments592['target'] = NULL;
$array594 = array (
);$arguments592['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array594);
$arguments592['defaultScheme'] = '';
$arguments592['class'] = 'btn btn-default';

$output591 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output591 .= '
                    ';
return $output591;
};

$output513 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);

$output513 .= '
            ';
return $output513;
};
$arguments511['__elseClosures'][] = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
                ';
$array639 = array (
);
$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array639)]);

$output638 .= ' = <strong>';
$array640 = array (
);
$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array640)]);

$output638 .= '</strong>
            ';
return $output638;
};

$output510 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$output510 .= '
        <div>
            <hr style="margin-top: 5px; margin-bottom: 5px;"/>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
$output780 = '';

$output780 .= '
                <strong><i class="fa fa-chevron-left"></i>&nbsp;
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure782 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments781 = array();
$arguments781['key'] = NULL;
$arguments781['id'] = NULL;
$arguments781['default'] = NULL;
$arguments781['arguments'] = NULL;
$arguments781['extensionName'] = NULL;
$arguments781['languageKey'] = NULL;
$arguments781['alternativeLanguageKeys'] = NULL;
$output783 = '';
$array784 = array (
);
$output783 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array784);

$output783 .= 'back';
$arguments781['key'] = $output783;

$output780 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments781, $renderChildrenClosure782, $renderingContext)]);

$output780 .= '
                </strong>
            ';
return $output780;
};
$arguments777 = array();
$arguments777['additionalAttributes'] = NULL;
$arguments777['data'] = NULL;
$arguments777['uri'] = NULL;
$arguments777['defaultScheme'] = 'http';
$arguments777['class'] = NULL;
$arguments777['dir'] = NULL;
$arguments777['id'] = NULL;
$arguments777['lang'] = NULL;
$arguments777['style'] = NULL;
$arguments777['title'] = NULL;
$arguments777['accesskey'] = NULL;
$arguments777['tabindex'] = NULL;
$arguments777['onclick'] = NULL;
$arguments777['name'] = NULL;
$arguments777['rel'] = NULL;
$arguments777['rev'] = NULL;
$arguments777['target'] = NULL;
$array779 = array (
);$arguments777['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrl', $array779);
$arguments777['defaultScheme'] = '';
$arguments777['class'] = 'btn btn-default';

$output510 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext);

$output510 .= '
        </div>
    ';
return $output510;
};
$arguments508 = array();

$output507 .= '';

$output507 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure786 = function() use ($renderingContext, $self) {
$output787 = '';

$output787 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure789 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments788 = array();
$arguments788['pageTitle'] = '';
$arguments788['includeCssFiles'] = NULL;
$arguments788['includeJsFiles'] = NULL;
$arguments788['addJsInlineLabels'] = NULL;
$arguments788['includeRequireJsModules'] = NULL;
$arguments788['addInlineSettings'] = NULL;
// Rendering Array
$array790 = array();
$array790['0'] = 'TYPO3/CMS/Tstemplate/TypoScriptObjectBrowser';
$arguments788['includeRequireJsModules'] = $array790;

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments788, $renderChildrenClosure789, $renderingContext)]);

$output787 .= '
        <div class="tsob-menu">
            <div class="form-inline">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure792 = function() use ($renderingContext, $self) {
$output796 = '';

$output796 .= '
                    <div class="form-group">
                        <label class="control-label">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure798 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments797 = array();
$arguments797['key'] = NULL;
$arguments797['id'] = NULL;
$arguments797['default'] = NULL;
$arguments797['arguments'] = NULL;
$arguments797['extensionName'] = NULL;
$arguments797['languageKey'] = NULL;
$arguments797['alternativeLanguageKeys'] = NULL;
$output799 = '';
$array800 = array (
);
$output799 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array800);

$output799 .= 'browse';
$arguments797['key'] = $output799;

$output796 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments797, $renderChildrenClosure798, $renderingContext)]);

$output796 .= '
                        </label>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure802 = function() use ($renderingContext, $self) {
$array803 = array (
);return $renderingContext->getVariableProvider()->getByPath('browserTypeDropdownMenu', $array803);
};
$arguments801 = array();
$arguments801['value'] = NULL;

$output796 .= isset($arguments801['value']) ? $arguments801['value'] : $renderChildrenClosure802();

$output796 .= '
                    </div>
                ';
return $output796;
};
$arguments791 = array();
$arguments791['then'] = NULL;
$arguments791['else'] = NULL;
$arguments791['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array793 = array();
$array794 = array (
);$array793['0'] = $renderingContext->getVariableProvider()->getByPath('hasTsBrowserTypes', $array794);

$expression795 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments791['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression795(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array793)
					),
					$renderingContext
				);
$arguments791['__thenClosure'] = $renderChildrenClosure792;

$output787 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments791, $renderChildrenClosure792, $renderingContext);

$output787 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
$output809 = '';

$output809 .= '
                    <div class="form-group">
                        <label class="control-label" for="ts_browser_toplevel_';
$array810 = array (
);
$output809 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tsBrowserType', $array810)]);

$output809 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure812 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments811 = array();
$arguments811['key'] = NULL;
$arguments811['id'] = NULL;
$arguments811['default'] = NULL;
$arguments811['arguments'] = NULL;
$arguments811['extensionName'] = NULL;
$arguments811['languageKey'] = NULL;
$arguments811['alternativeLanguageKeys'] = NULL;
$output813 = '';
$array814 = array (
);
$output813 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array814);

$output813 .= 'objectList';
$arguments811['key'] = $output813;

$output809 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments811, $renderChildrenClosure812, $renderingContext)]);

$output809 .= '
                        </label>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure816 = function() use ($renderingContext, $self) {
$array817 = array (
);return $renderingContext->getVariableProvider()->getByPath('objectListDropdownMenu', $array817);
};
$arguments815 = array();
$arguments815['value'] = NULL;

$output809 .= isset($arguments815['value']) ? $arguments815['value'] : $renderChildrenClosure816();

$output809 .= '
                    </div>
                ';
return $output809;
};
$arguments804 = array();
$arguments804['then'] = NULL;
$arguments804['else'] = NULL;
$arguments804['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array806 = array();
$array807 = array (
);$array806['0'] = $renderingContext->getVariableProvider()->getByPath('hasTopLevelInObjectList', $array807);

$expression808 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments804['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression808(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array806)
					),
					$renderingContext
				);
$arguments804['__thenClosure'] = $renderChildrenClosure805;

$output787 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext);

$output787 .= '
                <div class="form-group">
                    <label class="control-label" for="search_field">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure819 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments818 = array();
$arguments818['key'] = NULL;
$arguments818['id'] = NULL;
$arguments818['default'] = NULL;
$arguments818['arguments'] = NULL;
$arguments818['extensionName'] = NULL;
$arguments818['languageKey'] = NULL;
$arguments818['alternativeLanguageKeys'] = NULL;
$output820 = '';
$array821 = array (
);
$output820 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array821);

$output820 .= 'search';
$arguments818['key'] = $output820;

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments818, $renderChildrenClosure819, $renderingContext)]);

$output787 .= '
                    </label>
                    <div class="form-group"><input class="form-control" type="search" name="search_field" id="search_field"
                                                                                value="';
$array822 = array (
);
$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('postSearchField', $array822)]);

$output787 .= '"/></div>
                </div>
                <input class="btn btn-default tsob-search-submit" type="submit" name="search"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure824 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments823 = array();
$arguments823['key'] = NULL;
$arguments823['id'] = NULL;
$arguments823['default'] = NULL;
$arguments823['arguments'] = NULL;
$arguments823['extensionName'] = NULL;
$arguments823['languageKey'] = NULL;
$arguments823['alternativeLanguageKeys'] = NULL;
$arguments823['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments823, $renderChildrenClosure824, $renderingContext)]);

$output787 .= '"/>
            </div>
            <div class="checkbox">
                <label for="checkTs_browser_regexsearch">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure826 = function() use ($renderingContext, $self) {
$array827 = array (
);return $renderingContext->getVariableProvider()->getByPath('regexSearchCheckbox', $array827);
};
$arguments825 = array();
$arguments825['value'] = NULL;

$output787 .= isset($arguments825['value']) ? $arguments825['value'] : $renderChildrenClosure826();

$output787 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure829 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments828 = array();
$arguments828['key'] = NULL;
$arguments828['id'] = NULL;
$arguments828['default'] = NULL;
$arguments828['arguments'] = NULL;
$arguments828['extensionName'] = NULL;
$arguments828['languageKey'] = NULL;
$arguments828['alternativeLanguageKeys'] = NULL;
$output830 = '';
$array831 = array (
);
$output830 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array831);

$output830 .= 'regExp';
$arguments828['key'] = $output830;

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments828, $renderChildrenClosure829, $renderingContext)]);

$output787 .= '
                </label>
            </div>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure833 = function() use ($renderingContext, $self) {
$output837 = '';

$output837 .= '
            <div style="padding-top: 10px;"></div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure839 = function() use ($renderingContext, $self) {
$output844 = '';

$output844 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
$output848 = '';

$output848 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure850 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments849 = array();
$arguments849['key'] = NULL;
$arguments849['id'] = NULL;
$arguments849['default'] = NULL;
$arguments849['arguments'] = NULL;
$arguments849['extensionName'] = NULL;
$arguments849['languageKey'] = NULL;
$arguments849['alternativeLanguageKeys'] = NULL;
$output851 = '';
$array852 = array (
);
$output851 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array852);

$output851 .= 'severity.';
$array853 = array (
);
$output851 .= $renderingContext->getVariableProvider()->getByPath('parseError.1', $array853);
$arguments849['key'] = $output851;

$output848 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments849, $renderChildrenClosure850, $renderingContext)]);

$output848 .= '
                    : ';
$array854 = array (
);
$output848 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parseError.0', $array854)]);

$output848 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure856 = function() use ($renderingContext, $self) {
$output860 = '';

$output860 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure862 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments861 = array();
$arguments861['key'] = NULL;
$arguments861['id'] = NULL;
$arguments861['default'] = NULL;
$arguments861['arguments'] = NULL;
$arguments861['extensionName'] = NULL;
$arguments861['languageKey'] = NULL;
$arguments861['alternativeLanguageKeys'] = NULL;
$output863 = '';
$array864 = array (
);
$output863 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array864);

$output863 .= 'errorShowDetails';
$arguments861['key'] = $output863;

$output860 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments861, $renderChildrenClosure862, $renderingContext)]);

$output860 .= '
                    ';
return $output860;
};
$arguments855 = array();
$arguments855['additionalAttributes'] = NULL;
$arguments855['data'] = NULL;
$arguments855['uri'] = NULL;
$arguments855['defaultScheme'] = 'http';
$arguments855['class'] = NULL;
$arguments855['dir'] = NULL;
$arguments855['id'] = NULL;
$arguments855['lang'] = NULL;
$arguments855['style'] = NULL;
$arguments855['title'] = NULL;
$arguments855['accesskey'] = NULL;
$arguments855['tabindex'] = NULL;
$arguments855['onclick'] = NULL;
$arguments855['name'] = NULL;
$arguments855['rel'] = NULL;
$arguments855['rev'] = NULL;
$arguments855['target'] = NULL;
$output857 = '';
$array858 = array (
);
$output857 .= $renderingContext->getVariableProvider()->getByPath('showErrorDetailsUri', $array858);
$array859 = array (
);
$output857 .= $renderingContext->getVariableProvider()->getByPath('parseError.2', $array859);
$arguments855['uri'] = $output857;
$arguments855['defaultScheme'] = '';
$arguments855['class'] = 'text-warning';

$output848 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments855, $renderChildrenClosure856, $renderingContext);

$output848 .= '
                    <br/>
                ';
return $output848;
};
$arguments845 = array();
$arguments845['each'] = NULL;
$arguments845['as'] = NULL;
$arguments845['key'] = NULL;
$arguments845['reverse'] = false;
$arguments845['iteration'] = NULL;
$array847 = array (
);$arguments845['each'] = $renderingContext->getVariableProvider()->getByPath('parseErrors', $array847);
$arguments845['as'] = 'parseError';

$output844 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output844 .= '
            ';
return $output844;
};
$arguments838 = array();
$arguments838['message'] = NULL;
$arguments838['title'] = NULL;
$arguments838['state'] = -2;
$arguments838['iconName'] = NULL;
$arguments838['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure841 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments840 = array();
$arguments840['key'] = NULL;
$arguments840['id'] = NULL;
$arguments840['default'] = NULL;
$arguments840['arguments'] = NULL;
$arguments840['extensionName'] = NULL;
$arguments840['languageKey'] = NULL;
$arguments840['alternativeLanguageKeys'] = NULL;
$output842 = '';
$array843 = array (
);
$output842 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array843);

$output842 .= 'errorsWarnings';
$arguments840['key'] = $output842;
$arguments838['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments840, $renderChildrenClosure841, $renderingContext);
$arguments838['state'] = 1;
$renderChildrenClosure839 = ($arguments838['message'] !== null) ? function() use ($arguments838) { return $arguments838['message']; } : $renderChildrenClosure839;
$output837 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments838, $renderChildrenClosure839, $renderingContext);

$output837 .= '
        ';
return $output837;
};
$arguments832 = array();
$arguments832['then'] = NULL;
$arguments832['else'] = NULL;
$arguments832['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array834 = array();
$array835 = array (
);$array834['0'] = $renderingContext->getVariableProvider()->getByPath('hasParseErrors', $array835);

$expression836 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments832['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression836(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array834)
					),
					$renderingContext
				);
$arguments832['__thenClosure'] = $renderChildrenClosure833;

$output787 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments832, $renderChildrenClosure833, $renderingContext);

$output787 .= '
        <div class="panel panel-space panel-default">
            <div class="panel-heading">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure866 = function() use ($renderingContext, $self) {
$output881 = '';

$output881 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
$output884 = '';

$output884 .= '
                        <strong>';
$array885 = array (
);
$output884 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array885)]);

$output884 .= '</strong>
                    ';
return $output884;
};
$arguments882 = array();

$output881 .= '';

$output881 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure887 = function() use ($renderingContext, $self) {
$output888 = '';

$output888 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure890 = function() use ($renderingContext, $self) {
$output891 = '';

$output891 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure893 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments892 = array();
$arguments892['key'] = NULL;
$arguments892['id'] = NULL;
$arguments892['default'] = NULL;
$arguments892['arguments'] = NULL;
$arguments892['extensionName'] = NULL;
$arguments892['languageKey'] = NULL;
$arguments892['alternativeLanguageKeys'] = NULL;
$output894 = '';
$array895 = array (
);
$output894 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array895);
$array896 = array (
);
$output894 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array896);
$arguments892['key'] = $output894;

$output891 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments892, $renderChildrenClosure893, $renderingContext);

$output891 .= '
                        ';
return $output891;
};
$arguments889 = array();
$arguments889['value'] = NULL;
$arguments889['mode'] = 'upper';
$arguments889['mode'] = 'upper';

$output888 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments889, $renderChildrenClosure890, $renderingContext)]);

$output888 .= '
                    ';
return $output888;
};
$arguments886 = array();
$arguments886['if'] = NULL;

$output881 .= '';

$output881 .= '
                ';
return $output881;
};
$arguments865 = array();
$arguments865['then'] = NULL;
$arguments865['else'] = NULL;
$arguments865['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array878 = array();
$array879 = array (
);$array878['0'] = $renderingContext->getVariableProvider()->getByPath('hasKeySelected', $array879);

$expression880 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments865['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression880(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array878)
					),
					$renderingContext
				);
$arguments865['__thenClosure'] = function() use ($renderingContext, $self) {
$output867 = '';

$output867 .= '
                        <strong>';
$array868 = array (
);
$output867 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array868)]);

$output867 .= '</strong>
                    ';
return $output867;
};
$arguments865['__elseClosures'][] = function() use ($renderingContext, $self) {
$output869 = '';

$output869 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure871 = function() use ($renderingContext, $self) {
$output872 = '';

$output872 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure874 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments873 = array();
$arguments873['key'] = NULL;
$arguments873['id'] = NULL;
$arguments873['default'] = NULL;
$arguments873['arguments'] = NULL;
$arguments873['extensionName'] = NULL;
$arguments873['languageKey'] = NULL;
$arguments873['alternativeLanguageKeys'] = NULL;
$output875 = '';
$array876 = array (
);
$output875 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array876);
$array877 = array (
);
$output875 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array877);
$arguments873['key'] = $output875;

$output872 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments873, $renderChildrenClosure874, $renderingContext);

$output872 .= '
                        ';
return $output872;
};
$arguments870 = array();
$arguments870['value'] = NULL;
$arguments870['mode'] = 'upper';
$arguments870['mode'] = 'upper';

$output869 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments870, $renderChildrenClosure871, $renderingContext)]);

$output869 .= '
                    ';
return $output869;
};

$output787 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments865, $renderChildrenClosure866, $renderingContext);

$output787 .= '
                <strong>';
$array897 = array (
);
$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedKey', $array897)]);

$output787 .= '</strong>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure899 = function() use ($renderingContext, $self) {
$output903 = '';

$output903 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure905 = function() use ($renderingContext, $self) {
$output907 = '';

$output907 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure909 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments908 = array();
$arguments908['key'] = NULL;
$arguments908['id'] = NULL;
$arguments908['default'] = NULL;
$arguments908['arguments'] = NULL;
$arguments908['extensionName'] = NULL;
$arguments908['languageKey'] = NULL;
$arguments908['alternativeLanguageKeys'] = NULL;
$output910 = '';
$array911 = array (
);
$output910 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array911);

$output910 .= 'removeKey';
$arguments908['key'] = $output910;

$output907 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments908, $renderChildrenClosure909, $renderingContext)]);

$output907 .= '
                    ';
return $output907;
};
$arguments904 = array();
$arguments904['additionalAttributes'] = NULL;
$arguments904['data'] = NULL;
$arguments904['uri'] = NULL;
$arguments904['defaultScheme'] = 'http';
$arguments904['class'] = NULL;
$arguments904['dir'] = NULL;
$arguments904['id'] = NULL;
$arguments904['lang'] = NULL;
$arguments904['style'] = NULL;
$arguments904['title'] = NULL;
$arguments904['accesskey'] = NULL;
$arguments904['tabindex'] = NULL;
$arguments904['onclick'] = NULL;
$arguments904['name'] = NULL;
$arguments904['rel'] = NULL;
$arguments904['rev'] = NULL;
$arguments904['target'] = NULL;
$array906 = array (
);$arguments904['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array906);
$arguments904['defaultScheme'] = '';
$arguments904['class'] = 'btn btn-default';

$output903 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments904, $renderChildrenClosure905, $renderingContext);

$output903 .= '
                ';
return $output903;
};
$arguments898 = array();
$arguments898['then'] = NULL;
$arguments898['else'] = NULL;
$arguments898['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array900 = array();
$array901 = array (
);$array900['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array901);

$expression902 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments898['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression902(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array900)
					),
					$renderingContext
				);
$arguments898['__thenClosure'] = $renderChildrenClosure899;

$output787 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments898, $renderChildrenClosure899, $renderingContext);

$output787 .= '
            </div>
            <div class="panel-body tstemplate-tsobjectbrowser-content">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure913 = function() use ($renderingContext, $self) {
$array914 = array (
);return $renderingContext->getVariableProvider()->getByPath('tsTree', $array914);
};
$arguments912 = array();
$arguments912['value'] = NULL;

$output787 .= isset($arguments912['value']) ? $arguments912['value'] : $renderChildrenClosure913();

$output787 .= '</div>
        </div>
        <div>
            <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure916 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments915 = array();
$arguments915['key'] = NULL;
$arguments915['id'] = NULL;
$arguments915['default'] = NULL;
$arguments915['arguments'] = NULL;
$arguments915['extensionName'] = NULL;
$arguments915['languageKey'] = NULL;
$arguments915['alternativeLanguageKeys'] = NULL;
$output917 = '';
$array918 = array (
);
$output917 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array918);

$output917 .= 'displayOptions';
$arguments915['key'] = $output917;

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments915, $renderChildrenClosure916, $renderingContext)]);

$output787 .= '</h2>
            <div class="typo3-listOptions">
                <div class="checkbox">
                    <label for="checkTs_browser_showComments">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure920 = function() use ($renderingContext, $self) {
$array921 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxShowComments', $array921);
};
$arguments919 = array();
$arguments919['value'] = NULL;

$output787 .= isset($arguments919['value']) ? $arguments919['value'] : $renderChildrenClosure920();

$output787 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure923 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments922 = array();
$arguments922['key'] = NULL;
$arguments922['id'] = NULL;
$arguments922['default'] = NULL;
$arguments922['arguments'] = NULL;
$arguments922['extensionName'] = NULL;
$arguments922['languageKey'] = NULL;
$arguments922['alternativeLanguageKeys'] = NULL;
$output924 = '';
$array925 = array (
);
$output924 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array925);

$output924 .= 'displayComments';
$arguments922['key'] = $output924;

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments922, $renderChildrenClosure923, $renderingContext)]);

$output787 .= '
                    </label>
                </div>
                <div class="checkbox">
                    <label for="checkTs_browser_alphaSort">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
$array928 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxAlphaSort', $array928);
};
$arguments926 = array();
$arguments926['value'] = NULL;

$output787 .= isset($arguments926['value']) ? $arguments926['value'] : $renderChildrenClosure927();

$output787 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure930 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments929 = array();
$arguments929['key'] = NULL;
$arguments929['id'] = NULL;
$arguments929['default'] = NULL;
$arguments929['arguments'] = NULL;
$arguments929['extensionName'] = NULL;
$arguments929['languageKey'] = NULL;
$arguments929['alternativeLanguageKeys'] = NULL;
$output931 = '';
$array932 = array (
);
$output931 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array932);

$output931 .= 'sortAlphabetically';
$arguments929['key'] = $output931;

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments929, $renderChildrenClosure930, $renderingContext)]);

$output787 .= '
                    </label>
                </div>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure934 = function() use ($renderingContext, $self) {
$output938 = '';

$output938 .= '
                <div class="form">
                    <label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure940 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments939 = array();
$arguments939['key'] = NULL;
$arguments939['id'] = NULL;
$arguments939['default'] = NULL;
$arguments939['arguments'] = NULL;
$arguments939['extensionName'] = NULL;
$arguments939['languageKey'] = NULL;
$arguments939['alternativeLanguageKeys'] = NULL;
$output941 = '';
$array942 = array (
);
$output941 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array942);

$output941 .= 'displayConstants';
$arguments939['key'] = $output941;

$output938 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments939, $renderChildrenClosure940, $renderingContext)]);

$output938 .= '</label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure944 = function() use ($renderingContext, $self) {
$array945 = array (
);return $renderingContext->getVariableProvider()->getByPath('dropdownDisplayConstants', $array945);
};
$arguments943 = array();
$arguments943['value'] = NULL;

$output938 .= isset($arguments943['value']) ? $arguments943['value'] : $renderChildrenClosure944();

$output938 .= '
                </div>
            ';
return $output938;
};
$arguments933 = array();
$arguments933['then'] = NULL;
$arguments933['else'] = NULL;
$arguments933['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array935 = array();
$array936 = array (
);$array935['0'] = $renderingContext->getVariableProvider()->getByPath('isSetupAndCropLinesDisabled', $array936);

$expression937 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments933['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression937(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array935)
					),
					$renderingContext
				);
$arguments933['__thenClosure'] = $renderChildrenClosure934;

$output787 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments933, $renderChildrenClosure934, $renderingContext);

$output787 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure947 = function() use ($renderingContext, $self) {
$output951 = '';

$output951 .= '
                <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure953 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments952 = array();
$arguments952['key'] = NULL;
$arguments952['id'] = NULL;
$arguments952['default'] = NULL;
$arguments952['arguments'] = NULL;
$arguments952['extensionName'] = NULL;
$arguments952['languageKey'] = NULL;
$arguments952['alternativeLanguageKeys'] = NULL;
$output954 = '';
$array955 = array (
);
$output954 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array955);

$output954 .= 'conditions';
$arguments952['key'] = $output954;

$output951 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments952, $renderChildrenClosure953, $renderingContext)]);

$output951 .= '</h2>
                <div class="typo3-listOptions">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure957 = function() use ($renderingContext, $self) {
$output959 = '';

$output959 .= '
                        <div class="checkbox">
                            <label for="check';
$array960 = array (
);
$output959 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.key', $array960)]);

$output959 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure962 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments961 = array();
$arguments961['additionalAttributes'] = NULL;
$arguments961['data'] = NULL;
$arguments961['name'] = NULL;
$arguments961['value'] = NULL;
$arguments961['property'] = NULL;
$arguments961['disabled'] = NULL;
$arguments961['errorClass'] = 'f3-form-error';
$arguments961['class'] = NULL;
$arguments961['dir'] = NULL;
$arguments961['id'] = NULL;
$arguments961['lang'] = NULL;
$arguments961['style'] = NULL;
$arguments961['title'] = NULL;
$arguments961['accesskey'] = NULL;
$arguments961['tabindex'] = NULL;
$arguments961['onclick'] = NULL;
$arguments961['checked'] = NULL;
$arguments961['multiple'] = false;
$arguments961['class'] = 'checkbox';
$output963 = '';

$output963 .= 'conditions[';
$array964 = array (
);
$output963 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array964);

$output963 .= ']';
$arguments961['name'] = $output963;
$output965 = '';

$output965 .= 'check';
$array966 = array (
);
$output965 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array966);
$arguments961['id'] = $output965;
$array967 = array (
);$arguments961['value'] = $renderingContext->getVariableProvider()->getByPath('condition.value', $array967);
// Rendering Boolean node
// Rendering Array
$array968 = array();
$array969 = array (
);$array968['0'] = $renderingContext->getVariableProvider()->getByPath('condition.isSet', $array969);

$expression970 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments961['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression970(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array968)
					),
					$renderingContext
				);

$output959 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments961, $renderChildrenClosure962, $renderingContext);

$output959 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure972 = function() use ($renderingContext, $self) {
$array973 = array (
);return $renderingContext->getVariableProvider()->getByPath('condition.label', $array973);
};
$arguments971 = array();
$arguments971['value'] = NULL;

$output959 .= isset($arguments971['value']) ? $arguments971['value'] : $renderChildrenClosure972();

$output959 .= '
                            </label>
                        </div>
                    ';
return $output959;
};
$arguments956 = array();
$arguments956['each'] = NULL;
$arguments956['as'] = NULL;
$arguments956['key'] = NULL;
$arguments956['reverse'] = false;
$arguments956['iteration'] = NULL;
$array958 = array (
);$arguments956['each'] = $renderingContext->getVariableProvider()->getByPath('tsConditions', $array958);
$arguments956['as'] = 'condition';

$output951 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments956, $renderChildrenClosure957, $renderingContext);

$output951 .= '
                </div>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure975 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments974 = array();
$arguments974['additionalAttributes'] = NULL;
$arguments974['data'] = NULL;
$arguments974['name'] = NULL;
$arguments974['value'] = NULL;
$arguments974['property'] = NULL;
$arguments974['disabled'] = NULL;
$arguments974['class'] = NULL;
$arguments974['dir'] = NULL;
$arguments974['id'] = NULL;
$arguments974['lang'] = NULL;
$arguments974['style'] = NULL;
$arguments974['title'] = NULL;
$arguments974['accesskey'] = NULL;
$arguments974['tabindex'] = NULL;
$arguments974['onclick'] = NULL;
$arguments974['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure977 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments976 = array();
$arguments976['key'] = NULL;
$arguments976['id'] = NULL;
$arguments976['default'] = NULL;
$arguments976['arguments'] = NULL;
$arguments976['extensionName'] = NULL;
$arguments976['languageKey'] = NULL;
$arguments976['alternativeLanguageKeys'] = NULL;
$output978 = '';
$array979 = array (
);
$output978 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array979);

$output978 .= 'setConditions';
$arguments976['key'] = $output978;
$arguments974['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments976, $renderChildrenClosure977, $renderingContext);
$arguments974['name'] = 'Submit';

$output951 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments974, $renderChildrenClosure975, $renderingContext);

$output951 .= '
            ';
return $output951;
};
$arguments946 = array();
$arguments946['then'] = NULL;
$arguments946['else'] = NULL;
$arguments946['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array948 = array();
$array949 = array (
);$array948['0'] = $renderingContext->getVariableProvider()->getByPath('hasConditions', $array949);

$expression950 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments946['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression950(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array948)
					),
					$renderingContext
				);
$arguments946['__thenClosure'] = $renderChildrenClosure947;

$output787 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments946, $renderChildrenClosure947, $renderingContext);

$output787 .= '
        </div>
    ';
return $output787;
};
$arguments785 = array();
$arguments785['if'] = NULL;

$output507 .= '';

$output507 .= '
';
return $output507;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array504 = array();
$array505 = array (
);$array504['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array505);

$expression506 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression506(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array504)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
                <div style="padding-top: 10px;">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['languageKey'] = NULL;
$arguments174['alternativeLanguageKeys'] = NULL;
$output176 = '';
$array177 = array (
);
$output176 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array177);

$output176 .= 'editProperty';
$arguments174['key'] = $output176;

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output173 .= '
                        </h3>
                        <label>';
$array178 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array178)]);

$output173 .= ' =</label>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['name'] = NULL;
$arguments179['value'] = NULL;
$arguments179['property'] = NULL;
$arguments179['autofocus'] = NULL;
$arguments179['disabled'] = NULL;
$arguments179['maxlength'] = NULL;
$arguments179['readonly'] = NULL;
$arguments179['size'] = NULL;
$arguments179['placeholder'] = NULL;
$arguments179['pattern'] = NULL;
$arguments179['errorClass'] = 'f3-form-error';
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['required'] = false;
$arguments179['type'] = 'text';
$arguments179['class'] = 'form-control';
$output181 = '';

$output181 .= 'data[';
$array182 = array (
);
$output181 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array182);

$output181 .= '][value]';
$arguments179['name'] = $output181;
$array183 = array (
);$arguments179['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array183);

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output173 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['name'] = NULL;
$arguments184['value'] = NULL;
$arguments184['property'] = NULL;
$arguments184['disabled'] = NULL;
$arguments184['class'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$output188 = '';
$array189 = array (
);
$output188 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array189);

$output188 .= 'updateButton';
$arguments186['key'] = $output188;
$arguments184['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);
$arguments184['class'] = 'btn btn-default';
$arguments184['name'] = 'update_value';

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output173 .= '
                </div>
                <div style="padding-top: 20px">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['key'] = NULL;
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$arguments190['languageKey'] = NULL;
$arguments190['alternativeLanguageKeys'] = NULL;
$output192 = '';
$array193 = array (
);
$output192 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array193);

$output192 .= 'addProperty';
$arguments190['key'] = $output192;

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output173 .= '
                        </h3>
                    </div>
                    <div class="form-inline form-inline-spaced">
                        <div class="form-group">
                            <label class="sr-only">';
$array194 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array194)]);

$output173 .= '.</label>
                            <div class="input-group">
                                <div class="input-group-addon">';
$array195 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array195)]);

$output173 .= '.</div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['additionalAttributes'] = NULL;
$arguments196['data'] = NULL;
$arguments196['name'] = NULL;
$arguments196['value'] = NULL;
$arguments196['property'] = NULL;
$arguments196['autofocus'] = NULL;
$arguments196['disabled'] = NULL;
$arguments196['maxlength'] = NULL;
$arguments196['readonly'] = NULL;
$arguments196['size'] = NULL;
$arguments196['placeholder'] = NULL;
$arguments196['pattern'] = NULL;
$arguments196['errorClass'] = 'f3-form-error';
$arguments196['class'] = NULL;
$arguments196['dir'] = NULL;
$arguments196['id'] = NULL;
$arguments196['lang'] = NULL;
$arguments196['style'] = NULL;
$arguments196['title'] = NULL;
$arguments196['accesskey'] = NULL;
$arguments196['tabindex'] = NULL;
$arguments196['onclick'] = NULL;
$arguments196['required'] = false;
$arguments196['type'] = 'text';
$arguments196['class'] = 'form-control';
$output198 = '';

$output198 .= 'data[';
$array199 = array (
);
$output198 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array199);

$output198 .= '][name]';
$arguments196['name'] = $output198;

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output173 .= '
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>=</label>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['name'] = NULL;
$arguments200['value'] = NULL;
$arguments200['property'] = NULL;
$arguments200['autofocus'] = NULL;
$arguments200['disabled'] = NULL;
$arguments200['maxlength'] = NULL;
$arguments200['readonly'] = NULL;
$arguments200['size'] = NULL;
$arguments200['placeholder'] = NULL;
$arguments200['pattern'] = NULL;
$arguments200['errorClass'] = 'f3-form-error';
$arguments200['class'] = NULL;
$arguments200['dir'] = NULL;
$arguments200['id'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$arguments200['required'] = false;
$arguments200['type'] = 'text';
$arguments200['class'] = 'form-control';
$output202 = '';

$output202 .= 'data[';
$array203 = array (
);
$output202 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array203);

$output202 .= '][propertyValue]';
$arguments200['name'] = $output202;

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output173 .= '
                    </div>
                    <div class="form-group">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['name'] = NULL;
$arguments204['value'] = NULL;
$arguments204['property'] = NULL;
$arguments204['disabled'] = NULL;
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$arguments204['class'] = 'btn btn-default';
$arguments204['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['key'] = NULL;
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$arguments206['languageKey'] = NULL;
$arguments206['alternativeLanguageKeys'] = NULL;
$output208 = '';
$array209 = array (
);
$output208 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array209);

$output208 .= 'addButton';
$arguments206['key'] = $output208;
$arguments204['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output173 .= '
                    </div>
                </div>
                <div style="padding-top: 20px;">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$arguments210['languageKey'] = NULL;
$arguments210['alternativeLanguageKeys'] = NULL;
$output212 = '';
$array213 = array (
);
$output212 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array213);

$output212 .= 'clearObject';
$arguments210['key'] = $output212;

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output173 .= '
                        </h3>
                    </div>
                    <div class="form-inline form-inline-spaced">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    ';
$array214 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array214)]);

$output173 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['key'] = NULL;
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['languageKey'] = NULL;
$arguments218['alternativeLanguageKeys'] = NULL;
$output220 = '';
$array221 = array (
);
$output220 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array221);

$output220 .= 'clear';
$arguments218['key'] = $output220;

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
                                    ';
return $output217;
};
$arguments215 = array();
$arguments215['value'] = NULL;
$arguments215['mode'] = 'upper';
$arguments215['mode'] = 'upper';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output173 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['additionalAttributes'] = NULL;
$arguments222['data'] = NULL;
$arguments222['name'] = NULL;
$arguments222['value'] = NULL;
$arguments222['property'] = NULL;
$arguments222['disabled'] = NULL;
$arguments222['errorClass'] = 'f3-form-error';
$arguments222['class'] = NULL;
$arguments222['dir'] = NULL;
$arguments222['id'] = NULL;
$arguments222['lang'] = NULL;
$arguments222['style'] = NULL;
$arguments222['title'] = NULL;
$arguments222['accesskey'] = NULL;
$arguments222['tabindex'] = NULL;
$arguments222['onclick'] = NULL;
$arguments222['checked'] = NULL;
$arguments222['multiple'] = false;
$output224 = '';

$output224 .= 'data[';
$array225 = array (
);
$output224 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array225);

$output224 .= '][clearValue]';
$arguments222['name'] = $output224;
$arguments222['value'] = 1;

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output173 .= '
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['additionalAttributes'] = NULL;
$arguments226['data'] = NULL;
$arguments226['name'] = NULL;
$arguments226['value'] = NULL;
$arguments226['property'] = NULL;
$arguments226['disabled'] = NULL;
$arguments226['class'] = NULL;
$arguments226['dir'] = NULL;
$arguments226['id'] = NULL;
$arguments226['lang'] = NULL;
$arguments226['style'] = NULL;
$arguments226['title'] = NULL;
$arguments226['accesskey'] = NULL;
$arguments226['tabindex'] = NULL;
$arguments226['onclick'] = NULL;
$arguments226['class'] = 'btn btn-default';
$arguments226['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['key'] = NULL;
$arguments228['id'] = NULL;
$arguments228['default'] = NULL;
$arguments228['arguments'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['languageKey'] = NULL;
$arguments228['alternativeLanguageKeys'] = NULL;
$output230 = '';
$array231 = array (
);
$output230 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array231);

$output230 .= 'clearButton';
$arguments228['key'] = $output230;
$arguments226['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output173 .= '
                        </div>
                    </div>
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['key'] = NULL;
$arguments279['id'] = NULL;
$arguments279['default'] = NULL;
$arguments279['arguments'] = NULL;
$arguments279['extensionName'] = NULL;
$arguments279['languageKey'] = NULL;
$arguments279['alternativeLanguageKeys'] = NULL;
$output281 = '';
$array282 = array (
);
$output281 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array282);

$output281 .= 'addKey';
$arguments279['key'] = $output281;
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array284);
$arguments279['arguments'] = $array283;

$output278 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext)]);

$output278 .= '
                            ';
return $output278;
};
$arguments275 = array();
$arguments275['additionalAttributes'] = NULL;
$arguments275['data'] = NULL;
$arguments275['uri'] = NULL;
$arguments275['defaultScheme'] = 'http';
$arguments275['class'] = NULL;
$arguments275['dir'] = NULL;
$arguments275['id'] = NULL;
$arguments275['lang'] = NULL;
$arguments275['style'] = NULL;
$arguments275['title'] = NULL;
$arguments275['accesskey'] = NULL;
$arguments275['tabindex'] = NULL;
$arguments275['onclick'] = NULL;
$arguments275['name'] = NULL;
$arguments275['rel'] = NULL;
$arguments275['rev'] = NULL;
$arguments275['target'] = NULL;
$array277 = array (
);$arguments275['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array277);
$arguments275['defaultScheme'] = '';
$arguments275['class'] = 'btn btn-default';

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
                        ';
return $output274;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array272);

$expression273 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = $renderChildrenClosure270;

$output268 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
                    ';
return $output268;
};
$arguments266 = array();

$output265 .= '';

$output265 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['key'] = NULL;
$arguments292['id'] = NULL;
$arguments292['default'] = NULL;
$arguments292['arguments'] = NULL;
$arguments292['extensionName'] = NULL;
$arguments292['languageKey'] = NULL;
$arguments292['alternativeLanguageKeys'] = NULL;
$output294 = '';
$array295 = array (
);
$output294 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array295);

$output294 .= 'removeKey';
$arguments292['key'] = $output294;
// Rendering Array
$array296 = array();
$array297 = array (
);$array296['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array297);
$arguments292['arguments'] = $array296;

$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext)]);

$output291 .= '
                        ';
return $output291;
};
$arguments288 = array();
$arguments288['additionalAttributes'] = NULL;
$arguments288['data'] = NULL;
$arguments288['uri'] = NULL;
$arguments288['defaultScheme'] = 'http';
$arguments288['class'] = NULL;
$arguments288['dir'] = NULL;
$arguments288['id'] = NULL;
$arguments288['lang'] = NULL;
$arguments288['style'] = NULL;
$arguments288['title'] = NULL;
$arguments288['accesskey'] = NULL;
$arguments288['tabindex'] = NULL;
$arguments288['onclick'] = NULL;
$arguments288['name'] = NULL;
$arguments288['rel'] = NULL;
$arguments288['rev'] = NULL;
$arguments288['target'] = NULL;
$array290 = array (
);$arguments288['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array290);
$arguments288['defaultScheme'] = '';
$arguments288['class'] = 'btn btn-default';

$output287 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
                    ';
return $output287;
};
$arguments285 = array();
$arguments285['if'] = NULL;

$output265 .= '';

$output265 .= '
                ';
return $output265;
};
$arguments232 = array();
$arguments232['then'] = NULL;
$arguments232['else'] = NULL;
$arguments232['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array263);

$expression264 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments232['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments232['__thenClosure'] = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['key'] = NULL;
$arguments245['id'] = NULL;
$arguments245['default'] = NULL;
$arguments245['arguments'] = NULL;
$arguments245['extensionName'] = NULL;
$arguments245['languageKey'] = NULL;
$arguments245['alternativeLanguageKeys'] = NULL;
$output247 = '';
$array248 = array (
);
$output247 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array248);

$output247 .= 'addKey';
$arguments245['key'] = $output247;
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array250);
$arguments245['arguments'] = $array249;

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output244 .= '
                            ';
return $output244;
};
$arguments241 = array();
$arguments241['additionalAttributes'] = NULL;
$arguments241['data'] = NULL;
$arguments241['uri'] = NULL;
$arguments241['defaultScheme'] = 'http';
$arguments241['class'] = NULL;
$arguments241['dir'] = NULL;
$arguments241['id'] = NULL;
$arguments241['lang'] = NULL;
$arguments241['style'] = NULL;
$arguments241['title'] = NULL;
$arguments241['accesskey'] = NULL;
$arguments241['tabindex'] = NULL;
$arguments241['onclick'] = NULL;
$arguments241['name'] = NULL;
$arguments241['rel'] = NULL;
$arguments241['rev'] = NULL;
$arguments241['target'] = NULL;
$array243 = array (
);$arguments241['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array243);
$arguments241['defaultScheme'] = '';
$arguments241['class'] = 'btn btn-default';

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
                        ';
return $output240;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array238 = array (
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array238);

$expression239 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);
$arguments235['__thenClosure'] = $renderChildrenClosure236;

$output234 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= '
                    ';
return $output234;
};
$arguments232['__elseClosures'][] = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['languageKey'] = NULL;
$arguments256['alternativeLanguageKeys'] = NULL;
$output258 = '';
$array259 = array (
);
$output258 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array259);

$output258 .= 'removeKey';
$arguments256['key'] = $output258;
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array261);
$arguments256['arguments'] = $array260;

$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext)]);

$output255 .= '
                        ';
return $output255;
};
$arguments252 = array();
$arguments252['additionalAttributes'] = NULL;
$arguments252['data'] = NULL;
$arguments252['uri'] = NULL;
$arguments252['defaultScheme'] = 'http';
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['name'] = NULL;
$arguments252['rel'] = NULL;
$arguments252['rev'] = NULL;
$arguments252['target'] = NULL;
$array254 = array (
);$arguments252['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array254);
$arguments252['defaultScheme'] = '';
$arguments252['class'] = 'btn btn-default';

$output251 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '
                    ';
return $output251;
};

$output173 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output173 .= '
            ';
return $output173;
};
$arguments171 = array();

$output170 .= '';

$output170 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
                ';
$array301 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array301)]);

$output300 .= ' = <strong>';
$array302 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array302)]);

$output300 .= '</strong>
            ';
return $output300;
};
$arguments298 = array();
$arguments298['if'] = NULL;

$output170 .= '';

$output170 .= '
        ';
return $output170;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('existTemplate', $array168);

$expression169 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                <div style="padding-top: 10px;">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$output42 = '';
$array43 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array43);

$output42 .= 'editProperty';
$arguments40['key'] = $output42;

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '
                        </h3>
                        <label>';
$array44 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array44)]);

$output39 .= ' =</label>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['autofocus'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['maxlength'] = NULL;
$arguments45['readonly'] = NULL;
$arguments45['size'] = NULL;
$arguments45['placeholder'] = NULL;
$arguments45['pattern'] = NULL;
$arguments45['errorClass'] = 'f3-form-error';
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['required'] = false;
$arguments45['type'] = 'text';
$arguments45['class'] = 'form-control';
$output47 = '';

$output47 .= 'data[';
$array48 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array48);

$output47 .= '][value]';
$arguments45['name'] = $output47;
$array49 = array (
);$arguments45['value'] = $renderingContext->getVariableProvider()->getByPath('theSetupValue', $array49);

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output39 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['name'] = NULL;
$arguments50['value'] = NULL;
$arguments50['property'] = NULL;
$arguments50['disabled'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$output54 = '';
$array55 = array (
);
$output54 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array55);

$output54 .= 'updateButton';
$arguments52['key'] = $output54;
$arguments50['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);
$arguments50['class'] = 'btn btn-default';
$arguments50['name'] = 'update_value';

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output39 .= '
                </div>
                <div style="padding-top: 20px">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$output58 = '';
$array59 = array (
);
$output58 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array59);

$output58 .= 'addProperty';
$arguments56['key'] = $output58;

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output39 .= '
                        </h3>
                    </div>
                    <div class="form-inline form-inline-spaced">
                        <div class="form-group">
                            <label class="sr-only">';
$array60 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array60)]);

$output39 .= '.</label>
                            <div class="input-group">
                                <div class="input-group-addon">';
$array61 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array61)]);

$output39 .= '.</div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['name'] = NULL;
$arguments62['value'] = NULL;
$arguments62['property'] = NULL;
$arguments62['autofocus'] = NULL;
$arguments62['disabled'] = NULL;
$arguments62['maxlength'] = NULL;
$arguments62['readonly'] = NULL;
$arguments62['size'] = NULL;
$arguments62['placeholder'] = NULL;
$arguments62['pattern'] = NULL;
$arguments62['errorClass'] = 'f3-form-error';
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['required'] = false;
$arguments62['type'] = 'text';
$arguments62['class'] = 'form-control';
$output64 = '';

$output64 .= 'data[';
$array65 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array65);

$output64 .= '][name]';
$arguments62['name'] = $output64;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output39 .= '
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>=</label>
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['name'] = NULL;
$arguments66['value'] = NULL;
$arguments66['property'] = NULL;
$arguments66['autofocus'] = NULL;
$arguments66['disabled'] = NULL;
$arguments66['maxlength'] = NULL;
$arguments66['readonly'] = NULL;
$arguments66['size'] = NULL;
$arguments66['placeholder'] = NULL;
$arguments66['pattern'] = NULL;
$arguments66['errorClass'] = 'f3-form-error';
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['required'] = false;
$arguments66['type'] = 'text';
$arguments66['class'] = 'form-control';
$output68 = '';

$output68 .= 'data[';
$array69 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array69);

$output68 .= '][propertyValue]';
$arguments66['name'] = $output68;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output39 .= '
                    </div>
                    <div class="form-group">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['name'] = NULL;
$arguments70['value'] = NULL;
$arguments70['property'] = NULL;
$arguments70['disabled'] = NULL;
$arguments70['class'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['class'] = 'btn btn-default';
$arguments70['name'] = 'add_property';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$output74 = '';
$array75 = array (
);
$output74 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array75);

$output74 .= 'addButton';
$arguments72['key'] = $output74;
$arguments70['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output39 .= '
                    </div>
                </div>
                <div style="padding-top: 20px;">
                    <div class="form-group">
                        <h3>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$output78 = '';
$array79 = array (
);
$output78 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array79);

$output78 .= 'clearObject';
$arguments76['key'] = $output78;

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output39 .= '
                        </h3>
                    </div>
                    <div class="form-inline form-inline-spaced">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    ';
$array80 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array80)]);

$output39 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$output86 = '';
$array87 = array (
);
$output86 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array87);

$output86 .= 'clear';
$arguments84['key'] = $output86;

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
                                    ';
return $output83;
};
$arguments81 = array();
$arguments81['value'] = NULL;
$arguments81['mode'] = 'upper';
$arguments81['mode'] = 'upper';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output39 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['name'] = NULL;
$arguments88['value'] = NULL;
$arguments88['property'] = NULL;
$arguments88['disabled'] = NULL;
$arguments88['errorClass'] = 'f3-form-error';
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['checked'] = NULL;
$arguments88['multiple'] = false;
$output90 = '';

$output90 .= 'data[';
$array91 = array (
);
$output90 .= $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array91);

$output90 .= '][clearValue]';
$arguments88['name'] = $output90;
$arguments88['value'] = 1;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output39 .= '
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['additionalAttributes'] = NULL;
$arguments92['data'] = NULL;
$arguments92['name'] = NULL;
$arguments92['value'] = NULL;
$arguments92['property'] = NULL;
$arguments92['disabled'] = NULL;
$arguments92['class'] = NULL;
$arguments92['dir'] = NULL;
$arguments92['id'] = NULL;
$arguments92['lang'] = NULL;
$arguments92['style'] = NULL;
$arguments92['title'] = NULL;
$arguments92['accesskey'] = NULL;
$arguments92['tabindex'] = NULL;
$arguments92['onclick'] = NULL;
$arguments92['class'] = 'btn btn-default';
$arguments92['name'] = 'clear_object';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['key'] = NULL;
$arguments94['id'] = NULL;
$arguments94['default'] = NULL;
$arguments94['arguments'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['languageKey'] = NULL;
$arguments94['alternativeLanguageKeys'] = NULL;
$output96 = '';
$array97 = array (
);
$output96 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array97);

$output96 .= 'clearButton';
$arguments94['key'] = $output96;
$arguments92['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output39 .= '
                        </div>
                    </div>
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['key'] = NULL;
$arguments145['id'] = NULL;
$arguments145['default'] = NULL;
$arguments145['arguments'] = NULL;
$arguments145['extensionName'] = NULL;
$arguments145['languageKey'] = NULL;
$arguments145['alternativeLanguageKeys'] = NULL;
$output147 = '';
$array148 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array148);

$output147 .= 'addKey';
$arguments145['key'] = $output147;
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array150);
$arguments145['arguments'] = $array149;

$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output144 .= '
                            ';
return $output144;
};
$arguments141 = array();
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['uri'] = NULL;
$arguments141['defaultScheme'] = 'http';
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$array143 = array (
);$arguments141['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array143);
$arguments141['defaultScheme'] = '';
$arguments141['class'] = 'btn btn-default';

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
                        ';
return $output140;
};
$arguments135 = array();
$arguments135['then'] = NULL;
$arguments135['else'] = NULL;
$arguments135['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array137 = array();
$array138 = array (
);$array137['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array138);

$expression139 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments135['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression139(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)
					),
					$renderingContext
				);
$arguments135['__thenClosure'] = $renderChildrenClosure136;

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
                    ';
return $output134;
};
$arguments132 = array();

$output131 .= '';

$output131 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$output160 = '';
$array161 = array (
);
$output160 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array161);

$output160 .= 'removeKey';
$arguments158['key'] = $output160;
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array163);
$arguments158['arguments'] = $array162;

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output157 .= '
                        ';
return $output157;
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['uri'] = NULL;
$arguments154['defaultScheme'] = 'http';
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$array156 = array (
);$arguments154['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array156);
$arguments154['defaultScheme'] = '';
$arguments154['class'] = 'btn btn-default';

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
                    ';
return $output153;
};
$arguments151 = array();
$arguments151['if'] = NULL;

$output131 .= '';

$output131 .= '
                ';
return $output131;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['0'] = $renderingContext->getVariableProvider()->getByPath('isNotInTopLevelKeyList', $array129);

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['key'] = NULL;
$arguments111['id'] = NULL;
$arguments111['default'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['languageKey'] = NULL;
$arguments111['alternativeLanguageKeys'] = NULL;
$output113 = '';
$array114 = array (
);
$output113 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array114);

$output113 .= 'addKey';
$arguments111['key'] = $output113;
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array116);
$arguments111['arguments'] = $array115;

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output110 .= '
                            ';
return $output110;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['uri'] = NULL;
$arguments107['defaultScheme'] = 'http';
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$array109 = array (
);$arguments107['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array109);
$arguments107['defaultScheme'] = '';
$arguments107['class'] = 'btn btn-default';

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                        ';
return $output106;
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('hasProperties', $array104);

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['__thenClosure'] = $renderChildrenClosure102;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
                    ';
return $output100;
};
$arguments98['__elseClosures'][] = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['key'] = NULL;
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$arguments122['languageKey'] = NULL;
$arguments122['alternativeLanguageKeys'] = NULL;
$output124 = '';
$array125 = array (
);
$output124 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array125);

$output124 .= 'removeKey';
$arguments122['key'] = $output124;
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array127);
$arguments122['arguments'] = $array126;

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output121 .= '
                        ';
return $output121;
};
$arguments118 = array();
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['uri'] = NULL;
$arguments118['defaultScheme'] = 'http';
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['name'] = NULL;
$arguments118['rel'] = NULL;
$arguments118['rev'] = NULL;
$arguments118['target'] = NULL;
$array120 = array (
);$arguments118['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlObjectListAction', $array120);
$arguments118['defaultScheme'] = '';
$arguments118['class'] = 'btn btn-default';

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
                    ';
return $output117;
};

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output39 .= '
            ';
return $output39;
};
$arguments37['__elseClosures'][] = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
                ';
$array165 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typoScriptPath', $array165)]);

$output164 .= ' = <strong>';
$array166 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('theSetupValue', $array166)]);

$output164 .= '</strong>
            ';
return $output164;
};

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
        <div>
            <hr style="margin-top: 5px; margin-bottom: 5px;"/>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output306 = '';

$output306 .= '
                <strong><i class="fa fa-chevron-left"></i>&nbsp;
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['key'] = NULL;
$arguments307['id'] = NULL;
$arguments307['default'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['extensionName'] = NULL;
$arguments307['languageKey'] = NULL;
$arguments307['alternativeLanguageKeys'] = NULL;
$output309 = '';
$array310 = array (
);
$output309 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array310);

$output309 .= 'back';
$arguments307['key'] = $output309;

$output306 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output306 .= '
                </strong>
            ';
return $output306;
};
$arguments303 = array();
$arguments303['additionalAttributes'] = NULL;
$arguments303['data'] = NULL;
$arguments303['uri'] = NULL;
$arguments303['defaultScheme'] = 'http';
$arguments303['class'] = NULL;
$arguments303['dir'] = NULL;
$arguments303['id'] = NULL;
$arguments303['lang'] = NULL;
$arguments303['style'] = NULL;
$arguments303['title'] = NULL;
$arguments303['accesskey'] = NULL;
$arguments303['tabindex'] = NULL;
$arguments303['onclick'] = NULL;
$arguments303['name'] = NULL;
$arguments303['rel'] = NULL;
$arguments303['rev'] = NULL;
$arguments303['target'] = NULL;
$array305 = array (
);$arguments303['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrl', $array305);
$arguments303['defaultScheme'] = '';
$arguments303['class'] = 'btn btn-default';

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output36 .= '
        </div>
    ';
return $output36;
};
$arguments34['__elseClosures'][] = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['pageTitle'] = '';
$arguments312['includeCssFiles'] = NULL;
$arguments312['includeJsFiles'] = NULL;
$arguments312['addJsInlineLabels'] = NULL;
$arguments312['includeRequireJsModules'] = NULL;
$arguments312['addInlineSettings'] = NULL;
// Rendering Array
$array314 = array();
$array314['0'] = 'TYPO3/CMS/Tstemplate/TypoScriptObjectBrowser';
$arguments312['includeRequireJsModules'] = $array314;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output311 .= '
        <div class="tsob-menu">
            <div class="form-inline">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
                    <div class="form-group">
                        <label class="control-label">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['key'] = NULL;
$arguments321['id'] = NULL;
$arguments321['default'] = NULL;
$arguments321['arguments'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['languageKey'] = NULL;
$arguments321['alternativeLanguageKeys'] = NULL;
$output323 = '';
$array324 = array (
);
$output323 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array324);

$output323 .= 'browse';
$arguments321['key'] = $output323;

$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext)]);

$output320 .= '
                        </label>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$array327 = array (
);return $renderingContext->getVariableProvider()->getByPath('browserTypeDropdownMenu', $array327);
};
$arguments325 = array();
$arguments325['value'] = NULL;

$output320 .= isset($arguments325['value']) ? $arguments325['value'] : $renderChildrenClosure326();

$output320 .= '
                    </div>
                ';
return $output320;
};
$arguments315 = array();
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array317 = array();
$array318 = array (
);$array317['0'] = $renderingContext->getVariableProvider()->getByPath('hasTsBrowserTypes', $array318);

$expression319 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression319(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);
$arguments315['__thenClosure'] = $renderChildrenClosure316;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output311 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
                    <div class="form-group">
                        <label class="control-label" for="ts_browser_toplevel_';
$array334 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tsBrowserType', $array334)]);

$output333 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['key'] = NULL;
$arguments335['id'] = NULL;
$arguments335['default'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['extensionName'] = NULL;
$arguments335['languageKey'] = NULL;
$arguments335['alternativeLanguageKeys'] = NULL;
$output337 = '';
$array338 = array (
);
$output337 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array338);

$output337 .= 'objectList';
$arguments335['key'] = $output337;

$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext)]);

$output333 .= '
                        </label>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$array341 = array (
);return $renderingContext->getVariableProvider()->getByPath('objectListDropdownMenu', $array341);
};
$arguments339 = array();
$arguments339['value'] = NULL;

$output333 .= isset($arguments339['value']) ? $arguments339['value'] : $renderChildrenClosure340();

$output333 .= '
                    </div>
                ';
return $output333;
};
$arguments328 = array();
$arguments328['then'] = NULL;
$arguments328['else'] = NULL;
$arguments328['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array331 = array (
);$array330['0'] = $renderingContext->getVariableProvider()->getByPath('hasTopLevelInObjectList', $array331);

$expression332 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments328['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression332(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments328['__thenClosure'] = $renderChildrenClosure329;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output311 .= '
                <div class="form-group">
                    <label class="control-label" for="search_field">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['key'] = NULL;
$arguments342['id'] = NULL;
$arguments342['default'] = NULL;
$arguments342['arguments'] = NULL;
$arguments342['extensionName'] = NULL;
$arguments342['languageKey'] = NULL;
$arguments342['alternativeLanguageKeys'] = NULL;
$output344 = '';
$array345 = array (
);
$output344 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array345);

$output344 .= 'search';
$arguments342['key'] = $output344;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext)]);

$output311 .= '
                    </label>
                    <div class="form-group"><input class="form-control" type="search" name="search_field" id="search_field"
                                                                                value="';
$array346 = array (
);
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('postSearchField', $array346)]);

$output311 .= '"/></div>
                </div>
                <input class="btn btn-default tsob-search-submit" type="submit" name="search"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['key'] = NULL;
$arguments347['id'] = NULL;
$arguments347['default'] = NULL;
$arguments347['arguments'] = NULL;
$arguments347['extensionName'] = NULL;
$arguments347['languageKey'] = NULL;
$arguments347['alternativeLanguageKeys'] = NULL;
$arguments347['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext)]);

$output311 .= '"/>
            </div>
            <div class="checkbox">
                <label for="checkTs_browser_regexsearch">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$array351 = array (
);return $renderingContext->getVariableProvider()->getByPath('regexSearchCheckbox', $array351);
};
$arguments349 = array();
$arguments349['value'] = NULL;

$output311 .= isset($arguments349['value']) ? $arguments349['value'] : $renderChildrenClosure350();

$output311 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments352 = array();
$arguments352['key'] = NULL;
$arguments352['id'] = NULL;
$arguments352['default'] = NULL;
$arguments352['arguments'] = NULL;
$arguments352['extensionName'] = NULL;
$arguments352['languageKey'] = NULL;
$arguments352['alternativeLanguageKeys'] = NULL;
$output354 = '';
$array355 = array (
);
$output354 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array355);

$output354 .= 'regExp';
$arguments352['key'] = $output354;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext)]);

$output311 .= '
                </label>
            </div>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
            <div style="padding-top: 10px;"></div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['key'] = NULL;
$arguments373['id'] = NULL;
$arguments373['default'] = NULL;
$arguments373['arguments'] = NULL;
$arguments373['extensionName'] = NULL;
$arguments373['languageKey'] = NULL;
$arguments373['alternativeLanguageKeys'] = NULL;
$output375 = '';
$array376 = array (
);
$output375 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array376);

$output375 .= 'severity.';
$array377 = array (
);
$output375 .= $renderingContext->getVariableProvider()->getByPath('parseError.1', $array377);
$arguments373['key'] = $output375;

$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);

$output372 .= '
                    : ';
$array378 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parseError.0', $array378)]);

$output372 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['key'] = NULL;
$arguments385['id'] = NULL;
$arguments385['default'] = NULL;
$arguments385['arguments'] = NULL;
$arguments385['extensionName'] = NULL;
$arguments385['languageKey'] = NULL;
$arguments385['alternativeLanguageKeys'] = NULL;
$output387 = '';
$array388 = array (
);
$output387 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array388);

$output387 .= 'errorShowDetails';
$arguments385['key'] = $output387;

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext)]);

$output384 .= '
                    ';
return $output384;
};
$arguments379 = array();
$arguments379['additionalAttributes'] = NULL;
$arguments379['data'] = NULL;
$arguments379['uri'] = NULL;
$arguments379['defaultScheme'] = 'http';
$arguments379['class'] = NULL;
$arguments379['dir'] = NULL;
$arguments379['id'] = NULL;
$arguments379['lang'] = NULL;
$arguments379['style'] = NULL;
$arguments379['title'] = NULL;
$arguments379['accesskey'] = NULL;
$arguments379['tabindex'] = NULL;
$arguments379['onclick'] = NULL;
$arguments379['name'] = NULL;
$arguments379['rel'] = NULL;
$arguments379['rev'] = NULL;
$arguments379['target'] = NULL;
$output381 = '';
$array382 = array (
);
$output381 .= $renderingContext->getVariableProvider()->getByPath('showErrorDetailsUri', $array382);
$array383 = array (
);
$output381 .= $renderingContext->getVariableProvider()->getByPath('parseError.2', $array383);
$arguments379['uri'] = $output381;
$arguments379['defaultScheme'] = '';
$arguments379['class'] = 'text-warning';

$output372 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output372 .= '
                    <br/>
                ';
return $output372;
};
$arguments369 = array();
$arguments369['each'] = NULL;
$arguments369['as'] = NULL;
$arguments369['key'] = NULL;
$arguments369['reverse'] = false;
$arguments369['iteration'] = NULL;
$array371 = array (
);$arguments369['each'] = $renderingContext->getVariableProvider()->getByPath('parseErrors', $array371);
$arguments369['as'] = 'parseError';

$output368 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output368 .= '
            ';
return $output368;
};
$arguments362 = array();
$arguments362['message'] = NULL;
$arguments362['title'] = NULL;
$arguments362['state'] = -2;
$arguments362['iconName'] = NULL;
$arguments362['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['key'] = NULL;
$arguments364['id'] = NULL;
$arguments364['default'] = NULL;
$arguments364['arguments'] = NULL;
$arguments364['extensionName'] = NULL;
$arguments364['languageKey'] = NULL;
$arguments364['alternativeLanguageKeys'] = NULL;
$output366 = '';
$array367 = array (
);
$output366 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array367);

$output366 .= 'errorsWarnings';
$arguments364['key'] = $output366;
$arguments362['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);
$arguments362['state'] = 1;
$renderChildrenClosure363 = ($arguments362['message'] !== null) ? function() use ($arguments362) { return $arguments362['message']; } : $renderChildrenClosure363;
$output361 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output361 .= '
        ';
return $output361;
};
$arguments356 = array();
$arguments356['then'] = NULL;
$arguments356['else'] = NULL;
$arguments356['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array358 = array();
$array359 = array (
);$array358['0'] = $renderingContext->getVariableProvider()->getByPath('hasParseErrors', $array359);

$expression360 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments356['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression360(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array358)
					),
					$renderingContext
				);
$arguments356['__thenClosure'] = $renderChildrenClosure357;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output311 .= '
        <div class="panel panel-space panel-default">
            <div class="panel-heading">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
                        <strong>';
$array409 = array (
);
$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array409)]);

$output408 .= '</strong>
                    ';
return $output408;
};
$arguments406 = array();

$output405 .= '';

$output405 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments416 = array();
$arguments416['key'] = NULL;
$arguments416['id'] = NULL;
$arguments416['default'] = NULL;
$arguments416['arguments'] = NULL;
$arguments416['extensionName'] = NULL;
$arguments416['languageKey'] = NULL;
$arguments416['alternativeLanguageKeys'] = NULL;
$output418 = '';
$array419 = array (
);
$output418 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array419);
$array420 = array (
);
$output418 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array420);
$arguments416['key'] = $output418;

$output415 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);

$output415 .= '
                        ';
return $output415;
};
$arguments413 = array();
$arguments413['value'] = NULL;
$arguments413['mode'] = 'upper';
$arguments413['mode'] = 'upper';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext)]);

$output412 .= '
                    ';
return $output412;
};
$arguments410 = array();
$arguments410['if'] = NULL;

$output405 .= '';

$output405 .= '
                ';
return $output405;
};
$arguments389 = array();
$arguments389['then'] = NULL;
$arguments389['else'] = NULL;
$arguments389['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array402 = array();
$array403 = array (
);$array402['0'] = $renderingContext->getVariableProvider()->getByPath('hasKeySelected', $array403);

$expression404 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments389['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression404(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array402)
					),
					$renderingContext
				);
$arguments389['__thenClosure'] = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
                        <strong>';
$array392 = array (
);
$output391 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('treeLabel', $array392)]);

$output391 .= '</strong>
                    ';
return $output391;
};
$arguments389['__elseClosures'][] = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
$output396 = '';

$output396 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['key'] = NULL;
$arguments397['id'] = NULL;
$arguments397['default'] = NULL;
$arguments397['arguments'] = NULL;
$arguments397['extensionName'] = NULL;
$arguments397['languageKey'] = NULL;
$arguments397['alternativeLanguageKeys'] = NULL;
$output399 = '';
$array400 = array (
);
$output399 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array400);
$array401 = array (
);
$output399 .= $renderingContext->getVariableProvider()->getByPath('rootLLKey', $array401);
$arguments397['key'] = $output399;

$output396 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output396 .= '
                        ';
return $output396;
};
$arguments394 = array();
$arguments394['value'] = NULL;
$arguments394['mode'] = 'upper';
$arguments394['mode'] = 'upper';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext)]);

$output393 .= '
                    ';
return $output393;
};

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output311 .= '
                <strong>';
$array421 = array (
);
$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedKey', $array421)]);

$output311 .= '</strong>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
$output427 = '';

$output427 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['key'] = NULL;
$arguments432['id'] = NULL;
$arguments432['default'] = NULL;
$arguments432['arguments'] = NULL;
$arguments432['extensionName'] = NULL;
$arguments432['languageKey'] = NULL;
$arguments432['alternativeLanguageKeys'] = NULL;
$output434 = '';
$array435 = array (
);
$output434 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array435);

$output434 .= 'removeKey';
$arguments432['key'] = $output434;

$output431 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext)]);

$output431 .= '
                    ';
return $output431;
};
$arguments428 = array();
$arguments428['additionalAttributes'] = NULL;
$arguments428['data'] = NULL;
$arguments428['uri'] = NULL;
$arguments428['defaultScheme'] = 'http';
$arguments428['class'] = NULL;
$arguments428['dir'] = NULL;
$arguments428['id'] = NULL;
$arguments428['lang'] = NULL;
$arguments428['style'] = NULL;
$arguments428['title'] = NULL;
$arguments428['accesskey'] = NULL;
$arguments428['tabindex'] = NULL;
$arguments428['onclick'] = NULL;
$arguments428['name'] = NULL;
$arguments428['rel'] = NULL;
$arguments428['rev'] = NULL;
$arguments428['target'] = NULL;
$array430 = array (
);$arguments428['uri'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array430);
$arguments428['defaultScheme'] = '';
$arguments428['class'] = 'btn btn-default';

$output427 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output427 .= '
                ';
return $output427;
};
$arguments422 = array();
$arguments422['then'] = NULL;
$arguments422['else'] = NULL;
$arguments422['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array424 = array();
$array425 = array (
);$array424['0'] = $renderingContext->getVariableProvider()->getByPath('moduleUrlRemoveFromObjectList', $array425);

$expression426 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments422['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression426(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array424)
					),
					$renderingContext
				);
$arguments422['__thenClosure'] = $renderChildrenClosure423;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output311 .= '
            </div>
            <div class="panel-body tstemplate-tsobjectbrowser-content">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$array438 = array (
);return $renderingContext->getVariableProvider()->getByPath('tsTree', $array438);
};
$arguments436 = array();
$arguments436['value'] = NULL;

$output311 .= isset($arguments436['value']) ? $arguments436['value'] : $renderChildrenClosure437();

$output311 .= '</div>
        </div>
        <div>
            <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['key'] = NULL;
$arguments439['id'] = NULL;
$arguments439['default'] = NULL;
$arguments439['arguments'] = NULL;
$arguments439['extensionName'] = NULL;
$arguments439['languageKey'] = NULL;
$arguments439['alternativeLanguageKeys'] = NULL;
$output441 = '';
$array442 = array (
);
$output441 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array442);

$output441 .= 'displayOptions';
$arguments439['key'] = $output441;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext)]);

$output311 .= '</h2>
            <div class="typo3-listOptions">
                <div class="checkbox">
                    <label for="checkTs_browser_showComments">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
$array445 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxShowComments', $array445);
};
$arguments443 = array();
$arguments443['value'] = NULL;

$output311 .= isset($arguments443['value']) ? $arguments443['value'] : $renderChildrenClosure444();

$output311 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['key'] = NULL;
$arguments446['id'] = NULL;
$arguments446['default'] = NULL;
$arguments446['arguments'] = NULL;
$arguments446['extensionName'] = NULL;
$arguments446['languageKey'] = NULL;
$arguments446['alternativeLanguageKeys'] = NULL;
$output448 = '';
$array449 = array (
);
$output448 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array449);

$output448 .= 'displayComments';
$arguments446['key'] = $output448;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext)]);

$output311 .= '
                    </label>
                </div>
                <div class="checkbox">
                    <label for="checkTs_browser_alphaSort">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$array452 = array (
);return $renderingContext->getVariableProvider()->getByPath('checkBoxAlphaSort', $array452);
};
$arguments450 = array();
$arguments450['value'] = NULL;

$output311 .= isset($arguments450['value']) ? $arguments450['value'] : $renderChildrenClosure451();

$output311 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['key'] = NULL;
$arguments453['id'] = NULL;
$arguments453['default'] = NULL;
$arguments453['arguments'] = NULL;
$arguments453['extensionName'] = NULL;
$arguments453['languageKey'] = NULL;
$arguments453['alternativeLanguageKeys'] = NULL;
$output455 = '';
$array456 = array (
);
$output455 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array456);

$output455 .= 'sortAlphabetically';
$arguments453['key'] = $output455;

$output311 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext)]);

$output311 .= '
                    </label>
                </div>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output462 = '';

$output462 .= '
                <div class="form">
                    <label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();
$arguments463['key'] = NULL;
$arguments463['id'] = NULL;
$arguments463['default'] = NULL;
$arguments463['arguments'] = NULL;
$arguments463['extensionName'] = NULL;
$arguments463['languageKey'] = NULL;
$arguments463['alternativeLanguageKeys'] = NULL;
$output465 = '';
$array466 = array (
);
$output465 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array466);

$output465 .= 'displayConstants';
$arguments463['key'] = $output465;

$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext)]);

$output462 .= '</label>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$array469 = array (
);return $renderingContext->getVariableProvider()->getByPath('dropdownDisplayConstants', $array469);
};
$arguments467 = array();
$arguments467['value'] = NULL;

$output462 .= isset($arguments467['value']) ? $arguments467['value'] : $renderChildrenClosure468();

$output462 .= '
                </div>
            ';
return $output462;
};
$arguments457 = array();
$arguments457['then'] = NULL;
$arguments457['else'] = NULL;
$arguments457['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array459 = array();
$array460 = array (
);$array459['0'] = $renderingContext->getVariableProvider()->getByPath('isSetupAndCropLinesDisabled', $array460);

$expression461 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments457['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression461(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array459)
					),
					$renderingContext
				);
$arguments457['__thenClosure'] = $renderChildrenClosure458;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output311 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output475 = '';

$output475 .= '
                <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments476 = array();
$arguments476['key'] = NULL;
$arguments476['id'] = NULL;
$arguments476['default'] = NULL;
$arguments476['arguments'] = NULL;
$arguments476['extensionName'] = NULL;
$arguments476['languageKey'] = NULL;
$arguments476['alternativeLanguageKeys'] = NULL;
$output478 = '';
$array479 = array (
);
$output478 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array479);

$output478 .= 'conditions';
$arguments476['key'] = $output478;

$output475 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext)]);

$output475 .= '</h2>
                <div class="typo3-listOptions">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
                        <div class="checkbox">
                            <label for="check';
$array484 = array (
);
$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.key', $array484)]);

$output483 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['additionalAttributes'] = NULL;
$arguments485['data'] = NULL;
$arguments485['name'] = NULL;
$arguments485['value'] = NULL;
$arguments485['property'] = NULL;
$arguments485['disabled'] = NULL;
$arguments485['errorClass'] = 'f3-form-error';
$arguments485['class'] = NULL;
$arguments485['dir'] = NULL;
$arguments485['id'] = NULL;
$arguments485['lang'] = NULL;
$arguments485['style'] = NULL;
$arguments485['title'] = NULL;
$arguments485['accesskey'] = NULL;
$arguments485['tabindex'] = NULL;
$arguments485['onclick'] = NULL;
$arguments485['checked'] = NULL;
$arguments485['multiple'] = false;
$arguments485['class'] = 'checkbox';
$output487 = '';

$output487 .= 'conditions[';
$array488 = array (
);
$output487 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array488);

$output487 .= ']';
$arguments485['name'] = $output487;
$output489 = '';

$output489 .= 'check';
$array490 = array (
);
$output489 .= $renderingContext->getVariableProvider()->getByPath('condition.key', $array490);
$arguments485['id'] = $output489;
$array491 = array (
);$arguments485['value'] = $renderingContext->getVariableProvider()->getByPath('condition.value', $array491);
// Rendering Boolean node
// Rendering Array
$array492 = array();
$array493 = array (
);$array492['0'] = $renderingContext->getVariableProvider()->getByPath('condition.isSet', $array493);

$expression494 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments485['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression494(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array492)
					),
					$renderingContext
				);

$output483 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output483 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$array497 = array (
);return $renderingContext->getVariableProvider()->getByPath('condition.label', $array497);
};
$arguments495 = array();
$arguments495['value'] = NULL;

$output483 .= isset($arguments495['value']) ? $arguments495['value'] : $renderChildrenClosure496();

$output483 .= '
                            </label>
                        </div>
                    ';
return $output483;
};
$arguments480 = array();
$arguments480['each'] = NULL;
$arguments480['as'] = NULL;
$arguments480['key'] = NULL;
$arguments480['reverse'] = false;
$arguments480['iteration'] = NULL;
$array482 = array (
);$arguments480['each'] = $renderingContext->getVariableProvider()->getByPath('tsConditions', $array482);
$arguments480['as'] = 'condition';

$output475 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output475 .= '
                </div>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['additionalAttributes'] = NULL;
$arguments498['data'] = NULL;
$arguments498['name'] = NULL;
$arguments498['value'] = NULL;
$arguments498['property'] = NULL;
$arguments498['disabled'] = NULL;
$arguments498['class'] = NULL;
$arguments498['dir'] = NULL;
$arguments498['id'] = NULL;
$arguments498['lang'] = NULL;
$arguments498['style'] = NULL;
$arguments498['title'] = NULL;
$arguments498['accesskey'] = NULL;
$arguments498['tabindex'] = NULL;
$arguments498['onclick'] = NULL;
$arguments498['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments500 = array();
$arguments500['key'] = NULL;
$arguments500['id'] = NULL;
$arguments500['default'] = NULL;
$arguments500['arguments'] = NULL;
$arguments500['extensionName'] = NULL;
$arguments500['languageKey'] = NULL;
$arguments500['alternativeLanguageKeys'] = NULL;
$output502 = '';
$array503 = array (
);
$output502 .= $renderingContext->getVariableProvider()->getByPath('LLPrefix', $array503);

$output502 .= 'setConditions';
$arguments500['key'] = $output502;
$arguments498['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);
$arguments498['name'] = 'Submit';

$output475 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);

$output475 .= '
            ';
return $output475;
};
$arguments470 = array();
$arguments470['then'] = NULL;
$arguments470['else'] = NULL;
$arguments470['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array472 = array();
$array473 = array (
);$array472['0'] = $renderingContext->getVariableProvider()->getByPath('hasConditions', $array473);

$expression474 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments470['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression474(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array472)
					),
					$renderingContext
				);
$arguments470['__thenClosure'] = $renderChildrenClosure471;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output311 .= '
        </div>
    ';
return $output311;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#