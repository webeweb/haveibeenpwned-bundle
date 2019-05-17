<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\EventListener;

use WBW\Bundle\HaveIBeenPwnedBundle\Event\AbstractEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\BreachedAccountEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\BreachesEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\BreachEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\DataClassesEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\PasteAccountEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\RangeEvent;
use WBW\Library\HaveIBeenPwned\Exception\APIException;
use WBW\Library\HaveIBeenPwned\Factory\RequestFactory;
use WBW\Library\HaveIBeenPwned\Model\AbstractRequest;
use WBW\Library\HaveIBeenPwned\Model\AbstractResponse;
use WBW\Library\HaveIBeenPwned\Provider\APIProviderV2;

/**
 * HaveIBeenPwned event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\EventListener
 */
class HaveIBeenPwnedEventListener {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.haveibeenpwned.event_listener";

    /**
     * API provider.
     *
     * @var APIProviderV2
     */
    private $apiProvider;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setApiProvider(new APIProviderV2());
    }

    /**
     * Before return an event.
     *
     * @param AbstractEvent $event The event.
     * @param AbstractRequest $request The request.
     * @param AbstractResponse $response The response.
     * @return AbstractEvent Returns the event.
     */
    protected function beforeReturnEvent(AbstractEvent $event, AbstractRequest $request, AbstractResponse $response) {

        $event->setRequest($request);
        $event->setResponse($response);

        return $event;
    }

    /**
     * Get the API provider.
     *
     * @return APIProviderV2 Returns the API provider.
     */
    public function getApiProvider() {
        return $this->apiProvider;
    }

    /**
     * On breach.
     *
     * @param BreachEvent $event The breach event.
     * @return BreachEvent Returns the breach event.
     * @throws APIException Throws an API exception if an error occurs.
     */
    public function onBreach(BreachEvent $event) {

        $request  = RequestFactory::newBreachRequest($event->getBreach());
        $response = $this->getApiProvider()->breach($request);

        return $this->beforeReturnEvent($event, $request, $response);
    }

    /**
     * On breached account.
     *
     * @param BreachedAccountEvent $event The breached account event.
     * @return BreachedAccountEvent Returns the breached account event.
     * @throws APIException Throws an API exception if an error occurs.
     */
    public function onBreachedAccount(BreachedAccountEvent $event) {

        $request  = RequestFactory::newBreachedAccountRequest($event->getBreachedAccount());
        $response = $this->getApiProvider()->breachedAccount($request);

        return $this->beforeReturnEvent($event, $request, $response);
    }

    /**
     * On breaches.
     *
     * @param BreachesEvent $event The breaches event.
     * @return BreachesEvent Returns the breaches event.
     * @throws APIException Throws an API exception if an error occurs.
     */
    public function onBreaches(BreachesEvent $event) {

        $request  = RequestFactory::newBreachesRequest($event->getBreaches());
        $response = $this->getApiProvider()->breaches($request);

        return $this->beforeReturnEvent($event, $request, $response);
    }

    /**
     * On data classes.
     *
     * @param DataClassesEvent $event The data classes event.
     * @return DataClassesEvent Returns the data classes event.
     * @throws APIException Throws an API exception if an error occurs.
     */
    public function onDataClasses(DataClassesEvent $event) {

        $request  = RequestFactory::newDataClassesRequest();
        $response = $this->getApiProvider()->dataClasses($request);

        return $this->beforeReturnEvent($event, $request, $response);
    }

    /**
     * On paste account.
     *
     * @param PasteAccountEvent $event The paste account event.
     * @return PasteAccountEvent Returns the paste account event.
     * @throws APIException Throws an API exception if an error occurs.
     */
    public function onPasteAccount(PasteAccountEvent $event) {

        $request  = RequestFactory::newPasteAccountRequest($event->getPasteAccount());
        $response = $this->getApiProvider()->pasteAccount($request);

        return $this->beforeReturnEvent($event, $request, $response);
    }

    /**
     * On range.
     *
     * @param RangeEvent $event The breach event.
     * @return RangeEvent Returns the breach event.
     * @throws APIException Throws an API exception if an error occurs.
     */
    public function onRange(RangeEvent $event) {

        $request  = RequestFactory::newRangeRequest($event->getRange());
        $response = $this->getApiProvider()->range($request);

        return $this->beforeReturnEvent($event, $request, $response);
    }

    /**
     * Set the API provider.
     *
     * @param APIProviderV2 $apiProvider The API provider.
     * @return HaveIBeenPwnedEventListener Returns this event listener.
     */
    protected function setApiProvider(APIProviderV2 $apiProvider) {
        $this->apiProvider = $apiProvider;
        return $this;
    }
}