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

use WBW\Library\HaveIBeenPwned\Model\Request\BreachRequest;
use WBW\Library\HaveIBeenPwned\Model\Response\BreachResponse;

/**
 * Breach event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class BreachEvent extends AbstractHaveIBeenPwnedEvent {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(HaveIBeenPwnedEvents::BREACH, null);
    }

    /**
     * Get the breach request.
     *
     * @return BreachRequest Returns the breach request.
     */
    public function getRequest() {
        return parent::getRequest();
    }

    /**
     * Get the breach response.
     *
     * @return BreachResponse Returns the breach response.
     */
    public function getResponse() {
        return parent::getResponse();
    }
}
