<?php
declare(strict_types=1);

/*
 * This file is part of the composer package buepro/typo3-pvh.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Buepro\Pvh\ViewHelpers\Iterator;

use Buepro\Pvh\Utility\IteratorUtility;
use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Copied from EXT:vhs
 *
 * Merges arrays/Traversables $a and $b into an array.
 */
class MergeViewHelper extends AbstractViewHelper
{

    /**
     * @var bool
     */
    protected $escapeChildren = false;

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument(
            'a',
            'mixed',
            'First array/Traversable - if not set, the ViewHelper can be in a chain (inline-notation)'
        );
        $this->registerArgument('b', 'mixed', 'Second array or Traversable');
        $this->registerArgument(
            'useKeys',
            'boolean',
            'If TRUE comparison is done while also observing and merging the keys used in each array',
            false,
            false
        );
        $this->registerArgument(
            'as',
            'string',
            'Template variable name to assign; if not specified the ViewHelper returns the variable instead.'
        );
    }

    /**
     * @return array|mixed|string
     */
    public static function renderStatic(// @phpstan-ignore-line
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $a = IteratorUtility::arrayFromArrayOrTraversableOrCSV($arguments['a'] ?? $renderChildrenClosure(), $arguments['useKeys']);
        $b = IteratorUtility::arrayFromArrayOrTraversableOrCSV($arguments['b'], $arguments['useKeys']);
        ArrayUtility::mergeRecursiveWithOverrule($a, $b);
        if ($arguments['as']) {
            $variableProvider = $renderingContext->getVariableProvider();
            $variableProvider->add($arguments['as'], $a);
            return '';
        }
        return $a;
    }
}
