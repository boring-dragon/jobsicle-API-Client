<?php

namespace Jinas\Jobsicle;


class Jobsicle
{
    public $response;

    public function call_API()
    {
        $this->response = (new Client)->getAPIResponse();
    }
    
    /**
     * filterByLocation
     *
     * @param  mixed $location
     * @return array
     */
    public function filterByLocation(string $location): array
    {
        return $this->response
            ->where('location', $location)
            ->values()
            ->toArray();
    }
    
    /**
     * filterByShift
     *
     * @param  mixed $shift
     * @return array
     */
    public function filterByShift(string $shift): array
    {
        return $this->response
            ->where('type', $shift)
            ->values()
            ->toArray();
    }

    
    /**
     * filterByCompany
     *
     * @param  mixed $company
     * @return array
     */
    public function filterByCompany(string $company): array
    {
        return $this->response
            ->where('company.name', $company)
            ->values()
            ->toArray();
    }
    
    /**
     * filterByQualification
     *
     * @param  mixed $qualification
     * @return array
     */
    public function filterByQualification(string $qualification): array
    {
        return $this->response
            ->where('qualification', $qualification)
            ->values()
            ->toArray();
    }
    
    /**
     * filterByCategory
     *
     * @param  mixed $category
     * @return array
     */
    public function filterByCategory(string $category): array
    {
        return $this->response
            ->where('category', $category)
            ->values()
            ->toArray();
    }
    
    /**
     * filterBySector
     *
     * @param  mixed $sector
     * @return array
     */
    public function filterBySector(string $sector): array
    {
        return $this->response
            ->where('sector', $sector)
            ->values()
            ->toArray();
    }
}
