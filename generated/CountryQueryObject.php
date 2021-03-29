<?php

namespace GraphQL\SchemaObject;

class CountryQueryObject extends QueryObject
{
    const OBJECT_NAME = "Country";

    public function selectAvailableRegions(CountryAvailableRegionsArgumentsObject $argsObject = null)
    {
        $object = new RegionQueryObject("available_regions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFullNameEnglish()
    {
        $this->selectField("full_name_english");

        return $this;
    }

    public function selectFullNameLocale()
    {
        $this->selectField("full_name_locale");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectThreeLetterAbbreviation()
    {
        $this->selectField("three_letter_abbreviation");

        return $this;
    }

    public function selectTwoLetterAbbreviation()
    {
        $this->selectField("two_letter_abbreviation");

        return $this;
    }
}
