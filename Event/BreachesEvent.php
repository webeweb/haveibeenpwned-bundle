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

use WBW\Library\HaveIBeenPwned\Entity\BreachesInterface;
use WBW\Library\HaveIBeenPwned\Request\BreachesRequest;
use WBW\Library\HaveIBeenPwned\Response\BreachesResponse;

/**
 * Breaches event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class BreachesEvent extends AbstractEvent {

    /**
     * Event name.
     *
     * @var string
     */
    const EVENT_NAME = "wbw.haveibeenpwned.event.breaches";

    /**
     * Constructor.
     *
     * @param BreachesInterface $entity The breaches.
     */
    public function __construct(BreachesInterface $entity) {
        parent::__construct(self::EVENT_NAME, $entity);
    }

    /**
     * Get the breaches.
     *
     * @return BreachesInterface Returns the breaches.
     */
    public function getBreaches(): BreachesInterface {
        return $this->getEntity();
    }

    /**
     * Get the breaches request.
     *
     * @return BreachesRequest|null Returns the breaches request.
     */
    public function getRequest(): ?BreachesRequest {
        return parent::getRequest();
    }

    /**
     * Get the breaches response.
     *
     * @return BreachesResponse|null Returns the breaches response.
     */
    public function getResponse(): ?BreachesResponse {
        return parent::getResponse();
    }
}
