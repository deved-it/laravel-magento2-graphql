<?php

namespace GraphQL\SchemaObject;

class WishlistQueryObject extends QueryObject
{
    const OBJECT_NAME = "Wishlist";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectItems(WishlistItemsArgumentsObject $argsObject = null)
    {
        $object = new WishlistItemQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectItemsCount()
    {
        $this->selectField("items_count");

        return $this;
    }

    public function selectSharingCode()
    {
        $this->selectField("sharing_code");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updated_at");

        return $this;
    }
}
