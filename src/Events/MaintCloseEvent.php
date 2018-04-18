<?php

namespace Events;
require '../../vendor/autoload.php';

use ValueObjects\Worklog;

class MaintCloseEvent
{
    protected $workLog;

    /**
     * @param $workLog
     */
    public function __construct(workLog $workLog)
    {
        $this->workLog = $workLog;
    }

    /**
     * @return Worklog
     */
    public function getWorkLog(): Worklog
    {
        return $this->workLog;
    }

}