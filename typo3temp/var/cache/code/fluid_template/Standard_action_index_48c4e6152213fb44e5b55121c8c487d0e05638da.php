<?php

class Standard_action_index_48c4e6152213fb44e5b55121c8c487d0e05638da extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'vh' => 
  array (
    0 => 'In2code\\Powermail\\ViewHelpers',
  ),
));
}

/**
 * section Pi1
 */
public function section_c101f2246386261cd3fe55537d8085d77242baa9(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'Mailform configuration';
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:BackendPluginInformationTitleMailForm';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h3>

	<table>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
			<tr>
				<td style="padding: 2px 10px 2px 5px">
					<strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return 'form';
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.form';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '
					</strong>
				</td>
				<td>
					<a href="';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['table'] = NULL;
$arguments11['identifier'] = NULL;
$arguments11['table'] = 'form';
$array13 = array (
);$arguments11['identifier'] = $renderingContext->getVariableProvider()->getByPath('formUid', $array13);

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output8 .= '">
						';
$array14 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form', $array14)]);

$output8 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['identifier'] = NULL;
$arguments15['size'] = 'small';
$arguments15['overlay'] = NULL;
$arguments15['state'] = 'default';
$arguments15['alternativeMarkupIdentifier'] = NULL;
$arguments15['identifier'] = 'actions-open';

$output8 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output8 .= '
					</a>
				</td>
			</tr>
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
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('form', $array6);

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
			<tr>
				<td style="padding: 2px 10px 2px 5px">
					<strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return 'Email Receiver';
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.receiverEmail';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
					</strong>
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
							<span style="color: red;">
								<strong>';
$array39 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmailDevelopmentContext', $array39)]);

$output38 .= '</strong>
								&lt;Development context&gt;
							</span>
							<span style="color: #999;">(';
$array40 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmail', $array40)]);

$output38 .= ')</span>
						';
return $output38;
};
$arguments36 = array();

$output35 .= '';

$output35 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
							';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmail', $array44)]);

$output43 .= '
						';
return $output43;
};
$arguments41 = array();
$arguments41['if'] = NULL;

$output35 .= '';

$output35 .= '
					';
return $output35;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('receiverEmailDevelopmentContext', $array33);

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
							<span style="color: red;">
								<strong>';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmailDevelopmentContext', $array28)]);

$output27 .= '</strong>
								&lt;Development context&gt;
							</span>
							<span style="color: #999;">(';
$array29 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmail', $array29)]);

$output27 .= ')</span>
						';
return $output27;
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
							';
$array31 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmail', $array31)]);

$output30 .= '
						';
return $output30;
};

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output22 .= '
				</td>
			</tr>
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
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('receiverEmail', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
			<tr>
				<td style="padding: 2px 10px 2px 5px">
					<strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return 'receiverName';
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['languageKey'] = NULL;
$arguments51['alternativeLanguageKeys'] = NULL;
$arguments51['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.receiverName';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '
					</strong>
				</td>
				<td>
					';
$array53 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.receiver.name', $array53)]);

$output50 .= '
				</td>
			</tr>
		';
return $output50;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.receiver.name', $array48);

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['__thenClosure'] = $renderChildrenClosure46;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
			<tr>
				<td style="padding: 2px 10px 2px 5px">
					<strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return 'subject';
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.subject';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= '
					</strong>
				</td>
				<td>
					';
$array62 = array (
);
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.receiver.subject', $array62)]);

$output59 .= '
				</td>
			</tr>
		';
return $output59;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.receiver.subject', $array57);

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['__thenClosure'] = $renderChildrenClosure55;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output0 .= '

		<tr>
			<td style="padding: 2px 10px 2px 5px">
				<strong>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return 'confirmationPage';
};
$arguments63 = array();
$arguments63['key'] = NULL;
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['languageKey'] = NULL;
$arguments63['alternativeLanguageKeys'] = NULL;
$arguments63['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.confirmationPage';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output0 .= '
				</strong>
			</td>
			<td>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['identifier'] = NULL;
$arguments80['size'] = 'small';
$arguments80['overlay'] = NULL;
$arguments80['state'] = 'default';
$arguments80['alternativeMarkupIdentifier'] = NULL;
$arguments80['identifier'] = 'status-status-permission-granted';

$output79 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
					';
return $output79;
};
$arguments77 = array();

$output76 .= '';

$output76 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['identifier'] = NULL;
$arguments85['size'] = 'small';
$arguments85['overlay'] = NULL;
$arguments85['state'] = 'default';
$arguments85['alternativeMarkupIdentifier'] = NULL;
$arguments85['identifier'] = 'status-status-permission-denied';

$output84 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
					';
return $output84;
};
$arguments82 = array();
$arguments82['if'] = NULL;

$output76 .= '';

$output76 .= '
				';
return $output76;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.main.confirmation', $array74);

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments65['__thenClosure'] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['identifier'] = NULL;
$arguments68['size'] = 'small';
$arguments68['overlay'] = NULL;
$arguments68['state'] = 'default';
$arguments68['alternativeMarkupIdentifier'] = NULL;
$arguments68['identifier'] = 'status-status-permission-granted';

$output67 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
					';
return $output67;
};
$arguments65['__elseClosures'][] = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['identifier'] = NULL;
$arguments71['size'] = 'small';
$arguments71['overlay'] = NULL;
$arguments71['state'] = 'default';
$arguments71['alternativeMarkupIdentifier'] = NULL;
$arguments71['identifier'] = 'status-status-permission-denied';

$output70 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
					';
return $output70;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output0 .= '
			</td>
		</tr>

		<tr>
			<td style="padding: 2px 10px 2px 5px">
				<strong>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return 'optin';
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$arguments87['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.optin';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output0 .= '
				</strong>
			</td>
			<td>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['identifier'] = NULL;
$arguments104['size'] = 'small';
$arguments104['overlay'] = NULL;
$arguments104['state'] = 'default';
$arguments104['alternativeMarkupIdentifier'] = NULL;
$arguments104['identifier'] = 'status-status-permission-granted';

$output103 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
					';
return $output103;
};
$arguments101 = array();

$output100 .= '';

$output100 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['identifier'] = NULL;
$arguments109['size'] = 'small';
$arguments109['overlay'] = NULL;
$arguments109['state'] = 'default';
$arguments109['alternativeMarkupIdentifier'] = NULL;
$arguments109['identifier'] = 'status-status-permission-denied';

$output108 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
					';
return $output108;
};
$arguments106 = array();
$arguments106['if'] = NULL;

$output100 .= '';

$output100 .= '
				';
return $output100;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.main.optin', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments89['__thenClosure'] = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['identifier'] = NULL;
$arguments92['size'] = 'small';
$arguments92['overlay'] = NULL;
$arguments92['state'] = 'default';
$arguments92['alternativeMarkupIdentifier'] = NULL;
$arguments92['identifier'] = 'status-status-permission-granted';

$output91 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
					';
return $output91;
};
$arguments89['__elseClosures'][] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['identifier'] = NULL;
$arguments95['size'] = 'small';
$arguments95['overlay'] = NULL;
$arguments95['state'] = 'default';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$arguments95['identifier'] = 'status-status-permission-denied';

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
					';
return $output94;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output0 .= '
			</td>
		</tr>
	</table>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
			<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return 'Last mails';
};
$arguments123 = array();
$arguments123['key'] = NULL;
$arguments123['id'] = NULL;
$arguments123['default'] = NULL;
$arguments123['arguments'] = NULL;
$arguments123['extensionName'] = NULL;
$arguments123['languageKey'] = NULL;
$arguments123['alternativeLanguageKeys'] = NULL;
$arguments123['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:BackendPluginInformationTitleLastMails';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output122 .= '</h3>

			<table>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
					<tr>
						<td style="padding: 2px 10px 2px 5px">
							<strong>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$array133 = array (
);return $renderingContext->getVariableProvider()->getByPath('mail.crdate', $array133);
};
$arguments129 = array();
$arguments129['date'] = NULL;
$arguments129['format'] = '';
$arguments129['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['key'] = NULL;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['languageKey'] = NULL;
$arguments131['alternativeLanguageKeys'] = NULL;
$arguments131['key'] = 'datepicker_format_datetime';
$arguments131['extensionName'] = 'powermail';
$arguments129['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);
$renderChildrenClosure130 = ($arguments129['date'] !== null) ? function() use ($arguments129) { return $arguments129['date']; } : $renderChildrenClosure130;
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output128 .= '
							</strong>
						</td>
						<td style="padding: 2px 10px 2px 5px">
							';
$array134 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mail.senderName', $array134)]);

$output128 .= '
						</td>
						<td style="padding: 2px 10px 2px 5px">
							&lt;';
$array135 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mail.senderMail', $array135)]);

$output128 .= '&gt;
						</td>
						<td style="padding: 2px 10px 2px 5px">
							<a href="';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['table'] = NULL;
$arguments136['identifier'] = NULL;
$arguments136['table'] = 'mail';
$array138 = array (
);$arguments136['identifier'] = $renderingContext->getVariableProvider()->getByPath('mail.uid', $array138);

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext)]);

$output128 .= '">
								';
$array139 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mail.subject', $array139)]);

$output128 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['identifier'] = NULL;
$arguments140['size'] = 'small';
$arguments140['overlay'] = NULL;
$arguments140['state'] = 'default';
$arguments140['alternativeMarkupIdentifier'] = NULL;
$arguments140['identifier'] = 'actions-open';

$output128 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output128 .= '
							</a>
						</td>
					</tr>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
						<tr>
							<td colspan="4" style="padding: 2px 10px 2px 5px">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return 'more ...';
};
$arguments153 = array();
$arguments153['key'] = NULL;
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$arguments153['languageKey'] = NULL;
$arguments153['alternativeLanguageKeys'] = NULL;
$arguments153['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.more';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output152 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['identifier'] = NULL;
$arguments155['size'] = 'small';
$arguments155['overlay'] = NULL;
$arguments155['state'] = 'default';
$arguments155['alternativeMarkupIdentifier'] = NULL;
$arguments155['identifier'] = 'actions-search';

$output152 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output152 .= '
								';
return $output152;
};
$arguments148 = array();
$arguments148['additionalAttributes'] = NULL;
$arguments148['data'] = NULL;
$arguments148['route'] = NULL;
$arguments148['parameters'] = array (
);
$arguments148['referenceType'] = 'absolute';
$arguments148['name'] = NULL;
$arguments148['rel'] = NULL;
$arguments148['rev'] = NULL;
$arguments148['target'] = NULL;
$arguments148['class'] = NULL;
$arguments148['dir'] = NULL;
$arguments148['id'] = NULL;
$arguments148['lang'] = NULL;
$arguments148['style'] = NULL;
$arguments148['title'] = NULL;
$arguments148['accesskey'] = NULL;
$arguments148['tabindex'] = NULL;
$arguments148['onclick'] = NULL;
$arguments148['route'] = 'web_PowermailM1';
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['id'] = $renderingContext->getVariableProvider()->getByPath('mail.pid', $array151);
$arguments148['parameters'] = $array150;

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
							</td>
						</tr>
					';
return $output147;
};
$arguments142 = array();
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$arguments142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('index.isLast', $array145);

$expression146 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments142['__thenClosure'] = $renderChildrenClosure143;

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output128 .= '
				';
return $output128;
};
$arguments125 = array();
$arguments125['each'] = NULL;
$arguments125['as'] = NULL;
$arguments125['key'] = NULL;
$arguments125['reverse'] = false;
$arguments125['iteration'] = NULL;
$array127 = array (
);$arguments125['each'] = $renderingContext->getVariableProvider()->getByPath('mails', $array127);
$arguments125['as'] = 'mail';
$arguments125['iteration'] = 'index';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output122 .= '
			</table>
		';
return $output122;
};
$arguments117 = array();
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('mails', $array120);

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['__thenClosure'] = $renderChildrenClosure118;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
	';
return $output116;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('enableMailPreview', $array114);

$expression115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments111['__thenClosure'] = $renderChildrenClosure112;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * section Pi2
 */
public function section_ee0eea73dd5ef6396f1ab4cd98f9e9aa42b5bca5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output157 = '';

$output157 .= '
	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return 'Show and manage mails in Frontend';
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:BackendPluginInformationTitlePi2';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output157 .= '</h3>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
		<p>
			<strong>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return 'form';
};
$arguments166 = array();
$arguments166['key'] = NULL;
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$arguments166['languageKey'] = NULL;
$arguments166['alternativeLanguageKeys'] = NULL;
$arguments166['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.form';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);

$output165 .= ':
			</strong>
			<a href="';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['table'] = NULL;
$arguments168['identifier'] = NULL;
$arguments168['table'] = 'form';
$array170 = array (
);$arguments168['identifier'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.main.form', $array170);

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output165 .= '">
				';
$array171 = array (
);
$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form', $array171)]);

$output165 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['identifier'] = NULL;
$arguments172['size'] = 'small';
$arguments172['overlay'] = NULL;
$arguments172['state'] = 'default';
$arguments172['alternativeMarkupIdentifier'] = NULL;
$arguments172['identifier'] = 'actions-open';

$output165 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output165 .= '
			</a>
		</p>
	';
return $output165;
};
$arguments160 = array();
$arguments160['then'] = NULL;
$arguments160['else'] = NULL;
$arguments160['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['0'] = $renderingContext->getVariableProvider()->getByPath('form', $array163);

$expression164 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments160['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array162)
					),
					$renderingContext
				);
$arguments160['__thenClosure'] = $renderChildrenClosure161;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output157 .= '
';

return $output157;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output174 = '';

$output174 .= '


<p>
	<h2>
		';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['identifier'] = NULL;
$arguments175['size'] = 'small';
$arguments175['overlay'] = NULL;
$arguments175['state'] = 'default';
$arguments175['alternativeMarkupIdentifier'] = NULL;
$arguments175['identifier'] = 'extension-powermail-main';
$arguments175['size'] = 'default';

$output174 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
		<a href="';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['table'] = NULL;
$arguments177['identifier'] = NULL;
$arguments177['table'] = 'tt_content';
$array179 = array (
);$arguments177['identifier'] = $renderingContext->getVariableProvider()->getByPath('row.uid', $array179);

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output174 .= '">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$array191 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.header', $array191)]);
};
$arguments189 = array();

$output188 .= '';

$output188 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return '[no header]';
};
$arguments194 = array();
$arguments194['key'] = NULL;
$arguments194['id'] = NULL;
$arguments194['default'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['languageKey'] = NULL;
$arguments194['alternativeLanguageKeys'] = NULL;
$arguments194['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:BackendPluginInformationNoHeader';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext)]);
};
$arguments192 = array();
$arguments192['if'] = NULL;

$output188 .= '';

$output188 .= '
			';
return $output188;
};
$arguments180 = array();
$arguments180['then'] = NULL;
$arguments180['else'] = NULL;
$arguments180['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('row.header', $array186);

$expression187 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments180['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments180['__thenClosure'] = function() use ($renderingContext, $self) {
$array182 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.header', $array182)]);
};
$arguments180['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return '[no header]';
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['languageKey'] = NULL;
$arguments183['alternativeLanguageKeys'] = NULL;
$arguments183['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:BackendPluginInformationNoHeader';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);
};

$output174 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output174 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['identifier'] = NULL;
$arguments196['size'] = 'small';
$arguments196['overlay'] = NULL;
$arguments196['state'] = 'default';
$arguments196['alternativeMarkupIdentifier'] = NULL;
$arguments196['identifier'] = 'actions-open';

$output174 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output174 .= '
		</a>
	</h2>
</p>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['section'] = NULL;
$arguments215['partial'] = NULL;
$arguments215['delegate'] = NULL;
$arguments215['renderable'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['optional'] = false;
$arguments215['default'] = NULL;
$arguments215['contentAs'] = NULL;
$arguments215['debug'] = true;
$arguments215['section'] = 'Pi1';
$arguments215['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output214 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
	';
return $output214;
};
$arguments212 = array();

$output211 .= '';

$output211 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['section'] = NULL;
$arguments221['partial'] = NULL;
$arguments221['delegate'] = NULL;
$arguments221['renderable'] = NULL;
$arguments221['arguments'] = array (
);
$arguments221['optional'] = false;
$arguments221['default'] = NULL;
$arguments221['contentAs'] = NULL;
$arguments221['debug'] = true;
$arguments221['section'] = 'Pi2';
$arguments221['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output220 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
	';
return $output220;
};
$arguments218 = array();
$arguments218['if'] = NULL;

$output211 .= '';

$output211 .= '
';
return $output211;
};
$arguments198 = array();
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$arguments198['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array208 = array();
$array209 = array (
);$array208['0'] = $renderingContext->getVariableProvider()->getByPath('pluginName', $array209);
$array208['1'] = ' == \'Pi1\'';

$expression210 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'Pi1');};
$arguments198['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
$arguments198['__thenClosure'] = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['section'] = NULL;
$arguments201['partial'] = NULL;
$arguments201['delegate'] = NULL;
$arguments201['renderable'] = NULL;
$arguments201['arguments'] = array (
);
$arguments201['optional'] = false;
$arguments201['default'] = NULL;
$arguments201['contentAs'] = NULL;
$arguments201['debug'] = true;
$arguments201['section'] = 'Pi1';
$arguments201['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output200 .= '
	';
return $output200;
};
$arguments198['__elseClosures'][] = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['section'] = NULL;
$arguments205['partial'] = NULL;
$arguments205['delegate'] = NULL;
$arguments205['renderable'] = NULL;
$arguments205['arguments'] = array (
);
$arguments205['optional'] = false;
$arguments205['default'] = NULL;
$arguments205['contentAs'] = NULL;
$arguments205['debug'] = true;
$arguments205['section'] = 'Pi2';
$arguments205['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '
	';
return $output204;
};

$output174 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output174 .= '



';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return '
	Information for Plugin 1
';
};
$arguments224 = array();

$output174 .= NULL;

$output174 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return 'Mailform configuration';
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['languageKey'] = NULL;
$arguments229['alternativeLanguageKeys'] = NULL;
$arguments229['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:BackendPluginInformationTitleMailForm';

$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output228 .= '</h3>

	<table>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
			<tr>
				<td style="padding: 2px 10px 2px 5px">
					<strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return 'form';
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['languageKey'] = NULL;
$arguments237['alternativeLanguageKeys'] = NULL;
$arguments237['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.form';

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= '
					</strong>
				</td>
				<td>
					<a href="';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['table'] = NULL;
$arguments239['identifier'] = NULL;
$arguments239['table'] = 'form';
$array241 = array (
);$arguments239['identifier'] = $renderingContext->getVariableProvider()->getByPath('formUid', $array241);

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext)]);

$output236 .= '">
						';
$array242 = array (
);
$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form', $array242)]);

$output236 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['identifier'] = NULL;
$arguments243['size'] = 'small';
$arguments243['overlay'] = NULL;
$arguments243['state'] = 'default';
$arguments243['alternativeMarkupIdentifier'] = NULL;
$arguments243['identifier'] = 'actions-open';

$output236 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output236 .= '
					</a>
				</td>
			</tr>
		';
return $output236;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array233 = array();
$array234 = array (
);$array233['0'] = $renderingContext->getVariableProvider()->getByPath('form', $array234);

$expression235 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments231['__thenClosure'] = $renderChildrenClosure232;

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output228 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output250 = '';

$output250 .= '
			<tr>
				<td style="padding: 2px 10px 2px 5px">
					<strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return 'Email Receiver';
};
$arguments251 = array();
$arguments251['key'] = NULL;
$arguments251['id'] = NULL;
$arguments251['default'] = NULL;
$arguments251['arguments'] = NULL;
$arguments251['extensionName'] = NULL;
$arguments251['languageKey'] = NULL;
$arguments251['alternativeLanguageKeys'] = NULL;
$arguments251['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.receiverEmail';

$output250 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext)]);

$output250 .= '
					</strong>
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
							<span style="color: red;">
								<strong>';
$array267 = array (
);
$output266 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmailDevelopmentContext', $array267)]);

$output266 .= '</strong>
								&lt;Development context&gt;
							</span>
							<span style="color: #999;">(';
$array268 = array (
);
$output266 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmail', $array268)]);

$output266 .= ')</span>
						';
return $output266;
};
$arguments264 = array();

$output263 .= '';

$output263 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
							';
$array272 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmail', $array272)]);

$output271 .= '
						';
return $output271;
};
$arguments269 = array();
$arguments269['if'] = NULL;

$output263 .= '';

$output263 .= '
					';
return $output263;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('receiverEmailDevelopmentContext', $array261);

$expression262 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments253['__thenClosure'] = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
							<span style="color: red;">
								<strong>';
$array256 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmailDevelopmentContext', $array256)]);

$output255 .= '</strong>
								&lt;Development context&gt;
							</span>
							<span style="color: #999;">(';
$array257 = array (
);
$output255 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmail', $array257)]);

$output255 .= ')</span>
						';
return $output255;
};
$arguments253['__elseClosures'][] = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
							';
$array259 = array (
);
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('receiverEmail', $array259)]);

$output258 .= '
						';
return $output258;
};

$output250 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output250 .= '
				</td>
			</tr>
		';
return $output250;
};
$arguments245 = array();
$arguments245['then'] = NULL;
$arguments245['else'] = NULL;
$arguments245['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array247 = array();
$array248 = array (
);$array247['0'] = $renderingContext->getVariableProvider()->getByPath('receiverEmail', $array248);

$expression249 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments245['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression249(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array247)
					),
					$renderingContext
				);
$arguments245['__thenClosure'] = $renderChildrenClosure246;

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output228 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
			<tr>
				<td style="padding: 2px 10px 2px 5px">
					<strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return 'receiverName';
};
$arguments279 = array();
$arguments279['key'] = NULL;
$arguments279['id'] = NULL;
$arguments279['default'] = NULL;
$arguments279['arguments'] = NULL;
$arguments279['extensionName'] = NULL;
$arguments279['languageKey'] = NULL;
$arguments279['alternativeLanguageKeys'] = NULL;
$arguments279['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.receiverName';

$output278 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext)]);

$output278 .= '
					</strong>
				</td>
				<td>
					';
$array281 = array (
);
$output278 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.receiver.name', $array281)]);

$output278 .= '
				</td>
			</tr>
		';
return $output278;
};
$arguments273 = array();
$arguments273['then'] = NULL;
$arguments273['else'] = NULL;
$arguments273['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array275 = array();
$array276 = array (
);$array275['0'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.receiver.name', $array276);

$expression277 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments273['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression277(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array275)
					),
					$renderingContext
				);
$arguments273['__thenClosure'] = $renderChildrenClosure274;

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output228 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
			<tr>
				<td style="padding: 2px 10px 2px 5px">
					<strong>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return 'subject';
};
$arguments288 = array();
$arguments288['key'] = NULL;
$arguments288['id'] = NULL;
$arguments288['default'] = NULL;
$arguments288['arguments'] = NULL;
$arguments288['extensionName'] = NULL;
$arguments288['languageKey'] = NULL;
$arguments288['alternativeLanguageKeys'] = NULL;
$arguments288['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.subject';

$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext)]);

$output287 .= '
					</strong>
				</td>
				<td>
					';
$array290 = array (
);
$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.receiver.subject', $array290)]);

$output287 .= '
				</td>
			</tr>
		';
return $output287;
};
$arguments282 = array();
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$arguments282['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.receiver.subject', $array285);

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments282['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);
$arguments282['__thenClosure'] = $renderChildrenClosure283;

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output228 .= '

		<tr>
			<td style="padding: 2px 10px 2px 5px">
				<strong>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
return 'confirmationPage';
};
$arguments291 = array();
$arguments291['key'] = NULL;
$arguments291['id'] = NULL;
$arguments291['default'] = NULL;
$arguments291['arguments'] = NULL;
$arguments291['extensionName'] = NULL;
$arguments291['languageKey'] = NULL;
$arguments291['alternativeLanguageKeys'] = NULL;
$arguments291['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.confirmationPage';

$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext)]);

$output228 .= '
				</strong>
			</td>
			<td>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output307 = '';

$output307 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['identifier'] = NULL;
$arguments308['size'] = 'small';
$arguments308['overlay'] = NULL;
$arguments308['state'] = 'default';
$arguments308['alternativeMarkupIdentifier'] = NULL;
$arguments308['identifier'] = 'status-status-permission-granted';

$output307 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '
					';
return $output307;
};
$arguments305 = array();

$output304 .= '';

$output304 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['identifier'] = NULL;
$arguments313['size'] = 'small';
$arguments313['overlay'] = NULL;
$arguments313['state'] = 'default';
$arguments313['alternativeMarkupIdentifier'] = NULL;
$arguments313['identifier'] = 'status-status-permission-denied';

$output312 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
					';
return $output312;
};
$arguments310 = array();
$arguments310['if'] = NULL;

$output304 .= '';

$output304 .= '
				';
return $output304;
};
$arguments293 = array();
$arguments293['then'] = NULL;
$arguments293['else'] = NULL;
$arguments293['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.main.confirmation', $array302);

$expression303 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments293['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments293['__thenClosure'] = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['identifier'] = NULL;
$arguments296['size'] = 'small';
$arguments296['overlay'] = NULL;
$arguments296['state'] = 'default';
$arguments296['alternativeMarkupIdentifier'] = NULL;
$arguments296['identifier'] = 'status-status-permission-granted';

$output295 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
					';
return $output295;
};
$arguments293['__elseClosures'][] = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['identifier'] = NULL;
$arguments299['size'] = 'small';
$arguments299['overlay'] = NULL;
$arguments299['state'] = 'default';
$arguments299['alternativeMarkupIdentifier'] = NULL;
$arguments299['identifier'] = 'status-status-permission-denied';

$output298 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '
					';
return $output298;
};

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output228 .= '
			</td>
		</tr>

		<tr>
			<td style="padding: 2px 10px 2px 5px">
				<strong>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return 'optin';
};
$arguments315 = array();
$arguments315['key'] = NULL;
$arguments315['id'] = NULL;
$arguments315['default'] = NULL;
$arguments315['arguments'] = NULL;
$arguments315['extensionName'] = NULL;
$arguments315['languageKey'] = NULL;
$arguments315['alternativeLanguageKeys'] = NULL;
$arguments315['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.optin';

$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext)]);

$output228 .= '
				</strong>
			</td>
			<td>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$output328 = '';

$output328 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['identifier'] = NULL;
$arguments332['size'] = 'small';
$arguments332['overlay'] = NULL;
$arguments332['state'] = 'default';
$arguments332['alternativeMarkupIdentifier'] = NULL;
$arguments332['identifier'] = 'status-status-permission-granted';

$output331 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '
					';
return $output331;
};
$arguments329 = array();

$output328 .= '';

$output328 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['identifier'] = NULL;
$arguments337['size'] = 'small';
$arguments337['overlay'] = NULL;
$arguments337['state'] = 'default';
$arguments337['alternativeMarkupIdentifier'] = NULL;
$arguments337['identifier'] = 'status-status-permission-denied';

$output336 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output336 .= '
					';
return $output336;
};
$arguments334 = array();
$arguments334['if'] = NULL;

$output328 .= '';

$output328 .= '
				';
return $output328;
};
$arguments317 = array();
$arguments317['then'] = NULL;
$arguments317['else'] = NULL;
$arguments317['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array325 = array();
$array326 = array (
);$array325['0'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.main.optin', $array326);

$expression327 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments317['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression327(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array325)
					),
					$renderingContext
				);
$arguments317['__thenClosure'] = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['identifier'] = NULL;
$arguments320['size'] = 'small';
$arguments320['overlay'] = NULL;
$arguments320['state'] = 'default';
$arguments320['alternativeMarkupIdentifier'] = NULL;
$arguments320['identifier'] = 'status-status-permission-granted';

$output319 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output319 .= '
					';
return $output319;
};
$arguments317['__elseClosures'][] = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['identifier'] = NULL;
$arguments323['size'] = 'small';
$arguments323['overlay'] = NULL;
$arguments323['state'] = 'default';
$arguments323['alternativeMarkupIdentifier'] = NULL;
$arguments323['identifier'] = 'status-status-permission-denied';

$output322 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
					';
return $output322;
};

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output228 .= '
			</td>
		</tr>
	</table>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output344 = '';

$output344 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
			<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return 'Last mails';
};
$arguments351 = array();
$arguments351['key'] = NULL;
$arguments351['id'] = NULL;
$arguments351['default'] = NULL;
$arguments351['arguments'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['languageKey'] = NULL;
$arguments351['alternativeLanguageKeys'] = NULL;
$arguments351['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:BackendPluginInformationTitleLastMails';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output350 .= '</h3>

			<table>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
					<tr>
						<td style="padding: 2px 10px 2px 5px">
							<strong>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$array361 = array (
);return $renderingContext->getVariableProvider()->getByPath('mail.crdate', $array361);
};
$arguments357 = array();
$arguments357['date'] = NULL;
$arguments357['format'] = '';
$arguments357['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments359 = array();
$arguments359['key'] = NULL;
$arguments359['id'] = NULL;
$arguments359['default'] = NULL;
$arguments359['arguments'] = NULL;
$arguments359['extensionName'] = NULL;
$arguments359['languageKey'] = NULL;
$arguments359['alternativeLanguageKeys'] = NULL;
$arguments359['key'] = 'datepicker_format_datetime';
$arguments359['extensionName'] = 'powermail';
$arguments357['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);
$renderChildrenClosure358 = ($arguments357['date'] !== null) ? function() use ($arguments357) { return $arguments357['date']; } : $renderChildrenClosure358;
$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext)]);

$output356 .= '
							</strong>
						</td>
						<td style="padding: 2px 10px 2px 5px">
							';
$array362 = array (
);
$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mail.senderName', $array362)]);

$output356 .= '
						</td>
						<td style="padding: 2px 10px 2px 5px">
							&lt;';
$array363 = array (
);
$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mail.senderMail', $array363)]);

$output356 .= '&gt;
						</td>
						<td style="padding: 2px 10px 2px 5px">
							<a href="';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['table'] = NULL;
$arguments364['identifier'] = NULL;
$arguments364['table'] = 'mail';
$array366 = array (
);$arguments364['identifier'] = $renderingContext->getVariableProvider()->getByPath('mail.uid', $array366);

$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext)]);

$output356 .= '">
								';
$array367 = array (
);
$output356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mail.subject', $array367)]);

$output356 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments368 = array();
$arguments368['identifier'] = NULL;
$arguments368['size'] = 'small';
$arguments368['overlay'] = NULL;
$arguments368['state'] = 'default';
$arguments368['alternativeMarkupIdentifier'] = NULL;
$arguments368['identifier'] = 'actions-open';

$output356 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output356 .= '
							</a>
						</td>
					</tr>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
						<tr>
							<td colspan="4" style="padding: 2px 10px 2px 5px">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output380 = '';

$output380 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
return 'more ...';
};
$arguments381 = array();
$arguments381['key'] = NULL;
$arguments381['id'] = NULL;
$arguments381['default'] = NULL;
$arguments381['arguments'] = NULL;
$arguments381['extensionName'] = NULL;
$arguments381['languageKey'] = NULL;
$arguments381['alternativeLanguageKeys'] = NULL;
$arguments381['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.more';

$output380 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext)]);

$output380 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments383 = array();
$arguments383['identifier'] = NULL;
$arguments383['size'] = 'small';
$arguments383['overlay'] = NULL;
$arguments383['state'] = 'default';
$arguments383['alternativeMarkupIdentifier'] = NULL;
$arguments383['identifier'] = 'actions-search';

$output380 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output380 .= '
								';
return $output380;
};
$arguments376 = array();
$arguments376['additionalAttributes'] = NULL;
$arguments376['data'] = NULL;
$arguments376['route'] = NULL;
$arguments376['parameters'] = array (
);
$arguments376['referenceType'] = 'absolute';
$arguments376['name'] = NULL;
$arguments376['rel'] = NULL;
$arguments376['rev'] = NULL;
$arguments376['target'] = NULL;
$arguments376['class'] = NULL;
$arguments376['dir'] = NULL;
$arguments376['id'] = NULL;
$arguments376['lang'] = NULL;
$arguments376['style'] = NULL;
$arguments376['title'] = NULL;
$arguments376['accesskey'] = NULL;
$arguments376['tabindex'] = NULL;
$arguments376['onclick'] = NULL;
$arguments376['route'] = 'web_PowermailM1';
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['id'] = $renderingContext->getVariableProvider()->getByPath('mail.pid', $array379);
$arguments376['parameters'] = $array378;

$output375 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output375 .= '
							</td>
						</tr>
					';
return $output375;
};
$arguments370 = array();
$arguments370['then'] = NULL;
$arguments370['else'] = NULL;
$arguments370['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array372 = array();
$array373 = array (
);$array372['0'] = $renderingContext->getVariableProvider()->getByPath('index.isLast', $array373);

$expression374 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments370['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression374(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array372)
					),
					$renderingContext
				);
$arguments370['__thenClosure'] = $renderChildrenClosure371;

$output356 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output356 .= '
				';
return $output356;
};
$arguments353 = array();
$arguments353['each'] = NULL;
$arguments353['as'] = NULL;
$arguments353['key'] = NULL;
$arguments353['reverse'] = false;
$arguments353['iteration'] = NULL;
$array355 = array (
);$arguments353['each'] = $renderingContext->getVariableProvider()->getByPath('mails', $array355);
$arguments353['as'] = 'mail';
$arguments353['iteration'] = 'index';

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output350 .= '
			</table>
		';
return $output350;
};
$arguments345 = array();
$arguments345['then'] = NULL;
$arguments345['else'] = NULL;
$arguments345['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array347 = array();
$array348 = array (
);$array347['0'] = $renderingContext->getVariableProvider()->getByPath('mails', $array348);

$expression349 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments345['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array347)
					),
					$renderingContext
				);
$arguments345['__thenClosure'] = $renderChildrenClosure346;

$output344 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);

$output344 .= '
	';
return $output344;
};
$arguments339 = array();
$arguments339['then'] = NULL;
$arguments339['else'] = NULL;
$arguments339['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array341 = array();
$array342 = array (
);$array341['0'] = $renderingContext->getVariableProvider()->getByPath('enableMailPreview', $array342);

$expression343 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments339['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression343(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array341)
					),
					$renderingContext
				);
$arguments339['__thenClosure'] = $renderChildrenClosure340;

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output228 .= '
';
return $output228;
};
$arguments226 = array();
$arguments226['name'] = NULL;
$arguments226['name'] = 'Pi1';

$output174 .= NULL;

$output174 .= '




';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return '
	Information for Plugin 2
';
};
$arguments385 = array();

$output174 .= NULL;

$output174 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return 'Show and manage mails in Frontend';
};
$arguments390 = array();
$arguments390['key'] = NULL;
$arguments390['id'] = NULL;
$arguments390['default'] = NULL;
$arguments390['arguments'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['languageKey'] = NULL;
$arguments390['alternativeLanguageKeys'] = NULL;
$arguments390['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:BackendPluginInformationTitlePi2';

$output389 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext)]);

$output389 .= '</h3>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
$output397 = '';

$output397 .= '
		<p>
			<strong>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
return 'form';
};
$arguments398 = array();
$arguments398['key'] = NULL;
$arguments398['id'] = NULL;
$arguments398['default'] = NULL;
$arguments398['arguments'] = NULL;
$arguments398['extensionName'] = NULL;
$arguments398['languageKey'] = NULL;
$arguments398['alternativeLanguageKeys'] = NULL;
$arguments398['key'] = 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pluginInfo.form';

$output397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext)]);

$output397 .= ':
			</strong>
			<a href="';
// Rendering ViewHelper In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments400 = array();
$arguments400['table'] = NULL;
$arguments400['identifier'] = NULL;
$arguments400['table'] = 'form';
$array402 = array (
);$arguments400['identifier'] = $renderingContext->getVariableProvider()->getByPath('flexFormData.settings.flexform.main.form', $array402);

$output397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [In2code\Powermail\ViewHelpers\Be\EditLinkViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext)]);

$output397 .= '">
				';
$array403 = array (
);
$output397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form', $array403)]);

$output397 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['identifier'] = NULL;
$arguments404['size'] = 'small';
$arguments404['overlay'] = NULL;
$arguments404['state'] = 'default';
$arguments404['alternativeMarkupIdentifier'] = NULL;
$arguments404['identifier'] = 'actions-open';

$output397 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output397 .= '
			</a>
		</p>
	';
return $output397;
};
$arguments392 = array();
$arguments392['then'] = NULL;
$arguments392['else'] = NULL;
$arguments392['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array394 = array();
$array395 = array (
);$array394['0'] = $renderingContext->getVariableProvider()->getByPath('form', $array395);

$expression396 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments392['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression396(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array394)
					),
					$renderingContext
				);
$arguments392['__thenClosure'] = $renderChildrenClosure393;

$output389 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext);

$output389 .= '
';
return $output389;
};
$arguments387 = array();
$arguments387['name'] = NULL;
$arguments387['name'] = 'Pi2';

$output174 .= NULL;

$output174 .= '
';

return $output174;
}


}
#