<?php
use PHPUnit\Framework\TestCase;

class JobsicleTest extends TestCase
{
    protected $jobsicle;

    function setUp() : void
    {
        $this->jobsicle = new \Jinas\Jobsicle\Jobsicle;
        $this->jobsicle->response = collect(json_decode(file_get_contents(__DIR__.'/mock.json'),true));
    }

    function test_filter_by_location()
    {
        
        $filtered = $this->jobsicle->filterByLocation("Hulhumale");

        $this->assertEquals("Hulhumale", $filtered[0]["location"]);
    }

    function test_filter_by_shift()
    {
        $filtered = $this->jobsicle->filterByShift("Full-time");

        $this->assertEquals("Full-time", $filtered[0]["type"]);
    }

    function test_filter_by_company()
    {
        $filtered = $this->jobsicle->filterByCompany("Tree Top Hospital");

        $this->assertEquals("Tree Top Hospital", $filtered[0]["company"]["name"]);
    }

    function test_filter_by_qualification()
    {
        $filtered = $this->jobsicle->filterByQualification("O Level");

        $this->assertEquals("O Level", $filtered[0]["qualification"]);
    }

    function test_filter_by_category()
    {
        $filtered = $this->jobsicle->filterByCategory("Housekeeping");

        $this->assertEquals("Housekeeping", $filtered[0]["category"]);
    }

    function test_filter_by_sector()
    {
        $filtered = $this->jobsicle->filterBySector("Private (Others)");

        $this->assertEquals("Private (Others)", $filtered[0]["sector"]);
    }
}