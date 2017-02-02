<?php
namespace CodeQ\UnicodeNormalizer\TypoScript;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Log\SystemLoggerInterface;
use TYPO3\TypoScript\TypoScriptObjects\AbstractTypoScriptObject;
use TYPO3\Neos\Exception as NeosException;

/**
 * Normalizer
 */
class NormalizerImplementation extends AbstractTypoScriptObject {

	/**
	 * Get value
	 *
	 * @return string
	 */
	public function getValue() {
		return $this->tsValue('value');
	}

	/**
	 * Normalize unicode form.
	 */
	public function evaluate() {
		return \Normalizer::normalize($this->getValue(), \Normalizer::FORM_C);
	}
}
