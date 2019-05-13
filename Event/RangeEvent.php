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

use WBW\Library\HaveIBeenPwned\Model\Request\RangeRequest;
use WBW\Library\HaveIBeenPwned\Model\Response\RangesResponse;

/**
 * Range event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class RangeEvent extends AbstractHaveIBeenPwnedEvent {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(HaveIBeenPwnedEvents::RANGE, null);
    }

    /**
     * Get the range request.
     *
     * @return RangeRequest Returns the range request.
     */
    public function getRequest() {
        return parent::getRequest();
    }

    /**
     * Get the ranges response.
     *
     * @return RangesResponse Returns the ranges response.
     */
    public function getResponse() {
        return parent::getResponse();
    }
}