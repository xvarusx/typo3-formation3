/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
var __importDefault=this&&this.__importDefault||function(t){return t&&t.__esModule?t:{default:t}};define(["require","exports","jquery"],(function(t,a,e){"use strict";var n;e=__importDefault(e),function(t){t.CUSTOM="custom"}(n||(n={}));return class{constructor(t){e.default(()=>{this.registerEventHandler(t)})}registerEventHandler(t){e.default(document).on("change",'.t3js-l10n-state-container input[type="radio"][name="'+t+'"]',t=>{const a=e.default(t.currentTarget),r=a.closest(".t3js-formengine-field-item").find("[data-formengine-input-name]");if(0===r.length)return;const l=r.data("last-l10n-state")||!1,i=a.val();l&&i===l||(i===n.CUSTOM?(l&&a.attr("data-original-language-value",r.val()),r.removeAttr("disabled")):(l===n.CUSTOM&&a.closest(".t3js-l10n-state-container").find(".t3js-l10n-state-custom").attr("data-original-language-value",r.val()),r.attr("disabled","disabled")),r.val(a.attr("data-original-language-value")).trigger("change"),r.data("last-l10n-state",a.val()))})}}}));