<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ReCaptchaVersion2Checkbox\Model\OptionSource;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * reCAPTCHA v2 themes
 *
 * Extension point for adding reCAPTCHA themes
 *
 * @api
 */
class Theme implements OptionSourceInterface
{
    /**
     * @var array
     */
    private $options;

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @inheritDoc
     */
    public function toOptionArray(): array
    {
        return array_values($this->options);
    }
}
