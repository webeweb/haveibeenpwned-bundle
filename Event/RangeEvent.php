<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Event;

use WBW\Library\HaveIBeenPwned\Entity\RangeInterface;
use WBW\Library\HaveIBeenPwned\Request\RangeRequest;
use WBW\Library\HaveIBeenPwned\Response\RangesResponse;

/**
 * Range event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class RangeEvent extends AbstractEvent {

    /**
     * Event name.
     *
     * @var string
     */
    const EVENT_NAME = "wbw.haveibeenpwned.event.range";

    /**
     * Constructor.
     *
     * @param RangeInterface $entity The range.
     */
    public function __construct(RangeInterface $entity) {
        parent::__construct(self::EVENT_NAME, $entity);
    }

    /**
     * Get the range.
     *
     * @return RangeInterface Returns the range.
     */
    public function getRange(): RangeInterface {
        return $this->getEntity();
    }

    /**
     * Get the range request.
     *
     * @return RangeRequest|null Returns the range request.
     */
    public function getRequest(): ?RangeRequest {
        return parent::getRequest();
    }

    /**
     * Get the ranges response.
     *
     * @return RangesResponse|null Returns the ranges response.
     */
    public function getResponse(): ?RangesResponse {
        return parent::getResponse();
    }
}
