<?php

namespace GraphQL\SchemaObject;

class ShippingHandlingQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingHandling";

    public function selectAmountExcludingTax(ShippingHandlingAmountExcludingTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("amount_excluding_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAmountIncludingTax(ShippingHandlingAmountIncludingTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("amount_including_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(ShippingHandlingDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShippingDiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxes(ShippingHandlingTaxesArgumentsObject $argsObject = null)
    {
        $object = new TaxItemQueryObject("taxes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalAmount(ShippingHandlingTotalAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("total_amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
