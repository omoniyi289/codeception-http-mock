<?php  //[STAMP] 8f4eb66809ad610a756a817257a81d35
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

use Helper\Functional;
use Codeception\Module\HttpMock;

trait FunctionalTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return \InterNations\Component\HttpMock\MockBuilder
     * @see \Codeception\Module\HttpMock::expectRequest()
     */
    public function expectRequest() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('expectRequest', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\HttpMock::doNotExpectAnyOtherRequest()
     */
    public function doNotExpectAnyOtherRequest() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('doNotExpectAnyOtherRequest', func_get_args()));
    }
}
