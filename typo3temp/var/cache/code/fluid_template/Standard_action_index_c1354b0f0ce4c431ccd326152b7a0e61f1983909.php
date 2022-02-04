<?php

class Standard_action_index_c1354b0f0ce4c431ccd326152b7a0e61f1983909 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Filter
 */
public function section_d7decf1aa22b02ae8abf9a96849ee423eee838e4(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <br>
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement.filter.label';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</span>
                    <input type="search" autocomplete="off" class="form-control t3js-contentWizard-search" placeholder="';
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
$arguments3['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement.filter.placeholder';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '">
                </div>
            </div>
        </div>
    </div>
';

return $output0;
}
/**
 * section FilterNothingFound
 */
public function section_1b33ba181f9dc4cf15a05357c8cfe06396ba92ff(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output5 = '';

$output5 .= '
    <div class="container-fluid">
        <div class="alert alert-danger hidden t3js-filter-noresult" role="alert">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['languageKey'] = NULL;
$arguments6['alternativeLanguageKeys'] = NULL;
$arguments6['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement.filter.noResults';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output5 .= '
        </div>
    </div>
';

return $output5;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output8 = '';

$output8 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['additionalAttributes'] = NULL;
$arguments98['data'] = NULL;
$arguments98['name'] = NULL;
$arguments98['value'] = NULL;
$arguments98['property'] = NULL;
$arguments98['class'] = NULL;
$arguments98['dir'] = NULL;
$arguments98['id'] = NULL;
$arguments98['lang'] = NULL;
$arguments98['style'] = NULL;
$arguments98['title'] = NULL;
$arguments98['accesskey'] = NULL;
$arguments98['tabindex'] = NULL;
$arguments98['onclick'] = NULL;
$arguments98['name'] = 'defValues';
$arguments98['value'] = '';

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                    <script>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$array140 = array (
);return $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array140);
};
$arguments138 = array();
$arguments138['value'] = NULL;

$output137 .= isset($arguments138['value']) ? $arguments138['value'] : $renderChildrenClosure139();

$output137 .= '
                    </script>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['section'] = NULL;
$arguments141['partial'] = NULL;
$arguments141['delegate'] = NULL;
$arguments141['renderable'] = NULL;
$arguments141['arguments'] = array (
);
$arguments141['optional'] = false;
$arguments141['default'] = NULL;
$arguments141['contentAs'] = NULL;
$arguments141['debug'] = true;
$arguments141['section'] = 'Filter';

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output137 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$array145 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array145);
};
$arguments143 = array();
$arguments143['value'] = NULL;

$output137 .= isset($arguments143['value']) ? $arguments143['value'] : $renderChildrenClosure144();

$output137 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['section'] = NULL;
$arguments146['partial'] = NULL;
$arguments146['delegate'] = NULL;
$arguments146['renderable'] = NULL;
$arguments146['arguments'] = array (
);
$arguments146['optional'] = false;
$arguments146['default'] = NULL;
$arguments146['contentAs'] = NULL;
$arguments146['debug'] = true;
$arguments146['section'] = 'FilterNothingFound';

$output137 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output137 .= '
                ';
return $output137;
};
$arguments135 = array();

$output134 .= '';

$output134 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
                    <div id="new-content-element-wizard-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active" data-slide="next">
                                <div class="t3-new-content-element-wizard-title">
                                    <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['key'] = NULL;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['languageKey'] = NULL;
$arguments151['alternativeLanguageKeys'] = NULL;
$arguments151['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output150 .= '</h2>
                                </div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['section'] = NULL;
$arguments153['partial'] = NULL;
$arguments153['delegate'] = NULL;
$arguments153['renderable'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['optional'] = false;
$arguments153['default'] = NULL;
$arguments153['contentAs'] = NULL;
$arguments153['debug'] = true;
$arguments153['section'] = 'Filter';

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output150 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$array157 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array157);
};
$arguments155 = array();
$arguments155['value'] = NULL;

$output150 .= isset($arguments155['value']) ? $arguments155['value'] : $renderChildrenClosure156();

$output150 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['section'] = NULL;
$arguments158['partial'] = NULL;
$arguments158['delegate'] = NULL;
$arguments158['renderable'] = NULL;
$arguments158['arguments'] = array (
);
$arguments158['optional'] = false;
$arguments158['default'] = NULL;
$arguments158['contentAs'] = NULL;
$arguments158['debug'] = true;
$arguments158['section'] = 'FilterNothingFound';

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output150 .= '
                            </div>
                            <div class="item">
                                <div class="t3-new-content-element-wizard-title">
                                    <h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['key'] = NULL;
$arguments163['id'] = NULL;
$arguments163['default'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['languageKey'] = NULL;
$arguments163['alternativeLanguageKeys'] = NULL;
$arguments163['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);
};
$arguments160 = array();
$arguments160['value'] = NULL;
$arguments160['keepQuotes'] = false;
$arguments160['encoding'] = 'UTF-8';
$arguments160['doubleEncode'] = true;
$value162 = ($arguments160['value'] !== NULL ? $arguments160['value'] : $renderChildrenClosure161());

$output150 .= !is_string($value162) && !(is_object($value162) && method_exists($value162, '__toString')) ? $value162 : htmlspecialchars($value162, ($arguments160['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments160['encoding'], $arguments160['doubleEncode']);

$output150 .= '</h2>
                                </div>
                                <div class="t3-new-content-element-wizard-body">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$array167 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array167);
};
$arguments165 = array();
$arguments165['value'] = NULL;

$output150 .= isset($arguments165['value']) ? $arguments165['value'] : $renderChildrenClosure166();

$output150 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                ';
return $output150;
};
$arguments148 = array();
$arguments148['if'] = NULL;

$output134 .= '';

$output134 .= '
            ';
return $output134;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('hasClickEvent', $array132);

$expression133 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                    <script>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$array105 = array (
);return $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array105);
};
$arguments103 = array();
$arguments103['value'] = NULL;

$output102 .= isset($arguments103['value']) ? $arguments103['value'] : $renderChildrenClosure104();

$output102 .= '
                    </script>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['section'] = NULL;
$arguments106['partial'] = NULL;
$arguments106['delegate'] = NULL;
$arguments106['renderable'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['optional'] = false;
$arguments106['default'] = NULL;
$arguments106['contentAs'] = NULL;
$arguments106['debug'] = true;
$arguments106['section'] = 'Filter';

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output102 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$array110 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array110);
};
$arguments108 = array();
$arguments108['value'] = NULL;

$output102 .= isset($arguments108['value']) ? $arguments108['value'] : $renderChildrenClosure109();

$output102 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['section'] = NULL;
$arguments111['partial'] = NULL;
$arguments111['delegate'] = NULL;
$arguments111['renderable'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['optional'] = false;
$arguments111['default'] = NULL;
$arguments111['contentAs'] = NULL;
$arguments111['debug'] = true;
$arguments111['section'] = 'FilterNothingFound';

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output102 .= '
                ';
return $output102;
};
$arguments100['__elseClosures'][] = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                    <div id="new-content-element-wizard-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active" data-slide="next">
                                <div class="t3-new-content-element-wizard-title">
                                    <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$arguments114['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output113 .= '</h2>
                                </div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['section'] = NULL;
$arguments116['partial'] = NULL;
$arguments116['delegate'] = NULL;
$arguments116['renderable'] = NULL;
$arguments116['arguments'] = array (
);
$arguments116['optional'] = false;
$arguments116['default'] = NULL;
$arguments116['contentAs'] = NULL;
$arguments116['debug'] = true;
$arguments116['section'] = 'Filter';

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output113 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array120 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array120);
};
$arguments118 = array();
$arguments118['value'] = NULL;

$output113 .= isset($arguments118['value']) ? $arguments118['value'] : $renderChildrenClosure119();

$output113 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['section'] = NULL;
$arguments121['partial'] = NULL;
$arguments121['delegate'] = NULL;
$arguments121['renderable'] = NULL;
$arguments121['arguments'] = array (
);
$arguments121['optional'] = false;
$arguments121['default'] = NULL;
$arguments121['contentAs'] = NULL;
$arguments121['debug'] = true;
$arguments121['section'] = 'FilterNothingFound';

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output113 .= '
                            </div>
                            <div class="item">
                                <div class="t3-new-content-element-wizard-title">
                                    <h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['languageKey'] = NULL;
$arguments126['alternativeLanguageKeys'] = NULL;
$arguments126['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);
};
$arguments123 = array();
$arguments123['value'] = NULL;
$arguments123['keepQuotes'] = false;
$arguments123['encoding'] = 'UTF-8';
$arguments123['doubleEncode'] = true;
$value125 = ($arguments123['value'] !== NULL ? $arguments123['value'] : $renderChildrenClosure124());

$output113 .= !is_string($value125) && !(is_object($value125) && method_exists($value125, '__toString')) ? $value125 : htmlspecialchars($value125, ($arguments123['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments123['encoding'], $arguments123['doubleEncode']);

$output113 .= '</h2>
                                </div>
                                <div class="t3-new-content-element-wizard-body">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array130 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array130);
};
$arguments128 = array();
$arguments128['value'] = NULL;

$output113 .= isset($arguments128['value']) ? $arguments128['value'] : $renderChildrenClosure129();

$output113 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                ';
return $output113;
};

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output97 .= '
        ';
return $output97;
};
$arguments95 = array();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['action'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['controller'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['pluginName'] = NULL;
$arguments95['pageUid'] = NULL;
$arguments95['object'] = NULL;
$arguments95['pageType'] = 0;
$arguments95['noCache'] = false;
$arguments95['noCacheHash'] = NULL;
$arguments95['section'] = '';
$arguments95['format'] = '';
$arguments95['additionalParams'] = array (
);
$arguments95['absolute'] = false;
$arguments95['addQueryString'] = false;
$arguments95['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments95['addQueryStringMethod'] = 'GET';
$arguments95['fieldNamePrefix'] = NULL;
$arguments95['actionUri'] = NULL;
$arguments95['objectName'] = NULL;
$arguments95['hiddenFieldClassName'] = NULL;
$arguments95['enctype'] = NULL;
$arguments95['method'] = NULL;
$arguments95['name'] = NULL;
$arguments95['onreset'] = NULL;
$arguments95['onsubmit'] = NULL;
$arguments95['target'] = NULL;
$arguments95['novalidate'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['action'] = '';
$arguments95['name'] = 'editForm';
$arguments95['id'] = 'NewContentElementController';

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
    ';
return $output94;
};
$arguments92 = array();

$output91 .= '';

$output91 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
        <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['key'] = NULL;
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['languageKey'] = NULL;
$arguments171['alternativeLanguageKeys'] = NULL;
$arguments171['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement';

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output170 .= '</h1>
    ';
return $output170;
};
$arguments168 = array();
$arguments168['if'] = NULL;

$output91 .= '';

$output91 .= '
';
return $output91;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('hasAccess', $array89);

$expression90 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['name'] = NULL;
$arguments15['value'] = NULL;
$arguments15['property'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['name'] = 'defValues';
$arguments15['value'] = '';

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                    <script>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array57);
};
$arguments55 = array();
$arguments55['value'] = NULL;

$output54 .= isset($arguments55['value']) ? $arguments55['value'] : $renderChildrenClosure56();

$output54 .= '
                    </script>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['section'] = NULL;
$arguments58['partial'] = NULL;
$arguments58['delegate'] = NULL;
$arguments58['renderable'] = NULL;
$arguments58['arguments'] = array (
);
$arguments58['optional'] = false;
$arguments58['default'] = NULL;
$arguments58['contentAs'] = NULL;
$arguments58['debug'] = true;
$arguments58['section'] = 'Filter';

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output54 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$array62 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array62);
};
$arguments60 = array();
$arguments60['value'] = NULL;

$output54 .= isset($arguments60['value']) ? $arguments60['value'] : $renderChildrenClosure61();

$output54 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['section'] = NULL;
$arguments63['partial'] = NULL;
$arguments63['delegate'] = NULL;
$arguments63['renderable'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['optional'] = false;
$arguments63['default'] = NULL;
$arguments63['contentAs'] = NULL;
$arguments63['debug'] = true;
$arguments63['section'] = 'FilterNothingFound';

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output54 .= '
                ';
return $output54;
};
$arguments52 = array();

$output51 .= '';

$output51 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                    <div id="new-content-element-wizard-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active" data-slide="next">
                                <div class="t3-new-content-element-wizard-title">
                                    <h2>';
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
$arguments68['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output67 .= '</h2>
                                </div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['section'] = NULL;
$arguments70['partial'] = NULL;
$arguments70['delegate'] = NULL;
$arguments70['renderable'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['optional'] = false;
$arguments70['default'] = NULL;
$arguments70['contentAs'] = NULL;
$arguments70['debug'] = true;
$arguments70['section'] = 'Filter';

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output67 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$array74 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array74);
};
$arguments72 = array();
$arguments72['value'] = NULL;

$output67 .= isset($arguments72['value']) ? $arguments72['value'] : $renderChildrenClosure73();

$output67 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['section'] = NULL;
$arguments75['partial'] = NULL;
$arguments75['delegate'] = NULL;
$arguments75['renderable'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['optional'] = false;
$arguments75['default'] = NULL;
$arguments75['contentAs'] = NULL;
$arguments75['debug'] = true;
$arguments75['section'] = 'FilterNothingFound';

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output67 .= '
                            </div>
                            <div class="item">
                                <div class="t3-new-content-element-wizard-title">
                                    <h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['languageKey'] = NULL;
$arguments80['alternativeLanguageKeys'] = NULL;
$arguments80['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);
};
$arguments77 = array();
$arguments77['value'] = NULL;
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = 'UTF-8';
$arguments77['doubleEncode'] = true;
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output67 .= !is_string($value79) && !(is_object($value79) && method_exists($value79, '__toString')) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments77['encoding'], $arguments77['doubleEncode']);

$output67 .= '</h2>
                                </div>
                                <div class="t3-new-content-element-wizard-body">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$array84 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array84);
};
$arguments82 = array();
$arguments82['value'] = NULL;

$output67 .= isset($arguments82['value']) ? $arguments82['value'] : $renderChildrenClosure83();

$output67 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                ';
return $output67;
};
$arguments65 = array();
$arguments65['if'] = NULL;

$output51 .= '';

$output51 .= '
            ';
return $output51;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('hasClickEvent', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    <script>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array22);
};
$arguments20 = array();
$arguments20['value'] = NULL;

$output19 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output19 .= '
                    </script>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['renderable'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['debug'] = true;
$arguments23['section'] = 'Filter';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array27);
};
$arguments25 = array();
$arguments25['value'] = NULL;

$output19 .= isset($arguments25['value']) ? $arguments25['value'] : $renderChildrenClosure26();

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['debug'] = true;
$arguments28['section'] = 'FilterNothingFound';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output19 .= '
                ';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                    <div id="new-content-element-wizard-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active" data-slide="next">
                                <div class="t3-new-content-element-wizard-title">
                                    <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['key'] = NULL;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['languageKey'] = NULL;
$arguments31['alternativeLanguageKeys'] = NULL;
$arguments31['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output30 .= '</h2>
                                </div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['debug'] = true;
$arguments33['section'] = 'Filter';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output30 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array37 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array37);
};
$arguments35 = array();
$arguments35['value'] = NULL;

$output30 .= isset($arguments35['value']) ? $arguments35['value'] : $renderChildrenClosure36();

$output30 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['section'] = NULL;
$arguments38['partial'] = NULL;
$arguments38['delegate'] = NULL;
$arguments38['renderable'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['optional'] = false;
$arguments38['default'] = NULL;
$arguments38['contentAs'] = NULL;
$arguments38['debug'] = true;
$arguments38['section'] = 'FilterNothingFound';

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output30 .= '
                            </div>
                            <div class="item">
                                <div class="t3-new-content-element-wizard-title">
                                    <h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);
};
$arguments40 = array();
$arguments40['value'] = NULL;
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = 'UTF-8';
$arguments40['doubleEncode'] = true;
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output30 .= !is_string($value42) && !(is_object($value42) && method_exists($value42, '__toString')) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments40['encoding'], $arguments40['doubleEncode']);

$output30 .= '</h2>
                                </div>
                                <div class="t3-new-content-element-wizard-body">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array47 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array47);
};
$arguments45 = array();
$arguments45['value'] = NULL;

$output30 .= isset($arguments45['value']) ? $arguments45['value'] : $renderChildrenClosure46();

$output30 .= '
                                </div>
                            </div>
                        </div>
                    </div>
                ';
return $output30;
};

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output14 .= '
        ';
return $output14;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['action'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['controller'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['pluginName'] = NULL;
$arguments12['pageUid'] = NULL;
$arguments12['object'] = NULL;
$arguments12['pageType'] = 0;
$arguments12['noCache'] = false;
$arguments12['noCacheHash'] = NULL;
$arguments12['section'] = '';
$arguments12['format'] = '';
$arguments12['additionalParams'] = array (
);
$arguments12['absolute'] = false;
$arguments12['addQueryString'] = false;
$arguments12['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments12['addQueryStringMethod'] = 'GET';
$arguments12['fieldNamePrefix'] = NULL;
$arguments12['actionUri'] = NULL;
$arguments12['objectName'] = NULL;
$arguments12['hiddenFieldClassName'] = NULL;
$arguments12['enctype'] = NULL;
$arguments12['method'] = NULL;
$arguments12['name'] = NULL;
$arguments12['onreset'] = NULL;
$arguments12['onsubmit'] = NULL;
$arguments12['target'] = NULL;
$arguments12['novalidate'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['action'] = '';
$arguments12['name'] = 'editForm';
$arguments12['id'] = 'NewContentElementController';

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
    ';
return $output11;
};
$arguments9['__elseClosures'][] = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
        <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['languageKey'] = NULL;
$arguments86['alternativeLanguageKeys'] = NULL;
$arguments86['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '</h1>
    ';
return $output85;
};

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
    <br>
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['key'] = NULL;
$arguments176['id'] = NULL;
$arguments176['default'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['languageKey'] = NULL;
$arguments176['alternativeLanguageKeys'] = NULL;
$arguments176['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement.filter.label';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext)]);

$output175 .= '</span>
                    <input type="search" autocomplete="off" class="form-control t3js-contentWizard-search" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['key'] = NULL;
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$arguments178['languageKey'] = NULL;
$arguments178['alternativeLanguageKeys'] = NULL;
$arguments178['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement.filter.placeholder';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext)]);

$output175 .= '">
                </div>
            </div>
        </div>
    </div>
';
return $output175;
};
$arguments173 = array();
$arguments173['name'] = NULL;
$arguments173['name'] = 'Filter';

$output8 .= NULL;

$output8 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
    <div class="container-fluid">
        <div class="alert alert-danger hidden t3js-filter-noresult" role="alert">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['languageKey'] = NULL;
$arguments183['alternativeLanguageKeys'] = NULL;
$arguments183['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:newContentElement.filter.noResults';

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output182 .= '
        </div>
    </div>
';
return $output182;
};
$arguments180 = array();
$arguments180['name'] = NULL;
$arguments180['name'] = 'FilterNothingFound';

$output8 .= NULL;

$output8 .= '

';

return $output8;
}


}
#