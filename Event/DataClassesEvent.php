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

use WBW\Library\HaveIBeenPwned\Request\DataClassesRequest;
use WBW\Library\HaveIBeenPwned\Response\DataClassesResponse;

/**
 * Data classes event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 */
class DataClassesEvent extends AbstractEvent {

    /**
     * Event name.
     *
     * @var string
     */
    const EVENT_NAME = "wbw.haveibeenpwned.event.data_classes";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::EVENT_NAME);
    }

    /**
     * Get the data classes request.
     *
     * @return DataClassesRequest|null Returns the data classes request.
     */
    public function getRequest(): ?DataClassesRequest {
        return parent::getRequest();
    }

    /**
     * Get the data classes response.
     *
     * @return DataClassesResponse|null Returns the data classes response.
     */
    public function getResponse(): ?DataClassesResponse {
        return parent::getResponse();
    }
}
