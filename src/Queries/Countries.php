<?php


namespace Deved\Magento2Graphql\Queries;


class Countries extends AbstractQuery
{

    public function setQuery(): void
    {
        $countries = <<<GQL
        {
          countries {
            id
            two_letter_abbreviation
            three_letter_abbreviation
            full_name_locale
            full_name_english
            available_regions {
              id
              code
              name
            }
          }
        }
        GQL;
        $this->query = $countries;
    }
}
