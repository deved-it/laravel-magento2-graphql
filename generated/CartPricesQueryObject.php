<?php

namespace GraphQL\SchemaObject;

class CartPricesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartPrices";

    public function selectAppliedTaxes(CartPricesAppliedTaxesArgumentsObject $argsObject = null)
    {
        $object = new CartTaxItemQueryObject("applied_taxes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use discounts instead 
     */
    public function selectDiscount(CartPricesDiscountArgumentsObject $argsObject = null)
    {
        $object = new CartDiscountQueryObject("discount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscounts(CartPricesDiscountsArgumentsObject $argsObject = null)
    {
        $object = new DiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGrandTotal(CartPricesGrandTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("grand_total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalExcludingTax(CartPricesSubtotalExcludingTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("subtotal_excluding_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalIncludingTax(CartPricesSubtotalIncludingTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("subtotal_including_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalWithDiscountExcludingTax(CartPricesSubtotalWithDiscountExcludingTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("subtotal_with_discount_excluding_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
