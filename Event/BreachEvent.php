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

use WBW\Library\HaveIBeenPwned\Entity\BreachInterface;
use WBW\Library\HaveIBeenPwned\Request\BreachRequest;
use WBW\Library\HaveIBeenPwned\Response\BreachesResponse;

/**
 * Breach event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class BreachEvent extends AbstractEvent {

    /**
     * Event name.
     *
     * @var string
     */
    const EVENT_NAME = "wbw.haveibeenpwned.event.breach";

    /**
     * Constructor.
     *
     * @param BreachInterface $entity The breach.
     */
    public function __construct(BreachInterface $entity) {
        parent::__construct(self::EVENT_NAME, $entity);
    }

    /**
     * Get the breach.
     *
     * @return BreachInterface Returns the breach.
     */
    public function getBreach(): BreachInterface {
        return $this->getEntity();
    }

    /**
     * Get the breach request.
     *
     * @return BreachRequest|null Returns the breach request.
     */
    public function getRequest(): ?BreachRequest {
        return parent::getRequest();
    }

    /**
     * Get the breach response.
     *
     * @return BreachesResponse|null Returns the breaches response.
     */
    public function getResponse(): ?BreachesResponse {
        return parent::getResponse();
    }
}
