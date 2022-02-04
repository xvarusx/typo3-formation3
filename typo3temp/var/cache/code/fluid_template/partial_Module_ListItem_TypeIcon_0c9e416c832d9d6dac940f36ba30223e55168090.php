<?php

class partial_Module_ListItem_TypeIcon_0c9e416c832d9d6dac940f36ba30223e55168090 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="typeicon">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['alt'] = NULL;
$arguments18['ismap'] = NULL;
$arguments18['longdesc'] = NULL;
$arguments18['usemap'] = NULL;
$arguments18['loading'] = NULL;
$arguments18['src'] = '';
$arguments18['treatIdAsReference'] = false;
$arguments18['image'] = NULL;
$arguments18['crop'] = NULL;
$arguments18['cropVariant'] = 'default';
$arguments18['fileExtension'] = NULL;
$arguments18['width'] = NULL;
$arguments18['height'] = NULL;
$arguments18['minWidth'] = NULL;
$arguments18['minHeight'] = NULL;
$arguments18['maxWidth'] = NULL;
$arguments18['maxHeight'] = NULL;
$arguments18['absolute'] = false;
$array20 = array (
);$arguments18['src'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIconPath', $array20);
$arguments18['width'] = '32c';
$arguments18['height'] = 32;

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
		';
return $output17;
};
$arguments15 = array();

$output14 .= '';

$output14 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['identifier'] = NULL;
$arguments24['size'] = 'small';
$arguments24['overlay'] = NULL;
$arguments24['state'] = 'default';
$arguments24['alternativeMarkupIdentifier'] = NULL;
$array26 = array (
);$arguments24['identifier'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIcon', $array26);
$arguments24['size'] = 'default';

$output23 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
		';
return $output23;
};
$arguments21 = array();
$arguments21['if'] = NULL;

$output14 .= '';

$output14 .= '
	';
return $output14;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['0'] = $renderingContext->getVariableProvider()->getByPath('dce.wizardIcon', $array12);
$array11['1'] = ' == \'custom\'';

$expression13 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'custom');};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['alt'] = NULL;
$arguments4['ismap'] = NULL;
$arguments4['longdesc'] = NULL;
$arguments4['usemap'] = NULL;
$arguments4['loading'] = NULL;
$arguments4['src'] = '';
$arguments4['treatIdAsReference'] = false;
$arguments4['image'] = NULL;
$arguments4['crop'] = NULL;
$arguments4['cropVariant'] = 'default';
$arguments4['fileExtension'] = NULL;
$arguments4['width'] = NULL;
$arguments4['height'] = NULL;
$arguments4['minWidth'] = NULL;
$arguments4['minHeight'] = NULL;
$arguments4['maxWidth'] = NULL;
$arguments4['maxHeight'] = NULL;
$arguments4['absolute'] = false;
$array6 = array (
);$arguments4['src'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIconPath', $array6);
$arguments4['width'] = '32c';
$arguments4['height'] = 32;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['identifier'] = NULL;
$arguments8['size'] = 'small';
$arguments8['overlay'] = NULL;
$arguments8['state'] = 'default';
$arguments8['alternativeMarkupIdentifier'] = NULL;
$array10 = array (
);$arguments8['identifier'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIcon', $array10);
$arguments8['size'] = 'default';

$output7 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
		';
return $output7;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>
';

return $output0;
}


}
#