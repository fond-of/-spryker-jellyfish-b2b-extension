<?php

namespace FondOfSpryker\Zed\JellyfishB2BExtension\Dependency\Plugin;

use Generated\Shared\Transfer\EventEntityTransfer;
use Generated\Shared\Transfer\JellyfishEventEntityTransfer;

interface EventEntityTransferExportValidatorPluginInterface
{
    /**
     * Specification:
     * - Validates if the event is allowed to be exported
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\EventEntityTransfer $eventEntityTransfer
     * @return bool
     */
    public function validate(EventEntityTransfer $eventEntityTransfer): bool;
}
