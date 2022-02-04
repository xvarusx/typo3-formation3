<?php

class Produit_action_list_cebb72abf76dcbd5060ed8509718e2e559d672d8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$array42 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.category.0.name', $array42)]);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['name'] = NULL;
$arguments43['rel'] = NULL;
$arguments43['rev'] = NULL;
$arguments43['target'] = NULL;
$arguments43['action'] = NULL;
$arguments43['controller'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['pluginName'] = NULL;
$arguments43['pageUid'] = NULL;
$arguments43['pageType'] = NULL;
$arguments43['noCache'] = NULL;
$arguments43['noCacheHash'] = NULL;
$arguments43['section'] = NULL;
$arguments43['format'] = NULL;
$arguments43['linkAccessRestrictedPages'] = NULL;
$arguments43['additionalParams'] = NULL;
$arguments43['absolute'] = NULL;
$arguments43['addQueryString'] = NULL;
$arguments43['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments43['addQueryStringMethod'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['action'] = 'edit';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array46);
$arguments43['arguments'] = $array45;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return 'Delete';
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
$arguments47['action'] = 'delete';
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array50);
$arguments47['arguments'] = $array49;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

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
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return 'New Produit';
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
$arguments51['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output53 = '';

$output53 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['name'] = NULL;
$arguments54['name'] = 'Default';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output53 .= '

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
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
    <h1>Listing for Produit</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['queueIdentifier'] = NULL;
$arguments59['as'] = NULL;

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '

    <table class="tx_testkeys">
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['languageKey'] = NULL;
$arguments61['alternativeLanguageKeys'] = NULL;
$arguments61['key'] = 'tx_testkeys_domain_model_produit.name';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output58 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['key'] = NULL;
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['languageKey'] = NULL;
$arguments63['alternativeLanguageKeys'] = NULL;
$arguments63['key'] = 'tx_testkeys_domain_model_produit.prix';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output58 .= '</th>
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
$arguments65['key'] = 'tx_testkeys_domain_model_produit.stock';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output58 .= '</th>
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
$arguments67['key'] = 'tx_testkeys_domain_model_produit.description';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output58 .= '</th>
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
$arguments69['key'] = 'tx_testkeys_domain_model_produit.slug';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output58 .= '</th>
            <th>Category</th>
            <th></th>
            <th></th>
        </tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$array79 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.name', $array79)]);
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['name'] = NULL;
$arguments75['rel'] = NULL;
$arguments75['rev'] = NULL;
$arguments75['target'] = NULL;
$arguments75['action'] = NULL;
$arguments75['controller'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['pluginName'] = NULL;
$arguments75['pageUid'] = NULL;
$arguments75['pageType'] = NULL;
$arguments75['noCache'] = NULL;
$arguments75['noCacheHash'] = NULL;
$arguments75['section'] = NULL;
$arguments75['format'] = NULL;
$arguments75['linkAccessRestrictedPages'] = NULL;
$arguments75['additionalParams'] = NULL;
$arguments75['absolute'] = NULL;
$arguments75['addQueryString'] = NULL;
$arguments75['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments75['addQueryStringMethod'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['action'] = 'show';
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array78);
$arguments75['arguments'] = $array77;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$array84 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.prix', $array84)]);
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['name'] = NULL;
$arguments80['rel'] = NULL;
$arguments80['rev'] = NULL;
$arguments80['target'] = NULL;
$arguments80['action'] = NULL;
$arguments80['controller'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['pluginName'] = NULL;
$arguments80['pageUid'] = NULL;
$arguments80['pageType'] = NULL;
$arguments80['noCache'] = NULL;
$arguments80['noCacheHash'] = NULL;
$arguments80['section'] = NULL;
$arguments80['format'] = NULL;
$arguments80['linkAccessRestrictedPages'] = NULL;
$arguments80['additionalParams'] = NULL;
$arguments80['absolute'] = NULL;
$arguments80['addQueryString'] = NULL;
$arguments80['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments80['addQueryStringMethod'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['action'] = 'show';
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array83);
$arguments80['arguments'] = $array82;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output74 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$array89 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.stock', $array89)]);
};
$arguments85 = array();
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = NULL;
$arguments85['rel'] = NULL;
$arguments85['rev'] = NULL;
$arguments85['target'] = NULL;
$arguments85['action'] = NULL;
$arguments85['controller'] = NULL;
$arguments85['extensionName'] = NULL;
$arguments85['pluginName'] = NULL;
$arguments85['pageUid'] = NULL;
$arguments85['pageType'] = NULL;
$arguments85['noCache'] = NULL;
$arguments85['noCacheHash'] = NULL;
$arguments85['section'] = NULL;
$arguments85['format'] = NULL;
$arguments85['linkAccessRestrictedPages'] = NULL;
$arguments85['additionalParams'] = NULL;
$arguments85['absolute'] = NULL;
$arguments85['addQueryString'] = NULL;
$arguments85['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments85['addQueryStringMethod'] = NULL;
$arguments85['arguments'] = NULL;
$arguments85['action'] = 'show';
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array88);
$arguments85['arguments'] = $array87;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output74 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$array94 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.description', $array94)]);
};
$arguments90 = array();
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['name'] = NULL;
$arguments90['rel'] = NULL;
$arguments90['rev'] = NULL;
$arguments90['target'] = NULL;
$arguments90['action'] = NULL;
$arguments90['controller'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['pluginName'] = NULL;
$arguments90['pageUid'] = NULL;
$arguments90['pageType'] = NULL;
$arguments90['noCache'] = NULL;
$arguments90['noCacheHash'] = NULL;
$arguments90['section'] = NULL;
$arguments90['format'] = NULL;
$arguments90['linkAccessRestrictedPages'] = NULL;
$arguments90['additionalParams'] = NULL;
$arguments90['absolute'] = NULL;
$arguments90['addQueryString'] = NULL;
$arguments90['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments90['addQueryStringMethod'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['action'] = 'show';
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array93);
$arguments90['arguments'] = $array92;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output74 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$array99 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.slug', $array99)]);
};
$arguments95 = array();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['name'] = NULL;
$arguments95['rel'] = NULL;
$arguments95['rev'] = NULL;
$arguments95['target'] = NULL;
$arguments95['action'] = NULL;
$arguments95['controller'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['pluginName'] = NULL;
$arguments95['pageUid'] = NULL;
$arguments95['pageType'] = NULL;
$arguments95['noCache'] = NULL;
$arguments95['noCacheHash'] = NULL;
$arguments95['section'] = NULL;
$arguments95['format'] = NULL;
$arguments95['linkAccessRestrictedPages'] = NULL;
$arguments95['additionalParams'] = NULL;
$arguments95['absolute'] = NULL;
$arguments95['addQueryString'] = NULL;
$arguments95['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments95['addQueryStringMethod'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['action'] = 'show';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array98);
$arguments95['arguments'] = $array97;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output74 .= '</td>
                <td>';
$array100 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.category.0.name', $array100)]);

$output74 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments101 = array();
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['class'] = NULL;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['title'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$arguments101['name'] = NULL;
$arguments101['rel'] = NULL;
$arguments101['rev'] = NULL;
$arguments101['target'] = NULL;
$arguments101['action'] = NULL;
$arguments101['controller'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['pluginName'] = NULL;
$arguments101['pageUid'] = NULL;
$arguments101['pageType'] = NULL;
$arguments101['noCache'] = NULL;
$arguments101['noCacheHash'] = NULL;
$arguments101['section'] = NULL;
$arguments101['format'] = NULL;
$arguments101['linkAccessRestrictedPages'] = NULL;
$arguments101['additionalParams'] = NULL;
$arguments101['absolute'] = NULL;
$arguments101['addQueryString'] = NULL;
$arguments101['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments101['addQueryStringMethod'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['action'] = 'edit';
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array104);
$arguments101['arguments'] = $array103;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output74 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments105 = array();
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['name'] = NULL;
$arguments105['rel'] = NULL;
$arguments105['rev'] = NULL;
$arguments105['target'] = NULL;
$arguments105['action'] = NULL;
$arguments105['controller'] = NULL;
$arguments105['extensionName'] = NULL;
$arguments105['pluginName'] = NULL;
$arguments105['pageUid'] = NULL;
$arguments105['pageType'] = NULL;
$arguments105['noCache'] = NULL;
$arguments105['noCacheHash'] = NULL;
$arguments105['section'] = NULL;
$arguments105['format'] = NULL;
$arguments105['linkAccessRestrictedPages'] = NULL;
$arguments105['additionalParams'] = NULL;
$arguments105['absolute'] = NULL;
$arguments105['addQueryString'] = NULL;
$arguments105['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments105['addQueryStringMethod'] = NULL;
$arguments105['arguments'] = NULL;
$arguments105['action'] = 'delete';
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array108);
$arguments105['arguments'] = $array107;

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output74 .= '</td>
            </tr>
        ';
return $output74;
};
$arguments71 = array();
$arguments71['each'] = NULL;
$arguments71['as'] = NULL;
$arguments71['key'] = NULL;
$arguments71['reverse'] = false;
$arguments71['iteration'] = NULL;
$array73 = array (
);$arguments71['each'] = $renderingContext->getVariableProvider()->getByPath('produits', $array73);
$arguments71['as'] = 'produit';

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output58 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return 'New Produit';
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
$arguments109['action'] = 'new';

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output58 .= '
';
return $output58;
};
$arguments56 = array();
$arguments56['name'] = NULL;
$arguments56['name'] = 'content';

$output53 .= NULL;

$output53 .= '

';

return $output53;
}


}
#