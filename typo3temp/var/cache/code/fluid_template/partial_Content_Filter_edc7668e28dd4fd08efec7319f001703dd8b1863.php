<?php

class partial_Content_Filter_edc7668e28dd4fd08efec7319f001703dd8b1863 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
  'belog' => 
  array (
    0 => 'TYPO3\\CMS\\Belog\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '
    This is an ugly workaround.
    The function module in Web->Info already renders a form tag, and there is
    no easy way to circumvent this. The page id is needed for the info module
    that is not extbase based to figure the permissions. Thus, we have to add
    the page Id manually to hint the info module about that.
';
};
$arguments1 = array();

$output0 .= NULL;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
    <input type="hidden" name="id" value="';
$array9 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constraint.pageId', $array9)]);

$output8 .= '" />
';
return $output8;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('isSubmoduleLayout', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
    <div class="form-group">
        <label for="belog-users">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'users';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '</label>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['name'] = NULL;
$arguments16['value'] = NULL;
$arguments16['property'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['size'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['options'] = NULL;
$arguments16['optionsAfterContent'] = false;
$arguments16['optionValueField'] = NULL;
$arguments16['optionLabelField'] = NULL;
$arguments16['sortByOptionLabel'] = false;
$arguments16['selectAllByDefault'] = false;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['prependOptionLabel'] = NULL;
$arguments16['prependOptionValue'] = NULL;
$arguments16['multiple'] = false;
$arguments16['required'] = false;
$arguments16['property'] = 'userOrGroup';
$array18 = array (
);$arguments16['options'] = $renderingContext->getVariableProvider()->getByPath('userGroups', $array18);
// Rendering Array
$array19 = array();
$array19['data-global-event'] = 'change';
$array19['data-action-submit'] = '$form';
$arguments16['additionalAttributes'] = $array19;
$arguments16['class'] = 'form-control input-sm';
$arguments16['id'] = 'belog-users';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output13 .= '
    </div>

    <div class="form-group">
        <label for="belog-max">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['languageKey'] = NULL;
$arguments20['alternativeLanguageKeys'] = NULL;
$arguments20['key'] = 'max';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output13 .= '</label>
        ';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['size'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['options'] = NULL;
$arguments22['optionsAfterContent'] = false;
$arguments22['optionValueField'] = NULL;
$arguments22['optionLabelField'] = NULL;
$arguments22['sortByOptionLabel'] = false;
$arguments22['selectAllByDefault'] = false;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['prependOptionLabel'] = NULL;
$arguments22['prependOptionValue'] = NULL;
$arguments22['multiple'] = false;
$arguments22['required'] = false;
$arguments22['optionLabelPrefix'] = NULL;
$arguments22['property'] = 'number';
$array24 = array (
);$arguments22['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableNumberOfLogEntries', $array24);
$arguments22['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array25 = array();
$array25['data-global-event'] = 'change';
$array25['data-action-submit'] = '$form';
$arguments22['additionalAttributes'] = $array25;
$arguments22['class'] = 'form-control input-sm';
$arguments22['id'] = 'belog-max';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output13 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
        <div class="form-group">
            <label for="belog-workspaces">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['key'] = NULL;
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['languageKey'] = NULL;
$arguments32['alternativeLanguageKeys'] = NULL;
$arguments32['key'] = 'workspace';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output31 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['name'] = NULL;
$arguments34['value'] = NULL;
$arguments34['property'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['size'] = NULL;
$arguments34['disabled'] = NULL;
$arguments34['options'] = NULL;
$arguments34['optionsAfterContent'] = false;
$arguments34['optionValueField'] = NULL;
$arguments34['optionLabelField'] = NULL;
$arguments34['sortByOptionLabel'] = false;
$arguments34['selectAllByDefault'] = false;
$arguments34['errorClass'] = 'f3-form-error';
$arguments34['prependOptionLabel'] = NULL;
$arguments34['prependOptionValue'] = NULL;
$arguments34['multiple'] = false;
$arguments34['required'] = false;
$arguments34['property'] = 'workspaceUid';
$array36 = array (
);$arguments34['options'] = $renderingContext->getVariableProvider()->getByPath('workspaces', $array36);
// Rendering Array
$array37 = array();
$array37['data-global-event'] = 'change';
$array37['data-action-submit'] = '$form';
$arguments34['additionalAttributes'] = $array37;
$arguments34['class'] = 'form-control input-sm';
$arguments34['id'] = 'belog-workspaces';

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output31 .= '
        </div>
    ';
return $output31;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('showWorkspaceSelector', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
        <div class="form-group">
            <label for="belog-depth">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'chLog_menuDepth';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['name'] = NULL;
$arguments46['value'] = NULL;
$arguments46['property'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['size'] = NULL;
$arguments46['disabled'] = NULL;
$arguments46['options'] = NULL;
$arguments46['optionsAfterContent'] = false;
$arguments46['optionValueField'] = NULL;
$arguments46['optionLabelField'] = NULL;
$arguments46['sortByOptionLabel'] = false;
$arguments46['selectAllByDefault'] = false;
$arguments46['errorClass'] = 'f3-form-error';
$arguments46['prependOptionLabel'] = NULL;
$arguments46['prependOptionValue'] = NULL;
$arguments46['multiple'] = false;
$arguments46['required'] = false;
$arguments46['property'] = 'depth';
$array48 = array (
);$arguments46['options'] = $renderingContext->getVariableProvider()->getByPath('pageDepths', $array48);
// Rendering Array
$array49 = array();
$array49['data-global-event'] = 'change';
$array49['data-action-submit'] = '$form';
$arguments46['additionalAttributes'] = $array49;
$arguments46['class'] = 'form-control input-sm';
$arguments46['id'] = 'belog-depth';

$output43 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output43 .= '
        </div>
    ';
return $output43;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('isSubmoduleLayout', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['__thenClosure'] = $renderChildrenClosure39;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output13 .= '

    <div class="form-group">
        <label for="belog-time">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'time';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output13 .= '</label>
        ';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['name'] = NULL;
$arguments52['value'] = NULL;
$arguments52['property'] = NULL;
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['size'] = NULL;
$arguments52['disabled'] = NULL;
$arguments52['options'] = NULL;
$arguments52['optionsAfterContent'] = false;
$arguments52['optionValueField'] = NULL;
$arguments52['optionLabelField'] = NULL;
$arguments52['sortByOptionLabel'] = false;
$arguments52['selectAllByDefault'] = false;
$arguments52['errorClass'] = 'f3-form-error';
$arguments52['prependOptionLabel'] = NULL;
$arguments52['prependOptionValue'] = NULL;
$arguments52['multiple'] = false;
$arguments52['required'] = false;
$arguments52['optionLabelPrefix'] = NULL;
$arguments52['property'] = 'timeFrame';
$array54 = array (
);$arguments52['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableTimeFrames', $array54);
$arguments52['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array55 = array();
$array55['data-global-event'] = 'change';
$array55['data-action-submit'] = '$form';
$arguments52['additionalAttributes'] = $array55;
$arguments52['class'] = 'form-control input-sm';
$arguments52['id'] = 'belog-time';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output13 .= '
    </div>

    <div class="form-group">
        <label for="belog-action">';
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
$arguments56['key'] = 'action';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output13 .= '</label>
        ';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['name'] = NULL;
$arguments58['value'] = NULL;
$arguments58['property'] = NULL;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['size'] = NULL;
$arguments58['disabled'] = NULL;
$arguments58['options'] = NULL;
$arguments58['optionsAfterContent'] = false;
$arguments58['optionValueField'] = NULL;
$arguments58['optionLabelField'] = NULL;
$arguments58['sortByOptionLabel'] = false;
$arguments58['selectAllByDefault'] = false;
$arguments58['errorClass'] = 'f3-form-error';
$arguments58['prependOptionLabel'] = NULL;
$arguments58['prependOptionValue'] = NULL;
$arguments58['multiple'] = false;
$arguments58['required'] = false;
$arguments58['optionLabelPrefix'] = NULL;
$arguments58['property'] = 'action';
$array60 = array (
);$arguments58['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableActions', $array60);
$arguments58['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array61 = array();
$array61['data-global-event'] = 'change';
$array61['data-action-submit'] = '$form';
$arguments58['additionalAttributes'] = $array61;
$arguments58['class'] = 'form-control input-sm';
$arguments58['id'] = 'belog-action';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output13 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
        <div class="form-group">
            <label for="belog-group">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['languageKey'] = NULL;
$arguments68['alternativeLanguageKeys'] = NULL;
$arguments68['key'] = 'groupByPage';

$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output67 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
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
$arguments70['errorClass'] = 'f3-form-error';
$arguments70['class'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['checked'] = NULL;
$arguments70['multiple'] = false;
$arguments70['property'] = 'groupByPage';
$arguments70['value'] = 1;
// Rendering Array
$array72 = array();
$array72['data-global-event'] = 'change';
$array72['data-action-submit'] = '$form';
$arguments70['additionalAttributes'] = $array72;
$arguments70['id'] = 'belog-group';

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output67 .= '
        </div>
    ';
return $output67;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.depth', $array65);
$array64['1'] = ' > 0';

$expression66 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output13 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return '
        Date time fields for manual date selection
    ';
};
$arguments73 = array();

$output13 .= NULL;

$output13 .= '


    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['pageTitle'] = '';
$arguments81['includeCssFiles'] = NULL;
$arguments81['includeJsFiles'] = NULL;
$arguments81['addJsInlineLabels'] = NULL;
$arguments81['includeRequireJsModules'] = NULL;
$arguments81['addInlineSettings'] = NULL;
// Rendering Array
$array83 = array();
$array83['0'] = 'TYPO3/CMS/Backend/DateTimePicker';
$arguments81['includeRequireJsModules'] = $array83;

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output80 .= '
        <div class="form-group">
            <label for="manualDateStart">';
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
$arguments84['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:from';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output80 .= '</label>
            <div class="input-group input-group-sm">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['name'] = NULL;
$arguments86['value'] = NULL;
$arguments86['property'] = NULL;
$arguments86['autofocus'] = NULL;
$arguments86['disabled'] = NULL;
$arguments86['maxlength'] = NULL;
$arguments86['readonly'] = NULL;
$arguments86['size'] = NULL;
$arguments86['placeholder'] = NULL;
$arguments86['pattern'] = NULL;
$arguments86['errorClass'] = 'f3-form-error';
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['required'] = false;
$arguments86['type'] = 'text';
$arguments86['name'] = 'manualDateStart';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['date'] = NULL;
$arguments93['format'] = '';
$arguments93['base'] = NULL;
$output95 = '';
$array96 = array (
);
$output95 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array96);

$output95 .= ' ';
$array97 = array (
);
$output95 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array97);
$arguments93['format'] = $output95;
$array98 = array (
);$arguments93['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array98);
$renderChildrenClosure94 = ($arguments93['date'] !== null) ? function() use ($arguments93) { return $arguments93['date']; } : $renderChildrenClosure94;$arguments88['then'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);
$arguments86['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);
$arguments86['id'] = 'manualDateStart';
$arguments86['class'] = 'form-control input-sm t3js-datetimepicker t3js-clearable';
// Rendering Array
$array99 = array();
$array99['date-type'] = 'datetime';
$arguments86['data'] = $array99;

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output80 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['name'] = NULL;
$arguments100['value'] = NULL;
$arguments100['property'] = NULL;
$arguments100['class'] = NULL;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['title'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$arguments100['property'] = 'manualDateStart';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array105);

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['date'] = NULL;
$arguments107['format'] = '';
$arguments107['base'] = NULL;
$arguments107['format'] = 'c';
$array109 = array (
);$arguments107['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array109);
$renderChildrenClosure108 = ($arguments107['date'] !== null) ? function() use ($arguments107) { return $arguments107['date']; } : $renderChildrenClosure108;$arguments102['then'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
$arguments100['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output80 .= '
                <span class="input-group-btn">
                    <label class="btn btn-default" for="manualDateStart">
                        <span class="fa fa-calendar"></span>
                    </label>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label for="manualDateStop">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['key'] = NULL;
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['languageKey'] = NULL;
$arguments110['alternativeLanguageKeys'] = NULL;
$arguments110['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:to';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output80 .= '</label>
            <div class="input-group input-group-sm">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['additionalAttributes'] = NULL;
$arguments112['data'] = NULL;
$arguments112['name'] = NULL;
$arguments112['value'] = NULL;
$arguments112['property'] = NULL;
$arguments112['autofocus'] = NULL;
$arguments112['disabled'] = NULL;
$arguments112['maxlength'] = NULL;
$arguments112['readonly'] = NULL;
$arguments112['size'] = NULL;
$arguments112['placeholder'] = NULL;
$arguments112['pattern'] = NULL;
$arguments112['errorClass'] = 'f3-form-error';
$arguments112['class'] = NULL;
$arguments112['dir'] = NULL;
$arguments112['id'] = NULL;
$arguments112['lang'] = NULL;
$arguments112['style'] = NULL;
$arguments112['title'] = NULL;
$arguments112['accesskey'] = NULL;
$arguments112['tabindex'] = NULL;
$arguments112['onclick'] = NULL;
$arguments112['required'] = false;
$arguments112['type'] = 'text';
$arguments112['name'] = 'manualDateStop';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['date'] = NULL;
$arguments114['format'] = '';
$arguments114['base'] = NULL;
$output116 = '';
$array117 = array (
);
$output116 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array117);

$output116 .= ' ';
$array118 = array (
);
$output116 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array118);
$arguments114['format'] = $output116;
$array119 = array (
);$arguments114['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array119);
$renderChildrenClosure115 = ($arguments114['date'] !== null) ? function() use ($arguments114) { return $arguments114['date']; } : $renderChildrenClosure115;$arguments112['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);
$arguments112['id'] = 'manualDateStop';
$arguments112['class'] = 'form-control input-sm t3js-datetimepicker t3js-clearable';
// Rendering Array
$array120 = array();
$array120['date-type'] = 'datetime';
$arguments112['data'] = $array120;

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output80 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['additionalAttributes'] = NULL;
$arguments121['data'] = NULL;
$arguments121['name'] = NULL;
$arguments121['value'] = NULL;
$arguments121['property'] = NULL;
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['id'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$arguments121['property'] = 'manualDateStop';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['date'] = NULL;
$arguments123['format'] = '';
$arguments123['base'] = NULL;
$arguments123['format'] = 'c';
$array125 = array (
);$arguments123['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array125);
$renderChildrenClosure124 = ($arguments123['date'] !== null) ? function() use ($arguments123) { return $arguments123['date']; } : $renderChildrenClosure124;$arguments121['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output80 .= '
                <span class="input-group-btn">
                    <label class="btn btn-default" for="manualDateStop">
                        <span class="fa fa-calendar"></span>
                    </label>
                </span>
            </div>
        </div>

        <div class="form-group">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['additionalAttributes'] = NULL;
$arguments126['data'] = NULL;
$arguments126['name'] = NULL;
$arguments126['value'] = NULL;
$arguments126['property'] = NULL;
$arguments126['disabled'] = NULL;
$arguments126['class'] = NULL;
$arguments126['dir'] = NULL;
$arguments126['id'] = NULL;
$arguments126['lang'] = NULL;
$arguments126['style'] = NULL;
$arguments126['title'] = NULL;
$arguments126['accesskey'] = NULL;
$arguments126['tabindex'] = NULL;
$arguments126['onclick'] = NULL;
$arguments126['id'] = 'submit-constraint';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'set';
$arguments126['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);
$arguments126['class'] = 'btn btn-default btn-sm';

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output80 .= '
        </div>
    ';
return $output80;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.timeFrame', $array78);
$array77['1'] = ' == 30';

$expression79 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 30);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = $renderChildrenClosure76;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output13 .= '
';
return $output13;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['action'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['controller'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['pluginName'] = NULL;
$arguments10['pageUid'] = NULL;
$arguments10['object'] = NULL;
$arguments10['pageType'] = 0;
$arguments10['noCache'] = false;
$arguments10['noCacheHash'] = NULL;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['additionalParams'] = array (
);
$arguments10['absolute'] = false;
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['addQueryStringMethod'] = 'GET';
$arguments10['fieldNamePrefix'] = NULL;
$arguments10['actionUri'] = NULL;
$arguments10['objectName'] = NULL;
$arguments10['hiddenFieldClassName'] = NULL;
$arguments10['enctype'] = NULL;
$arguments10['method'] = NULL;
$arguments10['name'] = NULL;
$arguments10['onreset'] = NULL;
$arguments10['onsubmit'] = NULL;
$arguments10['target'] = NULL;
$arguments10['novalidate'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$array12 = array (
);$arguments10['object'] = $renderingContext->getVariableProvider()->getByPath('constraint', $array12);
$arguments10['action'] = 'list';
$arguments10['name'] = 'constraint';
$arguments10['class'] = 'form-inline form-inline-spaced';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '


';

return $output0;
}


}
#