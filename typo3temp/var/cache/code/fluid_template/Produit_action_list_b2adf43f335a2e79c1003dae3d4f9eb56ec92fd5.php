<?php

class Produit_action_list_b2adf43f335a2e79c1003dae3d4f9eb56ec92fd5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <h1>Listing for Produit</h1>

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

    <table class="tx_testkeys">
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'tx_testkeys_domain_model_produit.name';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['key'] = NULL;
$arguments5['id'] = NULL;
$arguments5['default'] = NULL;
$arguments5['arguments'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['languageKey'] = NULL;
$arguments5['alternativeLanguageKeys'] = NULL;
$arguments5['key'] = 'tx_testkeys_domain_model_produit.prix';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</th>
            <th>';
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
$arguments7['key'] = 'tx_testkeys_domain_model_produit.stock';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'tx_testkeys_domain_model_produit.description';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'tx_testkeys_domain_model_produit.slug';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</th>
            <th>Category</th>
            <th></th>
            <th></th>
        </tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array21 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.name', $array21)]);
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = NULL;
$arguments17['rel'] = NULL;
$arguments17['rev'] = NULL;
$arguments17['target'] = NULL;
$arguments17['action'] = NULL;
$arguments17['controller'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['pluginName'] = NULL;
$arguments17['pageUid'] = NULL;
$arguments17['pageType'] = NULL;
$arguments17['noCache'] = NULL;
$arguments17['noCacheHash'] = NULL;
$arguments17['section'] = NULL;
$arguments17['format'] = NULL;
$arguments17['linkAccessRestrictedPages'] = NULL;
$arguments17['additionalParams'] = NULL;
$arguments17['absolute'] = NULL;
$arguments17['addQueryString'] = NULL;
$arguments17['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments17['addQueryStringMethod'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['action'] = 'show';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array20);
$arguments17['arguments'] = $array19;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array26 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.prix', $array26)]);
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['name'] = NULL;
$arguments22['rel'] = NULL;
$arguments22['rev'] = NULL;
$arguments22['target'] = NULL;
$arguments22['action'] = NULL;
$arguments22['controller'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['pluginName'] = NULL;
$arguments22['pageUid'] = NULL;
$arguments22['pageType'] = NULL;
$arguments22['noCache'] = NULL;
$arguments22['noCacheHash'] = NULL;
$arguments22['section'] = NULL;
$arguments22['format'] = NULL;
$arguments22['linkAccessRestrictedPages'] = NULL;
$arguments22['additionalParams'] = NULL;
$arguments22['absolute'] = NULL;
$arguments22['addQueryString'] = NULL;
$arguments22['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments22['addQueryStringMethod'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['action'] = 'show';
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array25);
$arguments22['arguments'] = $array24;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array31 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.stock', $array31)]);
};
$arguments27 = array();
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['name'] = NULL;
$arguments27['rel'] = NULL;
$arguments27['rev'] = NULL;
$arguments27['target'] = NULL;
$arguments27['action'] = NULL;
$arguments27['controller'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['pluginName'] = NULL;
$arguments27['pageUid'] = NULL;
$arguments27['pageType'] = NULL;
$arguments27['noCache'] = NULL;
$arguments27['noCacheHash'] = NULL;
$arguments27['section'] = NULL;
$arguments27['format'] = NULL;
$arguments27['linkAccessRestrictedPages'] = NULL;
$arguments27['additionalParams'] = NULL;
$arguments27['absolute'] = NULL;
$arguments27['addQueryString'] = NULL;
$arguments27['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments27['addQueryStringMethod'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['action'] = 'show';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array30);
$arguments27['arguments'] = $array29;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array36 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.description', $array36)]);
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['name'] = NULL;
$arguments32['rel'] = NULL;
$arguments32['rev'] = NULL;
$arguments32['target'] = NULL;
$arguments32['action'] = NULL;
$arguments32['controller'] = NULL;
$arguments32['extensionName'] = NULL;
$arguments32['pluginName'] = NULL;
$arguments32['pageUid'] = NULL;
$arguments32['pageType'] = NULL;
$arguments32['noCache'] = NULL;
$arguments32['noCacheHash'] = NULL;
$arguments32['section'] = NULL;
$arguments32['format'] = NULL;
$arguments32['linkAccessRestrictedPages'] = NULL;
$arguments32['additionalParams'] = NULL;
$arguments32['absolute'] = NULL;
$arguments32['addQueryString'] = NULL;
$arguments32['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments32['addQueryStringMethod'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['action'] = 'show';
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array35);
$arguments32['arguments'] = $array34;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$array41 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.slug', $array41)]);
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['name'] = NULL;
$arguments37['rel'] = NULL;
$arguments37['rev'] = NULL;
$arguments37['target'] = NULL;
$arguments37['action'] = NULL;
$arguments37['controller'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['pluginName'] = NULL;
$arguments37['pageUid'] = NULL;
$arguments37['pageType'] = NULL;
$arguments37['noCache'] = NULL;
$arguments37['noCacheHash'] = NULL;
$arguments37['section'] = NULL;
$arguments37['format'] = NULL;
$arguments37['linkAccessRestrictedPages'] = NULL;
$arguments37['additionalParams'] = NULL;
$arguments37['absolute'] = NULL;
$arguments37['addQueryString'] = NULL;
$arguments37['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments37['addQueryStringMethod'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['action'] = 'show';
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array40);
$arguments37['arguments'] = $array39;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array46 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.category.0.name', $array46)]);
};
$arguments42 = array();
$arguments42['additionalAttributes'] = NULL;
$arguments42['data'] = NULL;
$arguments42['class'] = NULL;
$arguments42['dir'] = NULL;
$arguments42['id'] = NULL;
$arguments42['lang'] = NULL;
$arguments42['style'] = NULL;
$arguments42['title'] = NULL;
$arguments42['accesskey'] = NULL;
$arguments42['tabindex'] = NULL;
$arguments42['onclick'] = NULL;
$arguments42['name'] = NULL;
$arguments42['rel'] = NULL;
$arguments42['rev'] = NULL;
$arguments42['target'] = NULL;
$arguments42['action'] = NULL;
$arguments42['controller'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['pluginName'] = NULL;
$arguments42['pageUid'] = NULL;
$arguments42['pageType'] = NULL;
$arguments42['noCache'] = NULL;
$arguments42['noCacheHash'] = NULL;
$arguments42['section'] = NULL;
$arguments42['format'] = NULL;
$arguments42['linkAccessRestrictedPages'] = NULL;
$arguments42['additionalParams'] = NULL;
$arguments42['absolute'] = NULL;
$arguments42['addQueryString'] = NULL;
$arguments42['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments42['addQueryStringMethod'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['action'] = 'show';
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array45);
$arguments42['arguments'] = $array44;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments47 = array();
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['name'] = NULL;
$arguments47['rel'] = NULL;
$arguments47['rev'] = NULL;
$arguments47['target'] = NULL;
$arguments47['action'] = NULL;
$arguments47['controller'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['pluginName'] = NULL;
$arguments47['pageUid'] = NULL;
$arguments47['pageType'] = NULL;
$arguments47['noCache'] = NULL;
$arguments47['noCacheHash'] = NULL;
$arguments47['section'] = NULL;
$arguments47['format'] = NULL;
$arguments47['linkAccessRestrictedPages'] = NULL;
$arguments47['additionalParams'] = NULL;
$arguments47['absolute'] = NULL;
$arguments47['addQueryString'] = NULL;
$arguments47['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments47['addQueryStringMethod'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['action'] = 'edit';
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array50);
$arguments47['arguments'] = $array49;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments51 = array();
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['name'] = NULL;
$arguments51['rel'] = NULL;
$arguments51['rev'] = NULL;
$arguments51['target'] = NULL;
$arguments51['action'] = NULL;
$arguments51['controller'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['pluginName'] = NULL;
$arguments51['pageUid'] = NULL;
$arguments51['pageType'] = NULL;
$arguments51['noCache'] = NULL;
$arguments51['noCacheHash'] = NULL;
$arguments51['section'] = NULL;
$arguments51['format'] = NULL;
$arguments51['linkAccessRestrictedPages'] = NULL;
$arguments51['additionalParams'] = NULL;
$arguments51['absolute'] = NULL;
$arguments51['addQueryString'] = NULL;
$arguments51['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments51['addQueryStringMethod'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['action'] = 'delete';
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array54);
$arguments51['arguments'] = $array53;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output16 .= '</td>
            </tr>
        ';
return $output16;
};
$arguments13 = array();
$arguments13['each'] = NULL;
$arguments13['as'] = NULL;
$arguments13['key'] = NULL;
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$array15 = array (
);$arguments13['each'] = $renderingContext->getVariableProvider()->getByPath('produits', $array15);
$arguments13['as'] = 'produit';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return 'New Produit';
};
$arguments55 = array();
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['class'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$arguments55['name'] = NULL;
$arguments55['rel'] = NULL;
$arguments55['rev'] = NULL;
$arguments55['target'] = NULL;
$arguments55['action'] = NULL;
$arguments55['controller'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['pluginName'] = NULL;
$arguments55['pageUid'] = NULL;
$arguments55['pageType'] = NULL;
$arguments55['noCache'] = NULL;
$arguments55['noCacheHash'] = NULL;
$arguments55['section'] = NULL;
$arguments55['format'] = NULL;
$arguments55['linkAccessRestrictedPages'] = NULL;
$arguments55['additionalParams'] = NULL;
$arguments55['absolute'] = NULL;
$arguments55['addQueryString'] = NULL;
$arguments55['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments55['addQueryStringMethod'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output57 = '';

$output57 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['name'] = NULL;
$arguments58['name'] = 'Default';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output57 .= '

This template is responsible for creating a table of domain objects.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        Produit:
          List.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
    <h1>Listing for Produit</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['queueIdentifier'] = NULL;
$arguments63['as'] = NULL;

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '

    <table class="tx_testkeys">
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['languageKey'] = NULL;
$arguments65['alternativeLanguageKeys'] = NULL;
$arguments65['key'] = 'tx_testkeys_domain_model_produit.name';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output62 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$arguments67['key'] = 'tx_testkeys_domain_model_produit.prix';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output62 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'tx_testkeys_domain_model_produit.stock';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output62 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'tx_testkeys_domain_model_produit.description';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output62 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['key'] = NULL;
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['languageKey'] = NULL;
$arguments73['alternativeLanguageKeys'] = NULL;
$arguments73['key'] = 'tx_testkeys_domain_model_produit.slug';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output62 .= '</th>
            <th>Category</th>
            <th></th>
            <th></th>
        </tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array83 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.name', $array83)]);
};
$arguments79 = array();
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['name'] = NULL;
$arguments79['rel'] = NULL;
$arguments79['rev'] = NULL;
$arguments79['target'] = NULL;
$arguments79['action'] = NULL;
$arguments79['controller'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['pluginName'] = NULL;
$arguments79['pageUid'] = NULL;
$arguments79['pageType'] = NULL;
$arguments79['noCache'] = NULL;
$arguments79['noCacheHash'] = NULL;
$arguments79['section'] = NULL;
$arguments79['format'] = NULL;
$arguments79['linkAccessRestrictedPages'] = NULL;
$arguments79['additionalParams'] = NULL;
$arguments79['absolute'] = NULL;
$arguments79['addQueryString'] = NULL;
$arguments79['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments79['addQueryStringMethod'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['action'] = 'show';
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array82);
$arguments79['arguments'] = $array81;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array88 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.prix', $array88)]);
};
$arguments84 = array();
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['name'] = NULL;
$arguments84['rel'] = NULL;
$arguments84['rev'] = NULL;
$arguments84['target'] = NULL;
$arguments84['action'] = NULL;
$arguments84['controller'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['pluginName'] = NULL;
$arguments84['pageUid'] = NULL;
$arguments84['pageType'] = NULL;
$arguments84['noCache'] = NULL;
$arguments84['noCacheHash'] = NULL;
$arguments84['section'] = NULL;
$arguments84['format'] = NULL;
$arguments84['linkAccessRestrictedPages'] = NULL;
$arguments84['additionalParams'] = NULL;
$arguments84['absolute'] = NULL;
$arguments84['addQueryString'] = NULL;
$arguments84['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments84['addQueryStringMethod'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['action'] = 'show';
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array87);
$arguments84['arguments'] = $array86;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output78 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array93 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.stock', $array93)]);
};
$arguments89 = array();
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['name'] = NULL;
$arguments89['rel'] = NULL;
$arguments89['rev'] = NULL;
$arguments89['target'] = NULL;
$arguments89['action'] = NULL;
$arguments89['controller'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['pluginName'] = NULL;
$arguments89['pageUid'] = NULL;
$arguments89['pageType'] = NULL;
$arguments89['noCache'] = NULL;
$arguments89['noCacheHash'] = NULL;
$arguments89['section'] = NULL;
$arguments89['format'] = NULL;
$arguments89['linkAccessRestrictedPages'] = NULL;
$arguments89['additionalParams'] = NULL;
$arguments89['absolute'] = NULL;
$arguments89['addQueryString'] = NULL;
$arguments89['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments89['addQueryStringMethod'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['action'] = 'show';
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array92);
$arguments89['arguments'] = $array91;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output78 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array98 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.description', $array98)]);
};
$arguments94 = array();
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$arguments94['name'] = NULL;
$arguments94['rel'] = NULL;
$arguments94['rev'] = NULL;
$arguments94['target'] = NULL;
$arguments94['action'] = NULL;
$arguments94['controller'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['pluginName'] = NULL;
$arguments94['pageUid'] = NULL;
$arguments94['pageType'] = NULL;
$arguments94['noCache'] = NULL;
$arguments94['noCacheHash'] = NULL;
$arguments94['section'] = NULL;
$arguments94['format'] = NULL;
$arguments94['linkAccessRestrictedPages'] = NULL;
$arguments94['additionalParams'] = NULL;
$arguments94['absolute'] = NULL;
$arguments94['addQueryString'] = NULL;
$arguments94['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments94['addQueryStringMethod'] = NULL;
$arguments94['arguments'] = NULL;
$arguments94['action'] = 'show';
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array97);
$arguments94['arguments'] = $array96;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output78 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$array103 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.slug', $array103)]);
};
$arguments99 = array();
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = NULL;
$arguments99['rel'] = NULL;
$arguments99['rev'] = NULL;
$arguments99['target'] = NULL;
$arguments99['action'] = NULL;
$arguments99['controller'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['pluginName'] = NULL;
$arguments99['pageUid'] = NULL;
$arguments99['pageType'] = NULL;
$arguments99['noCache'] = NULL;
$arguments99['noCacheHash'] = NULL;
$arguments99['section'] = NULL;
$arguments99['format'] = NULL;
$arguments99['linkAccessRestrictedPages'] = NULL;
$arguments99['additionalParams'] = NULL;
$arguments99['absolute'] = NULL;
$arguments99['addQueryString'] = NULL;
$arguments99['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments99['addQueryStringMethod'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['action'] = 'show';
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array102);
$arguments99['arguments'] = $array101;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output78 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array108 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.category.0.name', $array108)]);
};
$arguments104 = array();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['name'] = NULL;
$arguments104['rel'] = NULL;
$arguments104['rev'] = NULL;
$arguments104['target'] = NULL;
$arguments104['action'] = NULL;
$arguments104['controller'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['pluginName'] = NULL;
$arguments104['pageUid'] = NULL;
$arguments104['pageType'] = NULL;
$arguments104['noCache'] = NULL;
$arguments104['noCacheHash'] = NULL;
$arguments104['section'] = NULL;
$arguments104['format'] = NULL;
$arguments104['linkAccessRestrictedPages'] = NULL;
$arguments104['additionalParams'] = NULL;
$arguments104['absolute'] = NULL;
$arguments104['addQueryString'] = NULL;
$arguments104['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments104['addQueryStringMethod'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['action'] = 'show';
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array107);
$arguments104['arguments'] = $array106;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output78 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments109 = array();
$arguments109['additionalAttributes'] = NULL;
$arguments109['data'] = NULL;
$arguments109['class'] = NULL;
$arguments109['dir'] = NULL;
$arguments109['id'] = NULL;
$arguments109['lang'] = NULL;
$arguments109['style'] = NULL;
$arguments109['title'] = NULL;
$arguments109['accesskey'] = NULL;
$arguments109['tabindex'] = NULL;
$arguments109['onclick'] = NULL;
$arguments109['name'] = NULL;
$arguments109['rel'] = NULL;
$arguments109['rev'] = NULL;
$arguments109['target'] = NULL;
$arguments109['action'] = NULL;
$arguments109['controller'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['pluginName'] = NULL;
$arguments109['pageUid'] = NULL;
$arguments109['pageType'] = NULL;
$arguments109['noCache'] = NULL;
$arguments109['noCacheHash'] = NULL;
$arguments109['section'] = NULL;
$arguments109['format'] = NULL;
$arguments109['linkAccessRestrictedPages'] = NULL;
$arguments109['additionalParams'] = NULL;
$arguments109['absolute'] = NULL;
$arguments109['addQueryString'] = NULL;
$arguments109['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments109['addQueryStringMethod'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['action'] = 'edit';
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array112);
$arguments109['arguments'] = $array111;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output78 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments113 = array();
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$arguments113['name'] = NULL;
$arguments113['rel'] = NULL;
$arguments113['rev'] = NULL;
$arguments113['target'] = NULL;
$arguments113['action'] = NULL;
$arguments113['controller'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['pluginName'] = NULL;
$arguments113['pageUid'] = NULL;
$arguments113['pageType'] = NULL;
$arguments113['noCache'] = NULL;
$arguments113['noCacheHash'] = NULL;
$arguments113['section'] = NULL;
$arguments113['format'] = NULL;
$arguments113['linkAccessRestrictedPages'] = NULL;
$arguments113['additionalParams'] = NULL;
$arguments113['absolute'] = NULL;
$arguments113['addQueryString'] = NULL;
$arguments113['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments113['addQueryStringMethod'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['action'] = 'delete';
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array116);
$arguments113['arguments'] = $array115;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output78 .= '</td>
            </tr>
        ';
return $output78;
};
$arguments75 = array();
$arguments75['each'] = NULL;
$arguments75['as'] = NULL;
$arguments75['key'] = NULL;
$arguments75['reverse'] = false;
$arguments75['iteration'] = NULL;
$array77 = array (
);$arguments75['each'] = $renderingContext->getVariableProvider()->getByPath('produits', $array77);
$arguments75['as'] = 'produit';

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output62 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return 'New Produit';
};
$arguments117 = array();
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$arguments117['name'] = NULL;
$arguments117['rel'] = NULL;
$arguments117['rev'] = NULL;
$arguments117['target'] = NULL;
$arguments117['action'] = NULL;
$arguments117['controller'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['pluginName'] = NULL;
$arguments117['pageUid'] = NULL;
$arguments117['pageType'] = NULL;
$arguments117['noCache'] = NULL;
$arguments117['noCacheHash'] = NULL;
$arguments117['section'] = NULL;
$arguments117['format'] = NULL;
$arguments117['linkAccessRestrictedPages'] = NULL;
$arguments117['additionalParams'] = NULL;
$arguments117['absolute'] = NULL;
$arguments117['addQueryString'] = NULL;
$arguments117['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments117['addQueryStringMethod'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['action'] = 'new';

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output62 .= '
';
return $output62;
};
$arguments60 = array();
$arguments60['name'] = NULL;
$arguments60['name'] = 'content';

$output57 .= NULL;

$output57 .= '

';

return $output57;
}


}
#