<?php

class BuilderModule_action_domainmodelling_53c02d6a735dc4b836afc7214bb37b81f24d60c8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'eb' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
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
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';

return $output0;
}
/**
 * section iconButtons
 */
public function section_cfe02ef001375ab02a741661b53c8aacfcbfd7a0(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
';
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
	<div id="domainModelEditor" class="yui-skin-sam">
		<div id="left">
			<div id="propertiesForm"></div>
		</div>
		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>
		<div id="bottom"></div>
		<div id="helpPanel"></div>
	</div>
	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.baseUrl + \'Resources/Public/jsDomainModeling/wireit/lib/inputex/images/space.gif\';

		YAHOO.util.Event.onDOMReady(function() {
			var editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
			const initialWarnings = ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$array8 = array (
);return $renderingContext->getVariableProvider()->getByPath('initialWarnings', $array8);
};
$arguments6 = array();
$arguments6['value'] = NULL;
$arguments6['forceObject'] = false;
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output3 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output3 .= ';
			if (initialWarnings.length > 0) {
				editor.alert(\'Warning\', initialWarnings.join(\'<br />\'));
			}
		});
	</script>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output9 = '';

$output9 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['name'] = NULL;
$arguments10['name'] = 'Default';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output9 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output14 .= '
';
return $output14;
};
$arguments12 = array();
$arguments12['name'] = NULL;
$arguments12['name'] = 'header';

$output9 .= NULL;

$output9 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return '
';
};
$arguments17 = array();
$arguments17['name'] = NULL;
$arguments17['name'] = 'iconButtons';

$output9 .= NULL;

$output9 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
	<div id="domainModelEditor" class="yui-skin-sam">
		<div id="left">
			<div id="propertiesForm"></div>
		</div>
		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>
		<div id="bottom"></div>
		<div id="helpPanel"></div>
	</div>
	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.baseUrl + \'Resources/Public/jsDomainModeling/wireit/lib/inputex/images/space.gif\';

		YAHOO.util.Event.onDOMReady(function() {
			var editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
			const initialWarnings = ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$array26 = array (
);return $renderingContext->getVariableProvider()->getByPath('initialWarnings', $array26);
};
$arguments24 = array();
$arguments24['value'] = NULL;
$arguments24['forceObject'] = false;
$renderChildrenClosure25 = ($arguments24['value'] !== null) ? function() use ($arguments24) { return $arguments24['value']; } : $renderChildrenClosure25;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
};
$arguments22 = array();
$arguments22['value'] = NULL;

$output21 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output21 .= ';
			if (initialWarnings.length > 0) {
				editor.alert(\'Warning\', initialWarnings.join(\'<br />\'));
			}
		});
	</script>
';
return $output21;
};
$arguments19 = array();
$arguments19['name'] = NULL;
$arguments19['name'] = 'content';

$output9 .= NULL;

$output9 .= '

';

return $output9;
}


}
#