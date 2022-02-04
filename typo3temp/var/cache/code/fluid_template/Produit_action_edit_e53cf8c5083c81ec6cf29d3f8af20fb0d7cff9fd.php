<?php

class Produit_action_edit_e53cf8c5083c81ec6cf29d3f8af20fb0d7cff9fd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
);return $renderingContext->getVariableProvider()->getByPath('produit.categry', $array15);
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
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['produit'] = $renderingContext->getVariableProvider()->getByPath('produit.categry.0.name', $array19);
$arguments16['options'] = $array18;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output8 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['name'] = NULL;
$arguments20['value'] = NULL;
$arguments20['property'] = NULL;
$arguments20['disabled'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['value'] = 'Save';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

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
$output22 = '';

$output22 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['name'] = NULL;
$arguments23['name'] = 'Default';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output22 .= '

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
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
    <h1>Edit Produit</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['queueIdentifier'] = NULL;
$arguments28['as'] = NULL;

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['section'] = NULL;
$arguments30['partial'] = NULL;
$arguments30['delegate'] = NULL;
$arguments30['renderable'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['optional'] = false;
$arguments30['default'] = NULL;
$arguments30['contentAs'] = NULL;
$arguments30['debug'] = true;
$arguments30['partial'] = 'FormErrors';

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['section'] = NULL;
$arguments36['partial'] = NULL;
$arguments36['delegate'] = NULL;
$arguments36['renderable'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$arguments36['default'] = NULL;
$arguments36['contentAs'] = NULL;
$arguments36['debug'] = true;
$arguments36['partial'] = 'Produit/FormFields';
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array39);
$arguments36['arguments'] = $array38;

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$array42 = array (
);return $renderingContext->getVariableProvider()->getByPath('produit.categry', $array42);
};
$arguments40 = array();
$arguments40['title'] = NULL;
$arguments40['maxDepth'] = 8;
$arguments40['plainText'] = false;
$arguments40['ansiColors'] = false;
$arguments40['inline'] = false;
$arguments40['blacklistedClassNames'] = NULL;
$arguments40['blacklistedPropertyNames'] = NULL;

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output35 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['name'] = NULL;
$arguments43['value'] = NULL;
$arguments43['property'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['size'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['options'] = NULL;
$arguments43['optionsAfterContent'] = false;
$arguments43['optionValueField'] = NULL;
$arguments43['optionLabelField'] = NULL;
$arguments43['sortByOptionLabel'] = false;
$arguments43['selectAllByDefault'] = false;
$arguments43['errorClass'] = 'f3-form-error';
$arguments43['prependOptionLabel'] = NULL;
$arguments43['prependOptionValue'] = NULL;
$arguments43['multiple'] = false;
$arguments43['required'] = false;
$arguments43['name'] = 'category';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['produit'] = $renderingContext->getVariableProvider()->getByPath('produit.categry.0.name', $array46);
$arguments43['options'] = $array45;

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output35 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['name'] = NULL;
$arguments47['value'] = NULL;
$arguments47['property'] = NULL;
$arguments47['disabled'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['value'] = 'Save';

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output35 .= '
    ';
return $output35;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['action'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['controller'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['pluginName'] = NULL;
$arguments32['pageUid'] = NULL;
$arguments32['object'] = NULL;
$arguments32['pageType'] = 0;
$arguments32['noCache'] = false;
$arguments32['noCacheHash'] = NULL;
$arguments32['section'] = '';
$arguments32['format'] = '';
$arguments32['additionalParams'] = array (
);
$arguments32['absolute'] = false;
$arguments32['addQueryString'] = false;
$arguments32['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments32['addQueryStringMethod'] = 'GET';
$arguments32['fieldNamePrefix'] = NULL;
$arguments32['actionUri'] = NULL;
$arguments32['objectName'] = NULL;
$arguments32['hiddenFieldClassName'] = NULL;
$arguments32['enctype'] = NULL;
$arguments32['method'] = NULL;
$arguments32['name'] = NULL;
$arguments32['onreset'] = NULL;
$arguments32['onsubmit'] = NULL;
$arguments32['target'] = NULL;
$arguments32['novalidate'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['action'] = 'update';
$arguments32['name'] = 'produit';
$array34 = array (
);$arguments32['object'] = $renderingContext->getVariableProvider()->getByPath('produit', $array34);

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output27 .= '
';
return $output27;
};
$arguments25 = array();
$arguments25['name'] = NULL;
$arguments25['name'] = 'content';

$output22 .= NULL;

$output22 .= '

';

return $output22;
}


}
#