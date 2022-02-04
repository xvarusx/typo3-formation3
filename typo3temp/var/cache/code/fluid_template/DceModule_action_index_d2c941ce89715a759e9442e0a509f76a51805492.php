<?php

class DceModule_action_index_d2c941ce89715a759e9442e0a509f76a51805492 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Backend';
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
 * section header
 */
public function section_594fd1615a341c77829e83ed988f137e1ba96231(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper T3\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['path'] = NULL;
$arguments1['path'] = 'EXT:dce/Resources/Public/Css/dceModule.css';

$output0 .= T3\Dce\ViewHelpers\Be\IncludeCssFileViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

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
$arguments3['partial'] = 'Module/ModuleHeader';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output5 = '';

$output5 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
		<div class="row space-bottom">
			<div class="col-lg-12">
				<div class="nav-group">
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
$arguments12['partial'] = 'Module/NewDceLink';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
};
$arguments10 = array();
$arguments10['subject'] = NULL;

$output9 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '" class="btn btn-primary"><i class="fa fa-plus-circle"></i>  ';
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
$output16 = '';
$array17 = array (
);
$output16 .= $renderingContext->getVariableProvider()->getByPath('lll', $array17);

$output16 .= 'createNewDce';
$arguments14['key'] = $output16;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output9 .= '</a>
					<a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['partial'] = 'Module/ListViewLink';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);
};
$arguments18 = array();
$arguments18['subject'] = NULL;

$output9 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output9 .= '" class="btn btn-default">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['identifier'] = NULL;
$arguments22['size'] = 'small';
$arguments22['overlay'] = NULL;
$arguments22['state'] = 'default';
$arguments22['alternativeMarkupIdentifier'] = NULL;
$arguments22['identifier'] = 'actions-system-list-open';

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output9 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['key'] = NULL;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['languageKey'] = NULL;
$arguments24['alternativeLanguageKeys'] = NULL;
$output26 = '';
$array27 = array (
);
$output26 .= $renderingContext->getVariableProvider()->getByPath('lll', $array27);

$output26 .= 'goToListView';
$arguments24['key'] = $output26;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output9 .= '</a>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['identifier'] = NULL;
$arguments31['size'] = 'small';
$arguments31['overlay'] = NULL;
$arguments31['state'] = 'default';
$arguments31['alternativeMarkupIdentifier'] = NULL;
$arguments31['identifier'] = 'actions-system-cache-clear-impact-high';

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['languageKey'] = NULL;
$arguments33['alternativeLanguageKeys'] = NULL;
$output35 = '';
$array36 = array (
);
$output35 .= $renderingContext->getVariableProvider()->getByPath('lll', $array36);

$output35 .= 'clearCaches';
$arguments33['key'] = $output35;

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);
return $output30;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['name'] = NULL;
$arguments28['rel'] = NULL;
$arguments28['rev'] = NULL;
$arguments28['target'] = NULL;
$arguments28['action'] = NULL;
$arguments28['controller'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['pluginName'] = NULL;
$arguments28['pageUid'] = NULL;
$arguments28['pageType'] = NULL;
$arguments28['noCache'] = NULL;
$arguments28['noCacheHash'] = NULL;
$arguments28['section'] = NULL;
$arguments28['format'] = NULL;
$arguments28['linkAccessRestrictedPages'] = NULL;
$arguments28['additionalParams'] = NULL;
$arguments28['absolute'] = NULL;
$arguments28['addQueryString'] = NULL;
$arguments28['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments28['addQueryStringMethod'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['action'] = 'clearCaches';
$arguments28['class'] = 'btn btn-default';

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output9 .= '
				</div>

				<div class="nav-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '<i class="fa fa-trophy"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$output42 = '';
$array43 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('lll', $array43);

$output42 .= 'hallOfFame';
$arguments40['key'] = $output42;

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);
return $output39;
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
$arguments37['action'] = 'hallOfFame';
$arguments37['class'] = 'btn btn-default';

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output9 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['section'] = NULL;
$arguments44['partial'] = NULL;
$arguments44['delegate'] = NULL;
$arguments44['renderable'] = NULL;
$arguments44['arguments'] = array (
);
$arguments44['optional'] = false;
$arguments44['default'] = NULL;
$arguments44['contentAs'] = NULL;
$arguments44['debug'] = true;
$arguments44['partial'] = 'Module/Donate';
// Rendering Array
$array46 = array();
$array46['primary'] = 1;
$arguments44['arguments'] = $array46;

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output9 .= '
				</div>

				<div class="nav-group">
					<div class="dropdown btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" id="dropdownMenuHelp" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['identifier'] = NULL;
$arguments47['size'] = 'small';
$arguments47['overlay'] = NULL;
$arguments47['state'] = 'default';
$arguments47['alternativeMarkupIdentifier'] = NULL;
$arguments47['identifier'] = 'actions-system-help-open';

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output9 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$output51 = '';
$array52 = array (
);
$output51 .= $renderingContext->getVariableProvider()->getByPath('lll', $array52);

$output51 .= 'help';
$arguments49['key'] = $output51;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output9 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return '<span class="caret"></span>';
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
// Rendering ViewHelper T3\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['returnInt'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array58['0'] = 1;

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['returnInt'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$array55['0'] = T3\Dce\ViewHelpers\Be\Version\Typo3ViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);
$array55['1'] = ' < 10000000';

$expression60 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 10000000);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = $renderChildrenClosure54;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output9 .= '
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuHelp">
							<li><a class="dropdown-item" target="_blank" href="https://docs.typo3.org/typo3cms/extensions/dce/">';
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
$output63 = '';
$array64 = array (
);
$output63 .= $renderingContext->getVariableProvider()->getByPath('lll', $array64);

$output63 .= 'help.manual';
$arguments61['key'] = $output63;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output9 .= '</a></li>
							<li><a class="dropdown-item" target="_blank" href="https://forge.typo3.org/projects/extension-dce/wiki/">';
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
$output67 = '';
$array68 = array (
);
$output67 .= $renderingContext->getVariableProvider()->getByPath('lll', $array68);

$output67 .= 'help.wiki';
$arguments65['key'] = $output67;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output9 .= '</a></li>
							<li class="dropdown-divider divider"></li>
							<li><a class="dropdown-item" target="_blank" href="https://www.facebook.com/TYPO3.DCE.Extension">';
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
$output71 = '';
$array72 = array (
);
$output71 .= $renderingContext->getVariableProvider()->getByPath('lll', $array72);

$output71 .= 'help.facebook';
$arguments69['key'] = $output71;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output9 .= '</a></li>
							<li><a class="dropdown-item" target="_blank" href="https://bitbucket.org/ArminVieweg/dce/">';
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
$output75 = '';
$array76 = array (
);
$output75 .= $renderingContext->getVariableProvider()->getByPath('lll', $array76);

$output75 .= 'help.bitbucket';
$arguments73['key'] = $output75;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output9 .= '</a></li>
							<li class="dropdown-divider divider"></li>
							<li><a class="dropdown-item" target="_blank" href="https://v.ieweg.de">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$output79 = '';
$array80 = array (
);
$output79 .= $renderingContext->getVariableProvider()->getByPath('lll', $array80);

$output79 .= 'help.authorWebsite';
$arguments77['key'] = $output79;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output9 .= '</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row space-bottom">
			<div class="col-lg-10">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['queueIdentifier'] = NULL;
$arguments81['as'] = NULL;

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output9 .= '
				<table class="table table-striped">
					<thead>
						<tr>
							<th>DCEs</th>
							<th>Status</th>
							<th>Identifier</th>
							<th>UID</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['key'] = NULL;
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['languageKey'] = NULL;
$arguments83['alternativeLanguageKeys'] = NULL;
$output85 = '';
$array86 = array (
);
$output85 .= $renderingContext->getVariableProvider()->getByPath('lll', $array86);

$output85 .= 'usage';
$arguments83['key'] = $output85;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output9 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['languageKey'] = NULL;
$arguments87['alternativeLanguageKeys'] = NULL;
$output89 = '';
$array90 = array (
);
$output89 .= $renderingContext->getVariableProvider()->getByPath('lll', $array90);

$output89 .= 'dceStats';
$arguments87['key'] = $output89;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output9 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['key'] = NULL;
$arguments91['id'] = NULL;
$arguments91['default'] = NULL;
$arguments91['arguments'] = NULL;
$arguments91['extensionName'] = NULL;
$arguments91['languageKey'] = NULL;
$arguments91['alternativeLanguageKeys'] = NULL;
$output93 = '';
$array94 = array (
);
$output93 .= $renderingContext->getVariableProvider()->getByPath('lll', $array94);

$output93 .= 'fieldStats';
$arguments91['key'] = $output93;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output9 .= '</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['section'] = NULL;
$arguments124['partial'] = NULL;
$arguments124['delegate'] = NULL;
$arguments124['renderable'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['optional'] = false;
$arguments124['default'] = NULL;
$arguments124['contentAs'] = NULL;
$arguments124['debug'] = true;
$arguments124['partial'] = 'Module/DceListItem';
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array127);
$arguments124['arguments'] = $array126;

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
								';
return $output123;
};
$arguments120 = array();
$arguments120['each'] = NULL;
$arguments120['as'] = NULL;
$arguments120['key'] = NULL;
$arguments120['reverse'] = false;
$arguments120['iteration'] = NULL;
$array122 = array (
);$arguments120['each'] = $renderingContext->getVariableProvider()->getByPath('dces', $array122);
$arguments120['as'] = 'dce';

$output119 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
							';
return $output119;
};
$arguments117 = array();

$output116 .= '';

$output116 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
								<tr><td colspan="8"><em>';
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
$output133 = '';
$array134 = array (
);
$output133 .= $renderingContext->getVariableProvider()->getByPath('lll', $array134);

$output133 .= 'noDcesFound';
$arguments131['key'] = $output133;

$output130 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output130 .= '</em></td></tr>
							';
return $output130;
};
$arguments128 = array();
$arguments128['if'] = NULL;

$output116 .= '';

$output116 .= '
						';
return $output116;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$array114 = array (
);return $renderingContext->getVariableProvider()->getByPath('dces', $array114);
};
$arguments112 = array();
$arguments112['subject'] = NULL;
$renderChildrenClosure113 = ($arguments112['subject'] !== null) ? function() use ($arguments112) { return $arguments112['subject']; } : $renderChildrenClosure113;$array111['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);
$array111['1'] = ' > 0';

$expression115 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['section'] = NULL;
$arguments102['partial'] = NULL;
$arguments102['delegate'] = NULL;
$arguments102['renderable'] = NULL;
$arguments102['arguments'] = array (
);
$arguments102['optional'] = false;
$arguments102['default'] = NULL;
$arguments102['contentAs'] = NULL;
$arguments102['debug'] = true;
$arguments102['partial'] = 'Module/DceListItem';
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array105);
$arguments102['arguments'] = $array104;

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
								';
return $output101;
};
$arguments98 = array();
$arguments98['each'] = NULL;
$arguments98['as'] = NULL;
$arguments98['key'] = NULL;
$arguments98['reverse'] = false;
$arguments98['iteration'] = NULL;
$array100 = array (
);$arguments98['each'] = $renderingContext->getVariableProvider()->getByPath('dces', $array100);
$arguments98['as'] = 'dce';

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
							';
return $output97;
};
$arguments95['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
								<tr><td colspan="8"><em>';
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

$output109 .= 'noDcesFound';
$arguments107['key'] = $output109;

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output106 .= '</em></td></tr>
							';
return $output106;
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output9 .= '
					</tbody>
				</table>
			</div>
		</div>
	';
return $output9;
};
$arguments6 = array();
$arguments6['map'] = NULL;
// Rendering Array
$array8 = array();
$array8['lll'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xlf:';
$arguments6['map'] = $array8;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
';

return $output5;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output135 = '';

$output135 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['name'] = NULL;
$arguments136['name'] = 'Backend';

$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output135 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
	';
// Rendering ViewHelper T3\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['path'] = NULL;
$arguments141['path'] = 'EXT:dce/Resources/Public/Css/dceModule.css';

$output140 .= T3\Dce\ViewHelpers\Be\IncludeCssFileViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['section'] = NULL;
$arguments143['partial'] = NULL;
$arguments143['delegate'] = NULL;
$arguments143['renderable'] = NULL;
$arguments143['arguments'] = array (
);
$arguments143['optional'] = false;
$arguments143['default'] = NULL;
$arguments143['contentAs'] = NULL;
$arguments143['debug'] = true;
$arguments143['partial'] = 'Module/ModuleHeader';

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output140 .= '
';
return $output140;
};
$arguments138 = array();
$arguments138['name'] = NULL;
$arguments138['name'] = 'header';

$output135 .= NULL;

$output135 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
		<div class="row space-bottom">
			<div class="col-lg-12">
				<div class="nav-group">
					<a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['section'] = NULL;
$arguments154['partial'] = NULL;
$arguments154['delegate'] = NULL;
$arguments154['renderable'] = NULL;
$arguments154['arguments'] = array (
);
$arguments154['optional'] = false;
$arguments154['default'] = NULL;
$arguments154['contentAs'] = NULL;
$arguments154['debug'] = true;
$arguments154['partial'] = 'Module/NewDceLink';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
};
$arguments152 = array();
$arguments152['subject'] = NULL;

$output151 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output151 .= '" class="btn btn-primary"><i class="fa fa-plus-circle"></i>  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['key'] = NULL;
$arguments156['id'] = NULL;
$arguments156['default'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['languageKey'] = NULL;
$arguments156['alternativeLanguageKeys'] = NULL;
$output158 = '';
$array159 = array (
);
$output158 .= $renderingContext->getVariableProvider()->getByPath('lll', $array159);

$output158 .= 'createNewDce';
$arguments156['key'] = $output158;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output151 .= '</a>
					<a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['section'] = NULL;
$arguments162['partial'] = NULL;
$arguments162['delegate'] = NULL;
$arguments162['renderable'] = NULL;
$arguments162['arguments'] = array (
);
$arguments162['optional'] = false;
$arguments162['default'] = NULL;
$arguments162['contentAs'] = NULL;
$arguments162['debug'] = true;
$arguments162['partial'] = 'Module/ListViewLink';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);
};
$arguments160 = array();
$arguments160['subject'] = NULL;

$output151 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output151 .= '" class="btn btn-default">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['identifier'] = NULL;
$arguments164['size'] = 'small';
$arguments164['overlay'] = NULL;
$arguments164['state'] = 'default';
$arguments164['alternativeMarkupIdentifier'] = NULL;
$arguments164['identifier'] = 'actions-system-list-open';

$output151 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output151 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['key'] = NULL;
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$arguments166['languageKey'] = NULL;
$arguments166['alternativeLanguageKeys'] = NULL;
$output168 = '';
$array169 = array (
);
$output168 .= $renderingContext->getVariableProvider()->getByPath('lll', $array169);

$output168 .= 'goToListView';
$arguments166['key'] = $output168;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);

$output151 .= '</a>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['identifier'] = NULL;
$arguments173['size'] = 'small';
$arguments173['overlay'] = NULL;
$arguments173['state'] = 'default';
$arguments173['alternativeMarkupIdentifier'] = NULL;
$arguments173['identifier'] = 'actions-system-cache-clear-impact-high';

$output172 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output172 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['key'] = NULL;
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['languageKey'] = NULL;
$arguments175['alternativeLanguageKeys'] = NULL;
$output177 = '';
$array178 = array (
);
$output177 .= $renderingContext->getVariableProvider()->getByPath('lll', $array178);

$output177 .= 'clearCaches';
$arguments175['key'] = $output177;

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext)]);
return $output172;
};
$arguments170 = array();
$arguments170['additionalAttributes'] = NULL;
$arguments170['data'] = NULL;
$arguments170['class'] = NULL;
$arguments170['dir'] = NULL;
$arguments170['id'] = NULL;
$arguments170['lang'] = NULL;
$arguments170['style'] = NULL;
$arguments170['title'] = NULL;
$arguments170['accesskey'] = NULL;
$arguments170['tabindex'] = NULL;
$arguments170['onclick'] = NULL;
$arguments170['name'] = NULL;
$arguments170['rel'] = NULL;
$arguments170['rev'] = NULL;
$arguments170['target'] = NULL;
$arguments170['action'] = NULL;
$arguments170['controller'] = NULL;
$arguments170['extensionName'] = NULL;
$arguments170['pluginName'] = NULL;
$arguments170['pageUid'] = NULL;
$arguments170['pageType'] = NULL;
$arguments170['noCache'] = NULL;
$arguments170['noCacheHash'] = NULL;
$arguments170['section'] = NULL;
$arguments170['format'] = NULL;
$arguments170['linkAccessRestrictedPages'] = NULL;
$arguments170['additionalParams'] = NULL;
$arguments170['absolute'] = NULL;
$arguments170['addQueryString'] = NULL;
$arguments170['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments170['addQueryStringMethod'] = NULL;
$arguments170['arguments'] = NULL;
$arguments170['action'] = 'clearCaches';
$arguments170['class'] = 'btn btn-default';

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output151 .= '
				</div>

				<div class="nav-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '<i class="fa fa-trophy"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$output184 = '';
$array185 = array (
);
$output184 .= $renderingContext->getVariableProvider()->getByPath('lll', $array185);

$output184 .= 'hallOfFame';
$arguments182['key'] = $output184;

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);
return $output181;
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['name'] = NULL;
$arguments179['rel'] = NULL;
$arguments179['rev'] = NULL;
$arguments179['target'] = NULL;
$arguments179['action'] = NULL;
$arguments179['controller'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['pluginName'] = NULL;
$arguments179['pageUid'] = NULL;
$arguments179['pageType'] = NULL;
$arguments179['noCache'] = NULL;
$arguments179['noCacheHash'] = NULL;
$arguments179['section'] = NULL;
$arguments179['format'] = NULL;
$arguments179['linkAccessRestrictedPages'] = NULL;
$arguments179['additionalParams'] = NULL;
$arguments179['absolute'] = NULL;
$arguments179['addQueryString'] = NULL;
$arguments179['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments179['addQueryStringMethod'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['action'] = 'hallOfFame';
$arguments179['class'] = 'btn btn-default';

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output151 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['section'] = NULL;
$arguments186['partial'] = NULL;
$arguments186['delegate'] = NULL;
$arguments186['renderable'] = NULL;
$arguments186['arguments'] = array (
);
$arguments186['optional'] = false;
$arguments186['default'] = NULL;
$arguments186['contentAs'] = NULL;
$arguments186['debug'] = true;
$arguments186['partial'] = 'Module/Donate';
// Rendering Array
$array188 = array();
$array188['primary'] = 1;
$arguments186['arguments'] = $array188;

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output151 .= '
				</div>

				<div class="nav-group">
					<div class="dropdown btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" id="dropdownMenuHelp" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['identifier'] = NULL;
$arguments189['size'] = 'small';
$arguments189['overlay'] = NULL;
$arguments189['state'] = 'default';
$arguments189['alternativeMarkupIdentifier'] = NULL;
$arguments189['identifier'] = 'actions-system-help-open';

$output151 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output151 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['languageKey'] = NULL;
$arguments191['alternativeLanguageKeys'] = NULL;
$output193 = '';
$array194 = array (
);
$output193 .= $renderingContext->getVariableProvider()->getByPath('lll', $array194);

$output193 .= 'help';
$arguments191['key'] = $output193;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext)]);

$output151 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return '<span class="caret"></span>';
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array197 = array();
// Rendering ViewHelper T3\Dce\ViewHelpers\Be\Version\Typo3ViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['returnInt'] = false;
// Rendering Boolean node
// Rendering Array
$array200 = array();
$array200['0'] = 1;

$expression201 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments198['returnInt'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array200)
					),
					$renderingContext
				);
$array197['0'] = T3\Dce\ViewHelpers\Be\Version\Typo3ViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);
$array197['1'] = ' < 10000000';

$expression202 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 10000000);};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
$arguments195['__thenClosure'] = $renderChildrenClosure196;

$output151 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output151 .= '
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuHelp">
							<li><a class="dropdown-item" target="_blank" href="https://docs.typo3.org/typo3cms/extensions/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['key'] = NULL;
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['languageKey'] = NULL;
$arguments203['alternativeLanguageKeys'] = NULL;
$output205 = '';
$array206 = array (
);
$output205 .= $renderingContext->getVariableProvider()->getByPath('lll', $array206);

$output205 .= 'help.manual';
$arguments203['key'] = $output205;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext)]);

$output151 .= '</a></li>
							<li><a class="dropdown-item" target="_blank" href="https://forge.typo3.org/projects/extension-dce/wiki/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['key'] = NULL;
$arguments207['id'] = NULL;
$arguments207['default'] = NULL;
$arguments207['arguments'] = NULL;
$arguments207['extensionName'] = NULL;
$arguments207['languageKey'] = NULL;
$arguments207['alternativeLanguageKeys'] = NULL;
$output209 = '';
$array210 = array (
);
$output209 .= $renderingContext->getVariableProvider()->getByPath('lll', $array210);

$output209 .= 'help.wiki';
$arguments207['key'] = $output209;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output151 .= '</a></li>
							<li class="dropdown-divider divider"></li>
							<li><a class="dropdown-item" target="_blank" href="https://www.facebook.com/TYPO3.DCE.Extension">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['key'] = NULL;
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$arguments211['languageKey'] = NULL;
$arguments211['alternativeLanguageKeys'] = NULL;
$output213 = '';
$array214 = array (
);
$output213 .= $renderingContext->getVariableProvider()->getByPath('lll', $array214);

$output213 .= 'help.facebook';
$arguments211['key'] = $output213;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext)]);

$output151 .= '</a></li>
							<li><a class="dropdown-item" target="_blank" href="https://bitbucket.org/ArminVieweg/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['key'] = NULL;
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['languageKey'] = NULL;
$arguments215['alternativeLanguageKeys'] = NULL;
$output217 = '';
$array218 = array (
);
$output217 .= $renderingContext->getVariableProvider()->getByPath('lll', $array218);

$output217 .= 'help.bitbucket';
$arguments215['key'] = $output217;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output151 .= '</a></li>
							<li class="dropdown-divider divider"></li>
							<li><a class="dropdown-item" target="_blank" href="https://v.ieweg.de">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['key'] = NULL;
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$arguments219['languageKey'] = NULL;
$arguments219['alternativeLanguageKeys'] = NULL;
$output221 = '';
$array222 = array (
);
$output221 .= $renderingContext->getVariableProvider()->getByPath('lll', $array222);

$output221 .= 'help.authorWebsite';
$arguments219['key'] = $output221;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output151 .= '</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row space-bottom">
			<div class="col-lg-10">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['queueIdentifier'] = NULL;
$arguments223['as'] = NULL;

$output151 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output151 .= '
				<table class="table table-striped">
					<thead>
						<tr>
							<th>DCEs</th>
							<th>Status</th>
							<th>Identifier</th>
							<th>UID</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['key'] = NULL;
$arguments225['id'] = NULL;
$arguments225['default'] = NULL;
$arguments225['arguments'] = NULL;
$arguments225['extensionName'] = NULL;
$arguments225['languageKey'] = NULL;
$arguments225['alternativeLanguageKeys'] = NULL;
$output227 = '';
$array228 = array (
);
$output227 .= $renderingContext->getVariableProvider()->getByPath('lll', $array228);

$output227 .= 'usage';
$arguments225['key'] = $output227;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext)]);

$output151 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['languageKey'] = NULL;
$arguments229['alternativeLanguageKeys'] = NULL;
$output231 = '';
$array232 = array (
);
$output231 .= $renderingContext->getVariableProvider()->getByPath('lll', $array232);

$output231 .= 'dceStats';
$arguments229['key'] = $output231;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output151 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['languageKey'] = NULL;
$arguments233['alternativeLanguageKeys'] = NULL;
$output235 = '';
$array236 = array (
);
$output235 .= $renderingContext->getVariableProvider()->getByPath('lll', $array236);

$output235 .= 'fieldStats';
$arguments233['key'] = $output235;

$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output151 .= '</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['section'] = NULL;
$arguments266['partial'] = NULL;
$arguments266['delegate'] = NULL;
$arguments266['renderable'] = NULL;
$arguments266['arguments'] = array (
);
$arguments266['optional'] = false;
$arguments266['default'] = NULL;
$arguments266['contentAs'] = NULL;
$arguments266['debug'] = true;
$arguments266['partial'] = 'Module/DceListItem';
// Rendering Array
$array268 = array();
$array269 = array (
);$array268['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array269);
$arguments266['arguments'] = $array268;

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '
								';
return $output265;
};
$arguments262 = array();
$arguments262['each'] = NULL;
$arguments262['as'] = NULL;
$arguments262['key'] = NULL;
$arguments262['reverse'] = false;
$arguments262['iteration'] = NULL;
$array264 = array (
);$arguments262['each'] = $renderingContext->getVariableProvider()->getByPath('dces', $array264);
$arguments262['as'] = 'dce';

$output261 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output261 .= '
							';
return $output261;
};
$arguments259 = array();

$output258 .= '';

$output258 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
								<tr><td colspan="8"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['key'] = NULL;
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$arguments273['languageKey'] = NULL;
$arguments273['alternativeLanguageKeys'] = NULL;
$output275 = '';
$array276 = array (
);
$output275 .= $renderingContext->getVariableProvider()->getByPath('lll', $array276);

$output275 .= 'noDcesFound';
$arguments273['key'] = $output275;

$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output272 .= '</em></td></tr>
							';
return $output272;
};
$arguments270 = array();
$arguments270['if'] = NULL;

$output258 .= '';

$output258 .= '
						';
return $output258;
};
$arguments237 = array();
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$arguments237['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array253 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$array256 = array (
);return $renderingContext->getVariableProvider()->getByPath('dces', $array256);
};
$arguments254 = array();
$arguments254['subject'] = NULL;
$renderChildrenClosure255 = ($arguments254['subject'] !== null) ? function() use ($arguments254) { return $arguments254['subject']; } : $renderChildrenClosure255;$array253['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);
$array253['1'] = ' > 0';

$expression257 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments237['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array253)
					),
					$renderingContext
				);
$arguments237['__thenClosure'] = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['section'] = NULL;
$arguments244['partial'] = NULL;
$arguments244['delegate'] = NULL;
$arguments244['renderable'] = NULL;
$arguments244['arguments'] = array (
);
$arguments244['optional'] = false;
$arguments244['default'] = NULL;
$arguments244['contentAs'] = NULL;
$arguments244['debug'] = true;
$arguments244['partial'] = 'Module/DceListItem';
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array247);
$arguments244['arguments'] = $array246;

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
								';
return $output243;
};
$arguments240 = array();
$arguments240['each'] = NULL;
$arguments240['as'] = NULL;
$arguments240['key'] = NULL;
$arguments240['reverse'] = false;
$arguments240['iteration'] = NULL;
$array242 = array (
);$arguments240['each'] = $renderingContext->getVariableProvider()->getByPath('dces', $array242);
$arguments240['as'] = 'dce';

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
							';
return $output239;
};
$arguments237['__elseClosures'][] = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
								<tr><td colspan="8"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['key'] = NULL;
$arguments249['id'] = NULL;
$arguments249['default'] = NULL;
$arguments249['arguments'] = NULL;
$arguments249['extensionName'] = NULL;
$arguments249['languageKey'] = NULL;
$arguments249['alternativeLanguageKeys'] = NULL;
$output251 = '';
$array252 = array (
);
$output251 .= $renderingContext->getVariableProvider()->getByPath('lll', $array252);

$output251 .= 'noDcesFound';
$arguments249['key'] = $output251;

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext)]);

$output248 .= '</em></td></tr>
							';
return $output248;
};

$output151 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output151 .= '
					</tbody>
				</table>
			</div>
		</div>
	';
return $output151;
};
$arguments148 = array();
$arguments148['map'] = NULL;
// Rendering Array
$array150 = array();
$array150['lll'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xlf:';
$arguments148['map'] = $array150;

$output147 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
';
return $output147;
};
$arguments145 = array();
$arguments145['name'] = NULL;
$arguments145['name'] = 'content';

$output135 .= NULL;

$output135 .= '
';

return $output135;
}


}
#