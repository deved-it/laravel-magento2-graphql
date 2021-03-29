<?php

namespace GraphQL\SchemaObject;

class OrderTotalQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderTotal";

    public function selectBaseGrandTotal(OrderTotalBaseGrandTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("base_grand_total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(OrderTotalDiscountsArgumentsObject $argsObject = null)
    {
        $object = new DiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGrandTotal(OrderTotalGrandTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("grand_total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingHandling(OrderTotalShippingHandlingArgumentsObject $argsObject = null)
    {
        $object = new ShippingHandlingQueryObject("shipping_handling");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotal(OrderTotalSubtotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxes(OrderTotalTaxesArgumentsObject $argsObject = null)
    {
        $object = new TaxItemQueryObject("taxes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalShipping(OrderTotalTotalShippingArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("total_shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(OrderTotalTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("total_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
