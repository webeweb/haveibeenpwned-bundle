<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle;

/**
 * HaveIBeenPwned events.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle
 */
class WBWHaveIBeenPwnedEvents {

    /**
     * Breach.
     *
     * @avr string
     */
    const BREACH = "wbw.haveibeenpwned.event.breach";

    /**
     * Breached account.
     *
     * @avr string
     */
    const BREACHED_ACCOUNT = "wbw.haveibeenpwned.event.breached_account";

    /**
     * Breaches.
     *
     * @avr string
     */
    const BREACHES = "wbw.haveibeenpwned.event.breaches";

    /**
     * Data classes.
     *
     * @avr string
     */
    const DATA_CLASSES = "wbw.haveibeenpwned.event.data_classes";

    /**
     * Paste account.
     *
     * @avr string
     */
    const PASTE_ACCOUNT = "wbw.haveibeenpwned.event.paste_account";

    /**
     * Range.
     *
     * @avr string
     */
    const RANGE = "wbw.haveibeenpwned.event.range";
}
