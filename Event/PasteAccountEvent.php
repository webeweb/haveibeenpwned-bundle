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
use WBW\Library\HaveIBeenPwned\Request\PasteAccountRequest;
use WBW\Library\HaveIBeenPwned\Response\PastesResponse;

/**
 * Paste account event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class PasteAccountEvent extends AbstractEvent {

    /**
     * Event name.
     *
     * @var string
     */
    const EVENT_NAME = "wbw.haveibeenpwned.event.paste_account";

    /**
     * Constructor.
     *
     * @param PasteAccountInterface $entity The paste account.
     */
    public function __construct(PasteAccountInterface $entity) {
        parent::__construct(self::EVENT_NAME, $entity);
    }

    /**
     * Get the paste account.
     *
     * @return PasteAccountInterface Returns the paste account.
     */
    public function getPasteAccount(): PasteAccountInterface {
        return $this->getEntity();
    }

    /**
     * Get the paste account request.
     *
     * @return PasteAccountRequest|null Returns the paste account request.
     */
    public function getRequest(): ?PasteAccountRequest {
        return parent::getRequest();
    }

    /**
     * Get the pastes response.
     *
     * @return PastesResponse|null Returns the pastes response.
     */
    public function getResponse(): ?PastesResponse {
        return parent::getResponse();
    }
}
