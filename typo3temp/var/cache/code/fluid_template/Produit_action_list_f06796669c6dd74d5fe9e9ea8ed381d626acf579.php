<?php

class Produit_action_list_f06796669c6dd74d5fe9e9ea8ed381d626acf579 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
               ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('produit', $array45);
};
$arguments43 = array();
$arguments43['title'] = NULL;
$arguments43['maxDepth'] = 8;
$arguments43['plainText'] = false;
$arguments43['ansiColors'] = false;
$arguments43['inline'] = false;
$arguments43['blacklistedClassNames'] = NULL;
$arguments43['blacklistedPropertyNames'] = NULL;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output16 .= '
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['name'] = NULL;
$arguments46['rel'] = NULL;
$arguments46['rev'] = NULL;
$arguments46['target'] = NULL;
$arguments46['action'] = NULL;
$arguments46['controller'] = NULL;
$arguments46['extensionName'] = NULL;
$arguments46['pluginName'] = NULL;
$arguments46['pageUid'] = NULL;
$arguments46['pageType'] = NULL;
$arguments46['noCache'] = NULL;
$arguments46['noCacheHash'] = NULL;
$arguments46['section'] = NULL;
$arguments46['format'] = NULL;
$arguments46['linkAccessRestrictedPages'] = NULL;
$arguments46['additionalParams'] = NULL;
$arguments46['absolute'] = NULL;
$arguments46['addQueryString'] = NULL;
$arguments46['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments46['addQueryStringMethod'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['action'] = 'edit';
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array49);
$arguments46['arguments'] = $array48;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['name'] = NULL;
$arguments50['rel'] = NULL;
$arguments50['rev'] = NULL;
$arguments50['target'] = NULL;
$arguments50['action'] = NULL;
$arguments50['controller'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['pluginName'] = NULL;
$arguments50['pageUid'] = NULL;
$arguments50['pageType'] = NULL;
$arguments50['noCache'] = NULL;
$arguments50['noCacheHash'] = NULL;
$arguments50['section'] = NULL;
$arguments50['format'] = NULL;
$arguments50['linkAccessRestrictedPages'] = NULL;
$arguments50['additionalParams'] = NULL;
$arguments50['absolute'] = NULL;
$arguments50['addQueryString'] = NULL;
$arguments50['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments50['addQueryStringMethod'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['action'] = 'delete';
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array53);
$arguments50['arguments'] = $array52;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

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
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return 'New Produit';
};
$arguments54 = array();
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['name'] = NULL;
$arguments54['rel'] = NULL;
$arguments54['rev'] = NULL;
$arguments54['target'] = NULL;
$arguments54['action'] = NULL;
$arguments54['controller'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['pluginName'] = NULL;
$arguments54['pageUid'] = NULL;
$arguments54['pageType'] = NULL;
$arguments54['noCache'] = NULL;
$arguments54['noCacheHash'] = NULL;
$arguments54['section'] = NULL;
$arguments54['format'] = NULL;
$arguments54['linkAccessRestrictedPages'] = NULL;
$arguments54['additionalParams'] = NULL;
$arguments54['absolute'] = NULL;
$arguments54['addQueryString'] = NULL;
$arguments54['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments54['addQueryStringMethod'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output56 = '';

$output56 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['name'] = NULL;
$arguments57['name'] = 'Default';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output56 .= '

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
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
    <h1>Listing for Produit</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['queueIdentifier'] = NULL;
$arguments62['as'] = NULL;

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '

    <table class="tx_testkeys">
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'tx_testkeys_domain_model_produit.name';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output61 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['languageKey'] = NULL;
$arguments66['alternativeLanguageKeys'] = NULL;
$arguments66['key'] = 'tx_testkeys_domain_model_produit.prix';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output61 .= '</th>
            <th>';
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
$arguments68['key'] = 'tx_testkeys_domain_model_produit.stock';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output61 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['languageKey'] = NULL;
$arguments70['alternativeLanguageKeys'] = NULL;
$arguments70['key'] = 'tx_testkeys_domain_model_produit.description';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output61 .= '</th>
            <th>';
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
$arguments72['key'] = 'tx_testkeys_domain_model_produit.slug';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output61 .= '</th>
            <th>Category</th>
            <th></th>
            <th></th>
        </tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$array82 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.name', $array82)]);
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['name'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['rev'] = NULL;
$arguments78['target'] = NULL;
$arguments78['action'] = NULL;
$arguments78['controller'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['pluginName'] = NULL;
$arguments78['pageUid'] = NULL;
$arguments78['pageType'] = NULL;
$arguments78['noCache'] = NULL;
$arguments78['noCacheHash'] = NULL;
$arguments78['section'] = NULL;
$arguments78['format'] = NULL;
$arguments78['linkAccessRestrictedPages'] = NULL;
$arguments78['additionalParams'] = NULL;
$arguments78['absolute'] = NULL;
$arguments78['addQueryString'] = NULL;
$arguments78['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments78['addQueryStringMethod'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['action'] = 'show';
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array81);
$arguments78['arguments'] = $array80;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$array87 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.prix', $array87)]);
};
$arguments83 = array();
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['name'] = NULL;
$arguments83['rel'] = NULL;
$arguments83['rev'] = NULL;
$arguments83['target'] = NULL;
$arguments83['action'] = NULL;
$arguments83['controller'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['pluginName'] = NULL;
$arguments83['pageUid'] = NULL;
$arguments83['pageType'] = NULL;
$arguments83['noCache'] = NULL;
$arguments83['noCacheHash'] = NULL;
$arguments83['section'] = NULL;
$arguments83['format'] = NULL;
$arguments83['linkAccessRestrictedPages'] = NULL;
$arguments83['additionalParams'] = NULL;
$arguments83['absolute'] = NULL;
$arguments83['addQueryString'] = NULL;
$arguments83['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments83['addQueryStringMethod'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['action'] = 'show';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array86);
$arguments83['arguments'] = $array85;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output77 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array92 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.stock', $array92)]);
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['name'] = NULL;
$arguments88['rel'] = NULL;
$arguments88['rev'] = NULL;
$arguments88['target'] = NULL;
$arguments88['action'] = NULL;
$arguments88['controller'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['pluginName'] = NULL;
$arguments88['pageUid'] = NULL;
$arguments88['pageType'] = NULL;
$arguments88['noCache'] = NULL;
$arguments88['noCacheHash'] = NULL;
$arguments88['section'] = NULL;
$arguments88['format'] = NULL;
$arguments88['linkAccessRestrictedPages'] = NULL;
$arguments88['additionalParams'] = NULL;
$arguments88['absolute'] = NULL;
$arguments88['addQueryString'] = NULL;
$arguments88['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments88['addQueryStringMethod'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['action'] = 'show';
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array91);
$arguments88['arguments'] = $array90;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output77 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array97 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.description', $array97)]);
};
$arguments93 = array();
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['name'] = NULL;
$arguments93['rel'] = NULL;
$arguments93['rev'] = NULL;
$arguments93['target'] = NULL;
$arguments93['action'] = NULL;
$arguments93['controller'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['pluginName'] = NULL;
$arguments93['pageUid'] = NULL;
$arguments93['pageType'] = NULL;
$arguments93['noCache'] = NULL;
$arguments93['noCacheHash'] = NULL;
$arguments93['section'] = NULL;
$arguments93['format'] = NULL;
$arguments93['linkAccessRestrictedPages'] = NULL;
$arguments93['additionalParams'] = NULL;
$arguments93['absolute'] = NULL;
$arguments93['addQueryString'] = NULL;
$arguments93['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments93['addQueryStringMethod'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['action'] = 'show';
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array96);
$arguments93['arguments'] = $array95;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output77 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$array102 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.slug', $array102)]);
};
$arguments98 = array();
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['class'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['title'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$arguments98['name'] = NULL;
$arguments98['rel'] = NULL;
$arguments98['rev'] = NULL;
$arguments98['target'] = NULL;
$arguments98['action'] = NULL;
$arguments98['controller'] = NULL;
$arguments98['extensionName'] = NULL;
$arguments98['pluginName'] = NULL;
$arguments98['pageUid'] = NULL;
$arguments98['pageType'] = NULL;
$arguments98['noCache'] = NULL;
$arguments98['noCacheHash'] = NULL;
$arguments98['section'] = NULL;
$arguments98['format'] = NULL;
$arguments98['linkAccessRestrictedPages'] = NULL;
$arguments98['additionalParams'] = NULL;
$arguments98['absolute'] = NULL;
$arguments98['addQueryString'] = NULL;
$arguments98['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments98['addQueryStringMethod'] = NULL;
$arguments98['arguments'] = NULL;
$arguments98['action'] = 'show';
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array101);
$arguments98['arguments'] = $array100;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output77 .= '</td>
                <td>';
$array103 = array (
);
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.category.0.name', $array103)]);

$output77 .= '</td>
               ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$array106 = array (
);return $renderingContext->getVariableProvider()->getByPath('produit', $array106);
};
$arguments104 = array();
$arguments104['title'] = NULL;
$arguments104['maxDepth'] = 8;
$arguments104['plainText'] = false;
$arguments104['ansiColors'] = false;
$arguments104['inline'] = false;
$arguments104['blacklistedClassNames'] = NULL;
$arguments104['blacklistedPropertyNames'] = NULL;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output77 .= '
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return 'Edit';
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
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
$arguments107['action'] = NULL;
$arguments107['controller'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['pluginName'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = NULL;
$arguments107['noCache'] = NULL;
$arguments107['noCacheHash'] = NULL;
$arguments107['section'] = NULL;
$arguments107['format'] = NULL;
$arguments107['linkAccessRestrictedPages'] = NULL;
$arguments107['additionalParams'] = NULL;
$arguments107['absolute'] = NULL;
$arguments107['addQueryString'] = NULL;
$arguments107['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments107['addQueryStringMethod'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['action'] = 'edit';
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array110);
$arguments107['arguments'] = $array109;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output77 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments111 = array();
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['class'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['title'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['name'] = NULL;
$arguments111['rel'] = NULL;
$arguments111['rev'] = NULL;
$arguments111['target'] = NULL;
$arguments111['action'] = NULL;
$arguments111['controller'] = NULL;
$arguments111['extensionName'] = NULL;
$arguments111['pluginName'] = NULL;
$arguments111['pageUid'] = NULL;
$arguments111['pageType'] = NULL;
$arguments111['noCache'] = NULL;
$arguments111['noCacheHash'] = NULL;
$arguments111['section'] = NULL;
$arguments111['format'] = NULL;
$arguments111['linkAccessRestrictedPages'] = NULL;
$arguments111['additionalParams'] = NULL;
$arguments111['absolute'] = NULL;
$arguments111['addQueryString'] = NULL;
$arguments111['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments111['addQueryStringMethod'] = NULL;
$arguments111['arguments'] = NULL;
$arguments111['action'] = 'delete';
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array114);
$arguments111['arguments'] = $array113;

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output77 .= '</td>
            </tr>
        ';
return $output77;
};
$arguments74 = array();
$arguments74['each'] = NULL;
$arguments74['as'] = NULL;
$arguments74['key'] = NULL;
$arguments74['reverse'] = false;
$arguments74['iteration'] = NULL;
$array76 = array (
);$arguments74['each'] = $renderingContext->getVariableProvider()->getByPath('produits', $array76);
$arguments74['as'] = 'produit';

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output61 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return 'New Produit';
};
$arguments115 = array();
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['name'] = NULL;
$arguments115['rel'] = NULL;
$arguments115['rev'] = NULL;
$arguments115['target'] = NULL;
$arguments115['action'] = NULL;
$arguments115['controller'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['pluginName'] = NULL;
$arguments115['pageUid'] = NULL;
$arguments115['pageType'] = NULL;
$arguments115['noCache'] = NULL;
$arguments115['noCacheHash'] = NULL;
$arguments115['section'] = NULL;
$arguments115['format'] = NULL;
$arguments115['linkAccessRestrictedPages'] = NULL;
$arguments115['additionalParams'] = NULL;
$arguments115['absolute'] = NULL;
$arguments115['addQueryString'] = NULL;
$arguments115['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments115['addQueryStringMethod'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['action'] = 'new';

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output61 .= '
';
return $output61;
};
$arguments59 = array();
$arguments59['name'] = NULL;
$arguments59['name'] = 'content';

$output56 .= NULL;

$output56 .= '

';

return $output56;
}


}
#