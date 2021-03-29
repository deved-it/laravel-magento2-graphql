<?php

namespace GraphQL\SchemaObject;

class RootPickupLocationsArgumentsObject extends ArgumentsObject
{
    protected $area;
    protected $filters;
    protected $sort;
    protected $pageSize;
    protected $currentPage;

    public function setArea(AreaInputInputObject $areaInputInputObject)
    {
        $this->area = $areaInputInputObject;

        return $this;
    }

    public function setFilters(PickupLocationFilterInputInputObject $pickupLocationFilterInputInputObject)
    {
        $this->filters = $pickupLocationFilterInputInputObject;

        return $this;
    }

    public function setSort(PickupLocationSortInputInputObject $pickupLocationSortInputInputObject)
    {
        $this->sort = $pickupLocationSortInputInputObject;

        return $this;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;

        return $this;
    }
}
