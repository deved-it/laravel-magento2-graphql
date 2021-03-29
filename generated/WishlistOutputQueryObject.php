<?php

namespace GraphQL\SchemaObject;

class WishlistOutputQueryObject extends QueryObject
{
    const OBJECT_NAME = "WishlistOutput";

    /**
     * @deprecated Use field `items` from type `Wishlist` instead
     */
    public function selectItems(WishlistOutputItemsArgumentsObject $argsObject = null)
    {
        $object = new WishlistItemQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use field `items_count` from type `Wishlist` instead
     */
    public function selectItemsCount()
    {
        $this->selectField("items_count");

        return $this;
    }

    /**
     * @deprecated This field is related to Commerce functionality and is always `null` in Open Source edition
     */
    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * @deprecated Use field `sharing_code` from type `Wishlist` instead
     */
    public function selectSharingCode()
    {
        $this->selectField("sharing_code");

        return $this;
    }

    /**
     * @deprecated Use field `updated_at` from type `Wishlist` instead
     */
    public function selectUpdatedAt()
    {
        $this->selectField("updated_at");

        return $this;
    }
}
