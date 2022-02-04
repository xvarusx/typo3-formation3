<?php

class Produit_action_edit_e4c32405a86cfb4b1be55a76eec71a1b0e8dd1a3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>Edit Produit</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['section'] = NULL;
$arguments3['partial'] = NULL;
$arguments3['delegate'] = NULL;
$arguments3['renderable'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['optional'] = false;
$arguments3['default'] = NULL;
$arguments3['contentAs'] = NULL;
$arguments3['debug'] = true;
$arguments3['partial'] = 'FormErrors';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['section'] = NULL;
$arguments9['partial'] = NULL;
$arguments9['delegate'] = NULL;
$arguments9['renderable'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$arguments9['default'] = NULL;
$arguments9['contentAs'] = NULL;
$arguments9['debug'] = true;
$arguments9['partial'] = 'Produit/FormFields';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array12);
$arguments9['arguments'] = $array11;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('produit', $array15);
};
$arguments13 = array();
$arguments13['title'] = NULL;
$arguments13['maxDepth'] = 8;
$arguments13['plainText'] = false;
$arguments13['ansiColors'] = false;
$arguments13['inline'] = false;
$arguments13['blacklistedClassNames'] = NULL;
$arguments13['blacklistedPropertyNames'] = NULL;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output8 .= '
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
$arguments16['name'] = 'category';
$array18 = array (
);$arguments16['options'] = $renderingContext->getVariableProvider()->getByPath('produit', $array18);

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output8 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['name'] = NULL;
$arguments19['value'] = NULL;
$arguments19['property'] = NULL;
$arguments19['disabled'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['value'] = 'Save';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output8 .= '
    ';
return $output8;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['action'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['object'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = false;
$arguments5['noCacheHash'] = NULL;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['addQueryStringMethod'] = 'GET';
$arguments5['fieldNamePrefix'] = NULL;
$arguments5['actionUri'] = NULL;
$arguments5['objectName'] = NULL;
$arguments5['hiddenFieldClassName'] = NULL;
$arguments5['enctype'] = NULL;
$arguments5['method'] = NULL;
$arguments5['name'] = NULL;
$arguments5['onreset'] = NULL;
$arguments5['onsubmit'] = NULL;
$arguments5['target'] = NULL;
$arguments5['novalidate'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['action'] = 'update';
$arguments5['name'] = 'produit';
$array7 = array (
);$arguments5['object'] = $renderingContext->getVariableProvider()->getByPath('produit', $array7);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output21 = '';

$output21 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['name'] = NULL;
$arguments22['name'] = 'Default';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output21 .= '

This template displays a EDIT form for the current domain object.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        Produit:
          Edit.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
    <h1>Edit Produit</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['queueIdentifier'] = NULL;
$arguments27['as'] = NULL;

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['section'] = NULL;
$arguments29['partial'] = NULL;
$arguments29['delegate'] = NULL;
$arguments29['renderable'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['optional'] = false;
$arguments29['default'] = NULL;
$arguments29['contentAs'] = NULL;
$arguments29['debug'] = true;
$arguments29['partial'] = 'FormErrors';

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output26 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['section'] = NULL;
$arguments35['partial'] = NULL;
$arguments35['delegate'] = NULL;
$arguments35['renderable'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['optional'] = false;
$arguments35['default'] = NULL;
$arguments35['contentAs'] = NULL;
$arguments35['debug'] = true;
$arguments35['partial'] = 'Produit/FormFields';
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array38);
$arguments35['arguments'] = $array37;

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('produit', $array41);
};
$arguments39 = array();
$arguments39['title'] = NULL;
$arguments39['maxDepth'] = 8;
$arguments39['plainText'] = false;
$arguments39['ansiColors'] = false;
$arguments39['inline'] = false;
$arguments39['blacklistedClassNames'] = NULL;
$arguments39['blacklistedPropertyNames'] = NULL;

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output34 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['name'] = NULL;
$arguments42['value'] = NULL;
$arguments42['property'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['size'] = NULL;
$arguments42['disabled'] = NULL;
$arguments42['options'] = NULL;
$arguments42['optionsAfterContent'] = false;
$arguments42['optionValueField'] = NULL;
$arguments42['optionLabelField'] = NULL;
$arguments42['sortByOptionLabel'] = false;
$arguments42['selectAllByDefault'] = false;
$arguments42['errorClass'] = 'f3-form-error';
$arguments42['prependOptionLabel'] = NULL;
$arguments42['prependOptionValue'] = NULL;
$arguments42['multiple'] = false;
$arguments42['required'] = false;
$arguments42['name'] = 'category';
$array44 = array (
);$arguments42['options'] = $renderingContext->getVariableProvider()->getByPath('produit', $array44);

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output34 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['value'] = 'Save';

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output34 .= '
    ';
return $output34;
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['action'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['controller'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['pluginName'] = NULL;
$arguments31['pageUid'] = NULL;
$arguments31['object'] = NULL;
$arguments31['pageType'] = 0;
$arguments31['noCache'] = false;
$arguments31['noCacheHash'] = NULL;
$arguments31['section'] = '';
$arguments31['format'] = '';
$arguments31['additionalParams'] = array (
);
$arguments31['absolute'] = false;
$arguments31['addQueryString'] = false;
$arguments31['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments31['addQueryStringMethod'] = 'GET';
$arguments31['fieldNamePrefix'] = NULL;
$arguments31['actionUri'] = NULL;
$arguments31['objectName'] = NULL;
$arguments31['hiddenFieldClassName'] = NULL;
$arguments31['enctype'] = NULL;
$arguments31['method'] = NULL;
$arguments31['name'] = NULL;
$arguments31['onreset'] = NULL;
$arguments31['onsubmit'] = NULL;
$arguments31['target'] = NULL;
$arguments31['novalidate'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['action'] = 'update';
$arguments31['name'] = 'produit';
$array33 = array (
);$arguments31['object'] = $renderingContext->getVariableProvider()->getByPath('produit', $array33);

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output26 .= '
';
return $output26;
};
$arguments24 = array();
$arguments24['name'] = NULL;
$arguments24['name'] = 'content';

$output21 .= NULL;

$output21 .= '

';

return $output21;
}


}
#