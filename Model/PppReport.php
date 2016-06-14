<?php

namespace Kanboard\Plugin\PPP\Model;

use Kanboard\Core\Base;

/**
 * PPP
 * @package model
 * @author Lev Lazinskiy
 */
class PppReport extends Base
{
    /**
     * Get completed tasks
     *
     * @access public
     * @param integer $project_id
     * @param integer $column_id
     * @param boolean $close
     * @return array
     */
    public function getTasks($project_id, $column_id, $close = False)
    {
        $tasks = $this->taskFinderModel->getTasksByColumnAndSwimlane(
            $project_id, $column_id
        );

        return $tasks;
    }
}
