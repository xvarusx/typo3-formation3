<?php

class partial_Module_DceListItem_aa820924817a0a5b6368194e776922c81d180ae4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
    <tr class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('dce.uid', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['then'] = 'db';
$arguments5['else'] = 'file';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '">
        <td class="listEntry">
            <a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['section'] = NULL;
$arguments12['partial'] = NULL;
$arguments12['delegate'] = NULL;
$arguments12['renderable'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['optional'] = false;
$arguments12['default'] = NULL;
$arguments12['contentAs'] = NULL;
$arguments12['debug'] = true;
$arguments12['partial'] = 'Module/OpenDce';
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['uid'] = $renderingContext->getVariableProvider()->getByPath('dce.uid', $array15);
$arguments12['arguments'] = $array14;
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
};
$arguments10 = array();
$arguments10['subject'] = NULL;

$output4 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output4 .= '" class="overlayLink"></a>

			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['debug'] = true;
$arguments16['partial'] = 'Module/ListItem/TypeIcon';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array19);
$arguments16['arguments'] = $array18;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output4 .= '

            <div class="dceLabel">
                <div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                            <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['key'] = NULL;
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['languageKey'] = NULL;
$arguments37['alternativeLanguageKeys'] = NULL;
$array39 = array (
);$arguments37['key'] = $renderingContext->getVariableProvider()->getByPath('dce.title', $array39);
$array40 = array (
);$arguments37['default'] = $renderingContext->getVariableProvider()->getByPath('dce.title', $array40);

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output36 .= '</span>
                        ';
return $output36;
};
$arguments34 = array();

$output33 .= '';

$output33 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                            <span><em>';
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
$arguments44['key'] = 'noTitle';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '</em></span>
                        ';
return $output43;
};
$arguments41 = array();
$arguments41['if'] = NULL;

$output33 .= '';

$output33 .= '
                    ';
return $output33;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('dce.title', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                            <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$array25 = array (
);$arguments23['key'] = $renderingContext->getVariableProvider()->getByPath('dce.title', $array25);
$array26 = array (
);$arguments23['default'] = $renderingContext->getVariableProvider()->getByPath('dce.title', $array26);

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '</span>
                        ';
return $output22;
};
$arguments20['__elseClosures'][] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                            <span><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$arguments28['key'] = 'noTitle';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '</em></span>
                        ';
return $output27;
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output4 .= '
                </div>
                <div class="small text-muted">
                    <em>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                            <span title="';
$array52 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dce.wizardDescription', $array52)]);

$output51 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
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
$array58 = array (
);$arguments56['key'] = $renderingContext->getVariableProvider()->getByPath('dce.wizardDescription', $array58);
$array59 = array (
);$arguments56['default'] = $renderingContext->getVariableProvider()->getByPath('dce.wizardDescription', $array59);

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '
                                ';
return $output55;
};
$arguments53 = array();
$arguments53['maxCharacters'] = NULL;
$arguments53['append'] = '&hellip;';
$arguments53['respectWordBoundaries'] = true;
$arguments53['respectHtml'] = true;
$arguments53['maxCharacters'] = 80;

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output51 .= '
                            </span>
                        ';
return $output51;
};
$arguments46 = array();
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$arguments46['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('dce.wizardDescription', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments46['__thenClosure'] = $renderChildrenClosure47;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output4 .= '
                    </em>
                </div>
            </div>
        </td>

        <td class="status">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                    <span class="label label-danger text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['key'] = NULL;
$arguments107['id'] = NULL;
$arguments107['default'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['languageKey'] = NULL;
$arguments107['alternativeLanguageKeys'] = NULL;
$output109 = '';
$array110 = array (
);
$output109 .= $renderingContext->getVariableProvider()->getByPath('lll', $array110);

$output109 .= 'disabled';
$arguments107['key'] = $output109;

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output106 .= '</span>
                ';
return $output106;
};
$arguments104 = array();

$output103 .= '';

$output103 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '<span class="label label-warning text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['key'] = NULL;
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['languageKey'] = NULL;
$arguments135['alternativeLanguageKeys'] = NULL;
$output137 = '';
$array138 = array (
);
$output137 .= $renderingContext->getVariableProvider()->getByPath('lll', $array138);

$output137 .= 'nofields';
$arguments135['key'] = $output137;

$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output134 .= '</span>';
return $output134;
};
$arguments132 = array();

$output131 .= '';

$output131 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '<span class="label label-success text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['key'] = NULL;
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$arguments142['languageKey'] = NULL;
$arguments142['alternativeLanguageKeys'] = NULL;
$output144 = '';
$array145 = array (
);
$output144 .= $renderingContext->getVariableProvider()->getByPath('lll', $array145);

$output144 .= 'enabled';
$arguments142['key'] = $output144;

$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output141 .= '</span>';
return $output141;
};
$arguments139 = array();
$arguments139['if'] = NULL;

$output131 .= '';

$output131 .= '
                    ';
return $output131;
};
$arguments114 = array();
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$arguments114['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$array129 = array (
);return $renderingContext->getVariableProvider()->getByPath('dce.fields', $array129);
};
$arguments127 = array();
$arguments127['subject'] = NULL;
$renderChildrenClosure128 = ($arguments127['subject'] !== null) ? function() use ($arguments127) { return $arguments127['subject']; } : $renderChildrenClosure128;$array126['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);
$array126['1'] = ' == 0';

$expression130 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments114['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments114['__thenClosure'] = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '<span class="label label-warning text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['key'] = NULL;
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['languageKey'] = NULL;
$arguments117['alternativeLanguageKeys'] = NULL;
$output119 = '';
$array120 = array (
);
$output119 .= $renderingContext->getVariableProvider()->getByPath('lll', $array120);

$output119 .= 'nofields';
$arguments117['key'] = $output119;

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= '</span>';
return $output116;
};
$arguments114['__elseClosures'][] = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '<span class="label label-success text-uppercase">';
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
$output124 .= $renderingContext->getVariableProvider()->getByPath('lll', $array125);

$output124 .= 'enabled';
$arguments122['key'] = $output124;

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output121 .= '</span>';
return $output121;
};

$output113 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
                ';
return $output113;
};
$arguments111 = array();
$arguments111['if'] = NULL;

$output103 .= '';

$output103 .= '
            ';
return $output103;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('dce.hidden', $array101);
$array100['1'] = ' == 1';

$expression102 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments60['__thenClosure'] = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                    <span class="label label-danger text-uppercase">';
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
$output65 = '';
$array66 = array (
);
$output65 .= $renderingContext->getVariableProvider()->getByPath('lll', $array66);

$output65 .= 'disabled';
$arguments63['key'] = $output65;

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output62 .= '</span>
                ';
return $output62;
};
$arguments60['__elseClosures'][] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '<span class="label label-warning text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['languageKey'] = NULL;
$arguments89['alternativeLanguageKeys'] = NULL;
$output91 = '';
$array92 = array (
);
$output91 .= $renderingContext->getVariableProvider()->getByPath('lll', $array92);

$output91 .= 'nofields';
$arguments89['key'] = $output91;

$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output88 .= '</span>';
return $output88;
};
$arguments86 = array();

$output85 .= '';

$output85 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '<span class="label label-success text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['key'] = NULL;
$arguments96['id'] = NULL;
$arguments96['default'] = NULL;
$arguments96['arguments'] = NULL;
$arguments96['extensionName'] = NULL;
$arguments96['languageKey'] = NULL;
$arguments96['alternativeLanguageKeys'] = NULL;
$output98 = '';
$array99 = array (
);
$output98 .= $renderingContext->getVariableProvider()->getByPath('lll', $array99);

$output98 .= 'enabled';
$arguments96['key'] = $output98;

$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext)]);

$output95 .= '</span>';
return $output95;
};
$arguments93 = array();
$arguments93['if'] = NULL;

$output85 .= '';

$output85 .= '
                    ';
return $output85;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array83 = array (
);return $renderingContext->getVariableProvider()->getByPath('dce.fields', $array83);
};
$arguments81 = array();
$arguments81['subject'] = NULL;
$renderChildrenClosure82 = ($arguments81['subject'] !== null) ? function() use ($arguments81) { return $arguments81['subject']; } : $renderChildrenClosure82;$array80['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);
$array80['1'] = ' == 0';

$expression84 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '<span class="label label-warning text-uppercase">';
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
$output73 = '';
$array74 = array (
);
$output73 .= $renderingContext->getVariableProvider()->getByPath('lll', $array74);

$output73 .= 'nofields';
$arguments71['key'] = $output73;

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '</span>';
return $output70;
};
$arguments68['__elseClosures'][] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '<span class="label label-success text-uppercase">';
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
$output78 .= $renderingContext->getVariableProvider()->getByPath('lll', $array79);

$output78 .= 'enabled';
$arguments76['key'] = $output78;

$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= '</span>';
return $output75;
};

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
                ';
return $output67;
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output4 .= '
        </td>
        <td class="identifier">
            <code>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$array157 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dce.identifier', $array157)]);
};
$arguments155 = array();

$output154 .= '';

$output154 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= 'dceuid';
$array161 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dce.uid', $array161)]);
return $output160;
};
$arguments158 = array();
$arguments158['if'] = NULL;

$output154 .= '';

$output154 .= '
            ';
return $output154;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array151 = array();
$array152 = array (
);$array151['0'] = $renderingContext->getVariableProvider()->getByPath('dce.identifier', $array152);

$expression153 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = function() use ($renderingContext, $self) {
$array148 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dce.identifier', $array148)]);
};
$arguments146['__elseClosures'][] = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= 'dceuid';
$array150 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dce.uid', $array150)]);
return $output149;
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output4 .= '
            </code>
        </td>
        <td class="uid">
            ';
$array162 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dce.uid', $array162)]);

$output4 .= '
        </td>
        <td class="usage">
            <a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['section'] = NULL;
$arguments165['partial'] = NULL;
$arguments165['delegate'] = NULL;
$arguments165['renderable'] = NULL;
$arguments165['arguments'] = array (
);
$arguments165['optional'] = false;
$arguments165['default'] = NULL;
$arguments165['contentAs'] = NULL;
$arguments165['debug'] = true;
$arguments165['partial'] = 'Module/DceInfoLink';
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array168);
$arguments165['arguments'] = $array167;
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);
};
$arguments163 = array();
$arguments163['subject'] = NULL;

$output4 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output4 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['key'] = NULL;
$arguments169['id'] = NULL;
$arguments169['default'] = NULL;
$arguments169['arguments'] = NULL;
$arguments169['extensionName'] = NULL;
$arguments169['languageKey'] = NULL;
$arguments169['alternativeLanguageKeys'] = NULL;
$output171 = '';
$array172 = array (
);
$output171 .= $renderingContext->getVariableProvider()->getByPath('lll', $array172);

$output171 .= 'relatedContentElements';
$arguments169['key'] = $output171;
// Rendering Array
$array173 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$array176 = array (
);return $renderingContext->getVariableProvider()->getByPath('dce.relatedContentElementRows', $array176);
};
$arguments174 = array();
$arguments174['subject'] = NULL;
$renderChildrenClosure175 = ($arguments174['subject'] !== null) ? function() use ($arguments174) { return $arguments174['subject']; } : $renderChildrenClosure175;$array173['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);
$arguments169['arguments'] = $array173;

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext)]);

$output4 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['identifier'] = NULL;
$arguments177['size'] = 'small';
$arguments177['overlay'] = NULL;
$arguments177['state'] = 'default';
$arguments177['alternativeMarkupIdentifier'] = NULL;
$arguments177['identifier'] = 'mimetypes-x-content-text-picture';

$output4 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output4 .= '
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$array181 = array (
);return $renderingContext->getVariableProvider()->getByPath('dce.relatedContentElementRows', $array181);
};
$arguments179 = array();
$arguments179['subject'] = NULL;
$renderChildrenClosure180 = ($arguments179['subject'] !== null) ? function() use ($arguments179) { return $arguments179['subject']; } : $renderChildrenClosure180;
$output4 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output4 .= '</span>
            </a>
        </td>
        <td class="dceStats">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                <span class="label label-default label-darker">
                    <span class="text-uppercase">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['key'] = NULL;
$arguments188['id'] = NULL;
$arguments188['default'] = NULL;
$arguments188['arguments'] = NULL;
$arguments188['extensionName'] = NULL;
$arguments188['languageKey'] = NULL;
$arguments188['alternativeLanguageKeys'] = NULL;
$output190 = '';
$array191 = array (
);
$output190 .= $renderingContext->getVariableProvider()->getByPath('lll', $array191);

$output190 .= 'dceContainerEnabled';
$arguments188['key'] = $output190;

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output187 .= '</span>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['key'] = NULL;
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['languageKey'] = NULL;
$arguments198['alternativeLanguageKeys'] = NULL;
$output200 = '';
$array201 = array (
);
$output200 .= $renderingContext->getVariableProvider()->getByPath('lll', $array201);

$output200 .= 'limitedToItems';
$arguments198['key'] = $output200;
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('dce.containerItemLimit', $array203);
$arguments198['arguments'] = $array202;

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output197 .= ')';
return $output197;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['0'] = $renderingContext->getVariableProvider()->getByPath('dce.containerItemLimit', $array195);

$expression196 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$arguments192['__thenClosure'] = $renderChildrenClosure193;

$output187 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output187 .= '
                </span>
            ';
return $output187;
};
$arguments182 = array();
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$arguments182['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array185 = array (
);$array184['0'] = $renderingContext->getVariableProvider()->getByPath('dce.enableContainer', $array185);

$expression186 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments182['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);
$arguments182['__thenClosure'] = $renderChildrenClosure183;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output4 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
                <span class="label label-default label-darker">
                    <span class="text-uppercase">';
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
$output212 .= $renderingContext->getVariableProvider()->getByPath('lll', $array213);

$output212 .= 'dceDetailpageEnabled';
$arguments210['key'] = $output212;

$output209 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output209 .= '</span>
                </span>
            ';
return $output209;
};
$arguments204 = array();
$arguments204['then'] = NULL;
$arguments204['else'] = NULL;
$arguments204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array206 = array();
$array207 = array (
);$array206['0'] = $renderingContext->getVariableProvider()->getByPath('dce.enableDetailpage', $array207);

$expression208 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array206)
					),
					$renderingContext
				);
$arguments204['__thenClosure'] = $renderChildrenClosure205;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output4 .= '
        </td>
        <td class="fieldStats">
            <span class="label label-default label-darker">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$array216 = array (
);return $renderingContext->getVariableProvider()->getByPath('dce.fields', $array216);
};
$arguments214 = array();
$arguments214['subject'] = NULL;
$renderChildrenClosure215 = ($arguments214['subject'] !== null) ? function() use ($arguments214) { return $arguments214['subject']; } : $renderChildrenClosure215;
$output4 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output4 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$output219 = '';
$array220 = array (
);
$output219 .= $renderingContext->getVariableProvider()->getByPath('lll', $array220);

$output219 .= 'fields';
$arguments217['key'] = $output219;

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output4 .= '</span>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output242 = '';

$output242 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$output245 = '';

$output245 .= '<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['key'] = NULL;
$arguments246['id'] = NULL;
$arguments246['default'] = NULL;
$arguments246['arguments'] = NULL;
$arguments246['extensionName'] = NULL;
$arguments246['languageKey'] = NULL;
$arguments246['alternativeLanguageKeys'] = NULL;
$output248 = '';
$array249 = array (
);
$output248 .= $renderingContext->getVariableProvider()->getByPath('lll', $array249);

$output248 .= 'tcaplus';
$arguments246['key'] = $output248;

$output245 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext)]);

$output245 .= '" class="label label-danger">TCA+</span>';
return $output245;
};
$arguments243 = array();

$output242 .= '';

$output242 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['key'] = NULL;
$arguments253['id'] = NULL;
$arguments253['default'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['languageKey'] = NULL;
$arguments253['alternativeLanguageKeys'] = NULL;
$output255 = '';
$array256 = array (
);
$output255 .= $renderingContext->getVariableProvider()->getByPath('lll', $array256);

$output255 .= 'tca';
$arguments253['key'] = $output255;

$output252 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext)]);

$output252 .= '" class="label label-danger">TCA</span>';
return $output252;
};
$arguments250 = array();
$arguments250['if'] = NULL;

$output242 .= '';

$output242 .= '
                ';
return $output242;
};
$arguments227 = array();
$arguments227['then'] = NULL;
$arguments227['else'] = NULL;
$arguments227['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array239 = array();
$array240 = array (
);$array239['0'] = $renderingContext->getVariableProvider()->getByPath('dce.addsNewFieldsToTca', $array240);

$expression241 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments227['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression241(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array239)
					),
					$renderingContext
				);
$arguments227['__thenClosure'] = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['key'] = NULL;
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$arguments230['languageKey'] = NULL;
$arguments230['alternativeLanguageKeys'] = NULL;
$output232 = '';
$array233 = array (
);
$output232 .= $renderingContext->getVariableProvider()->getByPath('lll', $array233);

$output232 .= 'tcaplus';
$arguments230['key'] = $output232;

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output229 .= '" class="label label-danger">TCA+</span>';
return $output229;
};
$arguments227['__elseClosures'][] = function() use ($renderingContext, $self) {
$output234 = '';

$output234 .= '<span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$arguments235['languageKey'] = NULL;
$arguments235['alternativeLanguageKeys'] = NULL;
$output237 = '';
$array238 = array (
);
$output237 .= $renderingContext->getVariableProvider()->getByPath('lll', $array238);

$output237 .= 'tca';
$arguments235['key'] = $output237;

$output234 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext)]);

$output234 .= '" class="label label-danger">TCA</span>';
return $output234;
};

$output226 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
            ';
return $output226;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('dce.hasTcaMappings', $array224);

$expression225 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = $renderChildrenClosure222;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output4 .= '
        </td>
        <td>
            <div class="pull-right">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output267 = '';

$output267 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['identifier'] = NULL;
$arguments268['size'] = 'small';
$arguments268['overlay'] = NULL;
$arguments268['state'] = 'default';
$arguments268['alternativeMarkupIdentifier'] = NULL;
$arguments268['identifier'] = 'actions-refresh';

$output267 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['key'] = NULL;
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$arguments270['languageKey'] = NULL;
$arguments270['alternativeLanguageKeys'] = NULL;
$output272 = '';
$array273 = array (
);
$output272 .= $renderingContext->getVariableProvider()->getByPath('lll', $array273);

$output272 .= 'updateTcaMappings';
$arguments270['key'] = $output272;

$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output267 .= '
                    ';
return $output267;
};
$arguments263 = array();
$arguments263['additionalAttributes'] = NULL;
$arguments263['data'] = NULL;
$arguments263['class'] = NULL;
$arguments263['dir'] = NULL;
$arguments263['id'] = NULL;
$arguments263['lang'] = NULL;
$arguments263['style'] = NULL;
$arguments263['title'] = NULL;
$arguments263['accesskey'] = NULL;
$arguments263['tabindex'] = NULL;
$arguments263['onclick'] = NULL;
$arguments263['name'] = NULL;
$arguments263['rel'] = NULL;
$arguments263['rev'] = NULL;
$arguments263['target'] = NULL;
$arguments263['action'] = NULL;
$arguments263['controller'] = NULL;
$arguments263['extensionName'] = NULL;
$arguments263['pluginName'] = NULL;
$arguments263['pageUid'] = NULL;
$arguments263['pageType'] = NULL;
$arguments263['noCache'] = NULL;
$arguments263['noCacheHash'] = NULL;
$arguments263['section'] = NULL;
$arguments263['format'] = NULL;
$arguments263['linkAccessRestrictedPages'] = NULL;
$arguments263['additionalParams'] = NULL;
$arguments263['absolute'] = NULL;
$arguments263['addQueryString'] = NULL;
$arguments263['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments263['addQueryStringMethod'] = NULL;
$arguments263['arguments'] = NULL;
$arguments263['class'] = 'btn btn-default btn-large';
$arguments263['action'] = 'updateTcaMappings';
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array266);
$arguments263['arguments'] = $array265;

$output262 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
                ';
return $output262;
};
$arguments257 = array();
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$arguments257['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array259 = array();
$array260 = array (
);$array259['0'] = $renderingContext->getVariableProvider()->getByPath('dce.hasTcaMappings', $array260);

$expression261 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments257['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression261(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array259)
					),
					$renderingContext
				);
$arguments257['__thenClosure'] = $renderChildrenClosure258;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output4 .= '
                <a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['section'] = NULL;
$arguments276['partial'] = NULL;
$arguments276['delegate'] = NULL;
$arguments276['renderable'] = NULL;
$arguments276['arguments'] = array (
);
$arguments276['optional'] = false;
$arguments276['default'] = NULL;
$arguments276['contentAs'] = NULL;
$arguments276['debug'] = true;
$arguments276['partial'] = 'Module/OpenDce';
// Rendering Array
$array278 = array();
$array279 = array (
);$array278['uid'] = $renderingContext->getVariableProvider()->getByPath('dce.uid', $array279);
$arguments276['arguments'] = $array278;
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);
};
$arguments274 = array();
$arguments274['subject'] = NULL;

$output4 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output4 .= '" class="btn btn-primary btn-wide">
                    <i class="fa fa-edit"></i>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['key'] = NULL;
$arguments280['id'] = NULL;
$arguments280['default'] = NULL;
$arguments280['arguments'] = NULL;
$arguments280['extensionName'] = NULL;
$arguments280['languageKey'] = NULL;
$arguments280['alternativeLanguageKeys'] = NULL;
$output282 = '';
$array283 = array (
);
$output282 .= $renderingContext->getVariableProvider()->getByPath('lll', $array283);

$output282 .= 'edit';
$arguments280['key'] = $output282;

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext)]);

$output4 .= '
                </a>
            </div>
        </td>
    </tr>
';
return $output4;
};
$arguments1 = array();
$arguments1['map'] = NULL;
// Rendering Array
$array3 = array();
$array3['lll'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xlf:';
$arguments1['map'] = $array3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#