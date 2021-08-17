<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Tests\Fixtures\Event;

use WBW\Bundle\HaveIBeenPwnedBundle\Event\AbstractEvent;
use WBW\Library\HaveIBeenPwned\Entity\HaveIBeenPwnedEntityInterface;
use WBW\Library\HaveIBeenPwned\Request\AbstractRequest;
use WBW\Library\HaveIBeenPwned\Response\AbstractResponse;

/**
 * Test HaveIBeenPwned event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\Fixtures\Event
 */
class TestEvent extends AbstractEvent {

    /**
     * {@inheritdoc}
     */
    public function __construct($eventName, HaveIBeenPwnedEntityInterface $entity = null) {
        parent::__construct($eventName, $entity);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity() {
        return parent::getEntity();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest() {
        return parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse() {
        return parent::getResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function setEntity(HaveIBeenPwnedEntityInterface $entity = null) {
        return parent::setEntity($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function setRequest(AbstractRequest $request) {
        return parent::setRequest($request);
    }

    /**
     * {@inheritdoc}
     */
    public function setResponse(AbstractResponse $response) {
        return parent::setResponse($response);
    }
}
