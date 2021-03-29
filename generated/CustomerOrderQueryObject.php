<?php

namespace GraphQL\SchemaObject;

class CustomerOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerOrder";

    public function selectBillingAddress(CustomerOrderBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new OrderAddressQueryObject("billing_address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCarrier()
    {
        $this->selectField("carrier");

        return $this;
    }

    public function selectComments(CustomerOrderCommentsArgumentsObject $argsObject = null)
    {
        $object = new SalesCommentItemQueryObject("comments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use the order_date attribute instead
     */
    public function selectCreatedAt()
    {
        $this->selectField("created_at");

        return $this;
    }

    public function selectCreditMemos(CustomerOrderCreditMemosArgumentsObject $argsObject = null)
    {
        $object = new CreditMemoQueryObject("credit_memos");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftMessage(CustomerOrderGiftMessageArgumentsObject $argsObject = null)
    {
        $object = new GiftMessageQueryObject("gift_message");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use the totals.grand_total attribute instead
     */
    public function selectGrandTotal()
    {
        $this->selectField("grand_total");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * @deprecated Use the id attribute instead
     */
    public function selectIncrementId()
    {
        $this->selectField("increment_id");

        return $this;
    }

    public function selectInvoices(CustomerOrderInvoicesArgumentsObject $argsObject = null)
    {
        $object = new InvoiceQueryObject("invoices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNumber()
    {
        $this->selectField("number");

        return $this;
    }

    public function selectOrderDate()
    {
        $this->selectField("order_date");

        return $this;
    }

    /**
     * @deprecated Use the number attribute instead
     */
    public function selectOrderNumber()
    {
        $this->selectField("order_number");

        return $this;
    }

    public function selectPaymentMethods(CustomerOrderPaymentMethodsArgumentsObject $argsObject = null)
    {
        $object = new OrderPaymentMethodQueryObject("payment_methods");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShipments(CustomerOrderShipmentsArgumentsObject $argsObject = null)
    {
        $object = new OrderShipmentQueryObject("shipments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingAddress(CustomerOrderShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new OrderAddressQueryObject("shipping_address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingMethod()
    {
        $this->selectField("shipping_method");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTotal(CustomerOrderTotalArgumentsObject $argsObject = null)
    {
        $object = new OrderTotalQueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
