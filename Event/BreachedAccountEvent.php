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

use WBW\Library\HaveIBeenPwned\Entity\BreachedAccountInterface;
use WBW\Library\HaveIBeenPwned\Request\BreachedAccountRequest;
use WBW\Library\HaveIBeenPwned\Response\BreachesResponse;

/**
 * Breached account event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class BreachedAccountEvent extends AbstractEvent {

    /**
     * Event name.
     *
     * @var string
     */
    const EVENT_NAME = "wbw.haveibeenpwned.event.breached_account";

    /**
     * Constructor.
     *
     * @param BreachedAccountInterface $entity The breached account.
     */
    public function __construct(BreachedAccountInterface $entity) {
        parent::__construct(self::EVENT_NAME, $entity);
    }

    /**
     * Get the breached account.
     *
     * @return BreachedAccountInterface Returns the breached account.
     */
    public function getBreachedAccount(): BreachedAccountInterface {
        return $this->getEntity();
    }

    /**
     * Get the breached account request.
     *
     * @return BreachedAccountRequest|null Returns the breached account request.
     */
    public function getRequest(): ?BreachedAccountRequest {
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
