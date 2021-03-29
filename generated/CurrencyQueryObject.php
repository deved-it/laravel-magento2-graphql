<?php

namespace GraphQL\SchemaObject;

class CurrencyQueryObject extends QueryObject
{
    const OBJECT_NAME = "Currency";

    public function selectAvailableCurrencyCodes()
    {
        $this->selectField("available_currency_codes");

        return $this;
    }

    public function selectBaseCurrencyCode()
    {
        $this->selectField("base_currency_code");

        return $this;
    }

    public function selectBaseCurrencySymbol()
    {
        $this->selectField("base_currency_symbol");

        return $this;
    }

    /**
     * @deprecated Symbol was missed. Use `default_display_currency_code`.
     */
    public function selectDefaultDisplayCurrecyCode()
    {
        $this->selectField("default_display_currecy_code");

        return $this;
    }

    /**
     * @deprecated Symbol was missed. Use `default_display_currency_symbol`.
     */
    public function selectDefaultDisplayCurrecySymbol()
    {
        $this->selectField("default_display_currecy_symbol");

        return $this;
    }

    public function selectDefaultDisplayCurrencyCode()
    {
        $this->selectField("default_display_currency_code");

        return $this;
    }

    public function selectDefaultDisplayCurrencySymbol()
    {
        $this->selectField("default_display_currency_symbol");

        return $this;
    }

    public function selectExchangeRates(CurrencyExchangeRatesArgumentsObject $argsObject = null)
    {
        $object = new ExchangeRateQueryObject("exchange_rates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
