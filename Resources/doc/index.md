DOCUMENTATION
=============

Breach

Add the following code in a command or controller class:

> IMPORTANT NOTICE:
>
> The following $model must implement BreachInterface.

```php
// Create a breach event.
$event = new BreachEvent($model);

// Get the event dispatcher and dispatch the event.
$this->get("event_dispatcher")->dispatch($event->getEventName(), $event);

// Handle the response.
$response = $event->getResponse();

foreach($response->getBreaches() as $current) {
    // ...
}
```

Breached account

Add the following code in a command or controller class:

> IMPORTANT NOTICE:
>
> The following $model must implement BreachedAccountInterface.

```php
// Create a breached account event.
$event = new BreachedAccountEvent($model); 

// Get the event dispatcher and dispatch the event.
$this->get("event_dispatcher")->dispatch($event->getEventName(), $event);

// Handle the response.
$response = $event->getResponse();

foreach($response->getBreaches() as $current) {
    // ...
}
```

Breaches

Add the following code in a command or controller class:

> IMPORTANT NOTICE:
>
> The following $model must implement BreachesInterface.

```php
// Create a breaches event.
$event = new BreachesEvent($model); 

// Get the event dispatcher and dispatch the event.
$this->get("event_dispatcher")->dispatch($event->getEventName(), $event);

// Handle the response.
$response = $event->getResponse();

foreach($response->getBreaches() as $current) {
    // ...
}
```

Data classes

Add the following code in a command or controller class:

```php
// Create a data classes event.
$event = new DataClassesEvent();

// Get the event dispatcher and dispatch the event.
$this->get("event_dispatcher")->dispatch($event->getEventName(), $event);

// Handle the response.
$response = $event->getResponse();

foreach($response->getDataClasses() as $current) {
    // ...
}
```

Paste account

Add the following code in a command or controller class:

> IMPORTANT NOTICE:
>
> The following $model must implement PasteAccountInterface.

```php
// Create a paste account event.
$event = new PasteAccountEvent($model);

// Get the event dispatcher and dispatch the event.
$this->get("event_dispatcher")->dispatch($event->getEventName(), $event);

// Handle the response.
$response = $event->getResponse();

foreach($response->getPastes() as $current) {
    // ...
}
```

Range

Add the following code in a command or controller class:

> IMPORTANT NOTICE:
>
> The following $model must implement RangeInterface.

```php
// Create a range event.
$event = new RangeEvent($model);

// Get the event dispatcher and dispatch the event.
$this->get("event_dispatcher")->dispatch($event->getEventName(), $event);

// Handle the response.
$response = $event->getResponse();

foreach($response->getRanges() as $current) {
    // ...
}
```
