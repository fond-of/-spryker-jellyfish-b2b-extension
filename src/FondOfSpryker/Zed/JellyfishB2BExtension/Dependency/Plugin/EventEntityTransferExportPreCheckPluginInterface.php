<?php

namespace FondOfSpryker\Zed\JellyfishB2BExtension\Dependency\Plugin;

use Generated\Shared\Transfer\EventEntityTransfer;

interface EventEntityTransferExportPreCheckPluginInterface
{
    /**
     * Specification:
     * - Executes checks before the process of exporting the event entity transfer object has started.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\EventEntityTransfer $eventEntityTransfer
     * @return bool
     */
    public function check(EventEntityTransfer $eventEntityTransfer): bool;
}
