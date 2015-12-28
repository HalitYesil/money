<?php

namespace Money;

/**
 * Implement this to provide a list of currencies
 *
 * @author Mathias Verraes
 */
interface AvailableCurrencies
{
    /**
     * Checks whether a currency is available in the current context
     *
     * @param Currency $currency
     *
     * @return boolean
     */
    public function contains(Currency $currency);
}