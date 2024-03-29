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

use WBW\Bundle\CoreBundle\Event\AbstractEvent as BaseEvent;
use WBW\Library\HaveIBeenPwned\Entity\HaveIBeenPwnedEntityInterface;
use WBW\Library\HaveIBeenPwned\Request\AbstractRequest;
use WBW\Library\HaveIBeenPwned\Response\AbstractResponse;

/**
 * Abstract event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Event
 * @abstract
 */
abstract class AbstractEvent extends BaseEvent {

    /**
     * Entity.
     *
     * @var HaveIBeenPwnedEntityInterface
     */
    private $entity;

    /**
     * Request.
     *
     * @var AbstractRequest
     */
    private $request;

    /**
     * Response.
     *
     * @var AbstractResponse
     */
    private $response;

    /**
     * Constructor.
     *
     * @param string $eventName The event name.
     * @param HaveIBeenPwnedEntityInterface|null $entity The entity.
     */
    protected function __construct(string $eventName, HaveIBeenPwnedEntityInterface $entity = null) {
        parent::__construct($eventName);

        $this->setEntity($entity);
    }

    /**
     * Get the entity.
     *
     * @return HaveIBeenPwnedEntityInterface Returns the entity.
     */
    protected function getEntity() {
        return $this->entity;
    }

    /**
     * Get the request.
     *
     * @return AbstractRequest Returns the request.
     */
    protected function getRequest() {
        return $this->request;
    }

    /**
     * Get the response.
     *
     * @return AbstractResponse Returns the response.
     */
    protected function getResponse() {
        return $this->response;
    }

    /**
     * Set the entity.
     *
     * @param HaveIBeenPwnedEntityInterface|null $entity The entity.
     * @return AbstractEvent Returns this event.
     */
    protected function setEntity(HaveIBeenPwnedEntityInterface $entity = null) {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Set the request.
     *
     * @param AbstractRequest $request The request.
     * @return AbstractEvent Returns this event.
     */
    public function setRequest(AbstractRequest $request) {
        $this->request = $request;
        return $this;
    }

    /**
     * Set the response.
     *
     * @param AbstractResponse $response The response.
     * @return AbstractEvent Returns this event.
     */
    public function setResponse(AbstractResponse $response) {
        $this->response = $response;
        return $this;
    }
}
