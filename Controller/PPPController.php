<?php

namespace Kanboard\Plugin\PPP\Controller;

use Kanboard\Controller\BaseController;

/**
 * PPP
 *
 * @package controller
 * @author Lev Lazinskiy
 */
class PPPController extends BaseController
{
    /**
     * PPP index page
     *
     * @access public
     */
     public function index()
     {
         $project = $this->getProject();

         $this->response->html($this->helper->layout->project('ppp:ppp/index', array(
             'project' => $project,
             'title' => t('PPP')
         ), 'ppp:ppp/sidebar'));
     }
}
