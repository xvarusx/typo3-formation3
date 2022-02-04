<?php

class Produit_action_list_c8a8d1bf5d7e6f56a76ff542c5eaa44e798fe01b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
return 'Edit';
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
$arguments42['action'] = 'edit';
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array45);
$arguments42['arguments'] = $array44;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output16 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return 'Delete';
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
$arguments46['action'] = 'delete';
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array49);
$arguments46['arguments'] = $array48;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

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
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return 'New Produit';
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
$arguments50['action'] = 'new';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output52 = '';

$output52 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['name'] = NULL;
$arguments53['name'] = 'Default';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output52 .= '

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
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
    <h1>Listing for Produit</h1>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['queueIdentifier'] = NULL;
$arguments58['as'] = NULL;

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '

    <table class="tx_testkeys">
        <tr>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'tx_testkeys_domain_model_produit.name';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output57 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'tx_testkeys_domain_model_produit.prix';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output57 .= '</th>
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
$arguments64['key'] = 'tx_testkeys_domain_model_produit.stock';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output57 .= '</th>
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
$arguments66['key'] = 'tx_testkeys_domain_model_produit.description';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output57 .= '</th>
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
$arguments68['key'] = 'tx_testkeys_domain_model_produit.slug';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output57 .= '</th>
            <th></th>
            <th></th>
        </tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
            <tr>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$array78 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.name', $array78)]);
};
$arguments74 = array();
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['name'] = NULL;
$arguments74['rel'] = NULL;
$arguments74['rev'] = NULL;
$arguments74['target'] = NULL;
$arguments74['action'] = NULL;
$arguments74['controller'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['pluginName'] = NULL;
$arguments74['pageUid'] = NULL;
$arguments74['pageType'] = NULL;
$arguments74['noCache'] = NULL;
$arguments74['noCacheHash'] = NULL;
$arguments74['section'] = NULL;
$arguments74['format'] = NULL;
$arguments74['linkAccessRestrictedPages'] = NULL;
$arguments74['additionalParams'] = NULL;
$arguments74['absolute'] = NULL;
$arguments74['addQueryString'] = NULL;
$arguments74['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments74['addQueryStringMethod'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['action'] = 'show';
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array77);
$arguments74['arguments'] = $array76;

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array83 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.prix', $array83)]);
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

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output73 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$array88 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.stock', $array88)]);
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

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output73 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array93 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.description', $array93)]);
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

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output73 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array98 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('produit.slug', $array98)]);
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

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output73 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return 'Edit';
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
$arguments99['action'] = 'edit';
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array102);
$arguments99['arguments'] = $array101;

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output73 .= '</td>
                <td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return 'Delete';
};
$arguments103 = array();
$arguments103['additionalAttributes'] = NULL;
$arguments103['data'] = NULL;
$arguments103['class'] = NULL;
$arguments103['dir'] = NULL;
$arguments103['id'] = NULL;
$arguments103['lang'] = NULL;
$arguments103['style'] = NULL;
$arguments103['title'] = NULL;
$arguments103['accesskey'] = NULL;
$arguments103['tabindex'] = NULL;
$arguments103['onclick'] = NULL;
$arguments103['name'] = NULL;
$arguments103['rel'] = NULL;
$arguments103['rev'] = NULL;
$arguments103['target'] = NULL;
$arguments103['action'] = NULL;
$arguments103['controller'] = NULL;
$arguments103['extensionName'] = NULL;
$arguments103['pluginName'] = NULL;
$arguments103['pageUid'] = NULL;
$arguments103['pageType'] = NULL;
$arguments103['noCache'] = NULL;
$arguments103['noCacheHash'] = NULL;
$arguments103['section'] = NULL;
$arguments103['format'] = NULL;
$arguments103['linkAccessRestrictedPages'] = NULL;
$arguments103['additionalParams'] = NULL;
$arguments103['absolute'] = NULL;
$arguments103['addQueryString'] = NULL;
$arguments103['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments103['addQueryStringMethod'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['action'] = 'delete';
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['produit'] = $renderingContext->getVariableProvider()->getByPath('produit', $array106);
$arguments103['arguments'] = $array105;

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output73 .= '</td>
            </tr>
        ';
return $output73;
};
$arguments70 = array();
$arguments70['each'] = NULL;
$arguments70['as'] = NULL;
$arguments70['key'] = NULL;
$arguments70['reverse'] = false;
$arguments70['iteration'] = NULL;
$array72 = array (
);$arguments70['each'] = $renderingContext->getVariableProvider()->getByPath('produits', $array72);
$arguments70['as'] = 'produit';

$output57 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output57 .= '
    </table>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return 'New Produit';
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
$arguments107['action'] = 'new';

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output57 .= '
';
return $output57;
};
$arguments55 = array();
$arguments55['name'] = NULL;
$arguments55['name'] = 'content';

$output52 .= NULL;

$output52 .= '

';

return $output52;
}


}
#