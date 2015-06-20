<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class RetrieveLinkRecordsResponse
{

  /**
   * 
   * @var RetrieveResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param RetrieveResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
