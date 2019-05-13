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

use WBW\Library\HaveIBeenPwned\Model\Request\BreachedAccountRequest;
use WBW\Library\HaveIBeenPwned\Model\Response\BreachesResponse;

/**
 * Breached account event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class BreachedAccountEvent extends AbstractHaveIBeenPwnedEvent {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(HaveIBeenPwnedEvents::BREACHED_ACCOUNT, null);
    }

    /**
     * Get the breached account request.
     *
     * @return BreachedAccountRequest Returns the breached account request.
     */
    public function getRequest() {
        return parent::getRequest();
    }

    /**
     * Get the breaches response.
     *
     * @return BreachesResponse Returns the breaches response.
     */
    public function getResponse() {
        return parent::getResponse();
    }
}
