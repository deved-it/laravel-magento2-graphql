<?php

namespace GraphQL\SchemaObject;

class InvoiceTotalQueryObject extends QueryObject
{
    const OBJECT_NAME = "InvoiceTotal";

    public function selectBaseGrandTotal(InvoiceTotalBaseGrandTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("base_grand_total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(InvoiceTotalDiscountsArgumentsObject $argsObject = null)
    {
        $object = new DiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGrandTotal(InvoiceTotalGrandTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("grand_total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingHandling(InvoiceTotalShippingHandlingArgumentsObject $argsObject = null)
    {
        $object = new ShippingHandlingQueryObject("shipping_handling");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotal(InvoiceTotalSubtotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxes(InvoiceTotalTaxesArgumentsObject $argsObject = null)
    {
        $object = new TaxItemQueryObject("taxes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalShipping(InvoiceTotalTotalShippingArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("total_shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(InvoiceTotalTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("total_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
