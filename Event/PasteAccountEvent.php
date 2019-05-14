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

use WBW\Library\HaveIBeenPwned\Entity\PasteAccountInterface;
use WBW\Library\HaveIBeenPwned\Model\Request\PasteAccountRequest;
use WBW\Library\HaveIBeenPwned\Model\Response\PastesResponse;

/**
 * PasteAccount event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class PasteAccountEvent extends AbstractEvent {

    /**
     * Constructor.
     *
     * @param PasteAccountInterface $entity The paste account.
     */
    public function __construct(PasteAccountInterface $entity) {
        parent::__construct(HaveIBeenPwnedEvents::PASTE_ACCOUNT, $entity);
    }

    /**
     * Get the paste account.
     *
     * @return PasteAccountInterface Returns the paste account.
     */
    public function getPasteAccount() {
        return $this->getEntity();
    }

    /**
     * Get the paste account request.
     *
     * @return PasteAccountRequest Returns the paste account request.
     */
    public function getRequest() {
        return parent::getRequest();
    }

    /**
     * Get the pastes response.
     *
     * @return PastesResponse Returns the pastes response.
     */
    public function getResponse() {
        return parent::getResponse();
    }
}
