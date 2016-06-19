<?php
/* Smarty Configuration */
define('SMARTY_DIR', __DIR__.'/smarty.lib/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');
/*
 !!TODO: Move Smart Libraries out of web root!!
*/

class Smarty_Application extends Smarty{
    private $aNavigation = array(
        array(
            'href' => '/',
            'text' => 'Home'
        ),
        array(
            'href' => '/privacy',
            'text' => 'Privacy'
        ),
        array(
            'href' => '/support',
            'text' => 'Support'
        ),
        array(
            'href' => '/blog',
            'text' => 'Blog'
        ),
        array(
            'href' => '/how-it-works',
            'text' => 'How It Works'
        ),
        array(
            'href' => '/faq',
            'text' => 'FAQ'
        ),
        array(
            'href' => '/feature-requests',
            'text' => 'Feature Requests'
        ),
        array(
            'href' => '/faq',
            'text' => 'Browse Packs'
        ),
        array(
            'href' => '/download',
            'text' => 'Download'
        ),
    );


	function __construct(){
        parent::__construct();
        
		$this->setTemplateDir(__DIR__.'/templates/');
		$this->setCompileDir(__DIR__.'/templates_c/');
		$this->setConfigDir(__DIR__.'/configs/');
		$this->setCacheDir(__DIR__.'/cache/');

        #$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name','NAME TBA');
        $this->assign('realPath','/msap');
        $this->templateAssignment();
        $this->templateAssignment(array('navigation' => $this->aNavigation));
	}

    function templateAssignment($aTemplateVars = false){
        if(is_array($aTemplateVars)){
            $aDefault = $aTemplateVars;
        } else {
            $aDefault = array(
                'siteTitle'      => 'The new title!',
                'titleSeparator' => '-',
                'pageTitle'      => '',
                'tpl_name'       => 'default.tpl'
            );
        }

        $this->assign($aDefault);
    }
}



?>