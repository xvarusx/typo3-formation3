<?php

namespace T3\Dce\ViewHelpers\Be;

/*  | This extension is made with love for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2012-2021 Armin Vieweg <armin@v.ieweg.de>
 */
use T3\Dce\Utility\File;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * This view helper adds inline css.
 */
class IncludeCssFileViewHelper extends AbstractViewHelper
{
    /**
     * Plain HTML should be returned, no output escaping allowed.
     *
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * Initialize arguments.
     *
     * @throws \TYPO3Fluid\Fluid\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('path', 'string', 'Path to css file');
    }

    /**
     * @return string
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $absPath = File::get($arguments['path']);
        if ($absPath) {
            $contents = file_get_contents($absPath);

            return '<style>' . $contents . '</style>';
        }

        return '<script type="text/javascript">console.error("File ' . $arguments['path'] . ' not found.")</script>';
    }
}
