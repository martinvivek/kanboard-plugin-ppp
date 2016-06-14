<?php

namespace Kanboard\Plugin\PPP\Controller;

use Kanboard\Controller\BaseController;

/**
 * PPP controller
 *
 * @package controller
 * @author Lev Lazinskiy
 */
class PPPController extends BaseController
{
    /**
     * Display PPP report
     *
     * @access public
     */
     public function index()
     {
         $project = $this->getProject();
         $now = date("F j, Y, g:i a");
         $progress = $this->pppReport->getTasks(1,4);
         $plans = $this->pppReport->getTasks(1,3);
         $problems = $this->pppReport->getTasks(1,5);

         $this->response->html($this->helper->layout->
            project('ppp:ppp/index', array(
                 'project' => $project,
                 'progress' => $progress,
                 'plans' => $plans,
                 'problems' => $problems,
                 'report_date' => $now,
                 'title' => t('PPP'),
                 'values' => array(
                     'plugin' => 'ppp',
                     'controller' => 'ppp',
                     'action' => 'index',
                 ),
             )));
     }
}
