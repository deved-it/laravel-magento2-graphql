<?php

namespace GraphQL\SchemaObject;

class CreditMemoTotalQueryObject extends QueryObject
{
    const OBJECT_NAME = "CreditMemoTotal";

    public function selectAdjustment(CreditMemoTotalAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("adjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBaseGrandTotal(CreditMemoTotalBaseGrandTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("base_grand_total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(CreditMemoTotalDiscountsArgumentsObject $argsObject = null)
    {
        $object = new DiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGrandTotal(CreditMemoTotalGrandTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("grand_total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingHandling(CreditMemoTotalShippingHandlingArgumentsObject $argsObject = null)
    {
        $object = new ShippingHandlingQueryObject("shipping_handling");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotal(CreditMemoTotalSubtotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxes(CreditMemoTotalTaxesArgumentsObject $argsObject = null)
    {
        $object = new TaxItemQueryObject("taxes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalShipping(CreditMemoTotalTotalShippingArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("total_shipping");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(CreditMemoTotalTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("total_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
