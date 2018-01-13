<?php
class IndexController extends pm_Controller_Action {

  public function init() {

    parent::init();

  }

  public function indexAction() {

    if ( !pm_Session::getClient()->isAdmin() ) {
      throw new pm_Exception( 'Permission denied' );
    }

    $this->view->pageTitle = $this->lmsg( 'settingsPageTitle' );

    $form = new pm_Form_Simple();
    $form->addElement( 'text', 'terminal_url', [
      'label' => $this->lmsg( 'terminalUrlLabel' ),
      'value' => pm_Settings::get( 'terminal_url' ),
      'class' => 'f-large-size',
      'description' => $this->lmsg( 'terminalUrlDescription' ),
      'required' => true,
      'validators' => [ array( 'NotEmpty', true ) ]
    ]);
    $form->addElement( 'checkbox', 'location_sidebar', [
      'label' => $this->lmsg( 'terminalIconLocationLabel' ),
      'description' => $this->lmsg( 'terminalIconLocationDescription' ),
      'value' => pm_Settings::get( 'location_sidebar' )
    ]);

    $form->addControlButtons(array(
      'cancelLink' => pm_Context::getModulesListUrl(),
    ));

    if ($this->getRequest()->isPost() && $form->isValid($this->getRequest()->getPost())) {
      pm_Settings::set( 'terminal_url', $form->getValue( 'terminal_url' ) );
      pm_Settings::set( 'terminal_icon_location', $form->getValue( 'terminal_icon_location' ) );

      $this->_status->addMessage( 'info', $this->lmsg( 'settingsDataSaved' ) );
      $this->_helper->json( array( 'redirect' => pm_Context::getBaseUrl() ) );
    }

    $this->view->wikiButton = pm_Context::getBaseUrl() . 'assets/images/plesk-shellinabox-docker-button.svg';
    $this->view->form = $form;
  }

  public function terminalAction()
  {

    // Get current username
    $client = pm_Session::getClient();

    $this->view->pageTitle = $this->lmsg( 'clientPageTitle') ;
    $this->view->terminalUrl = pm_Settings::get( 'terminal_url' );
    $this->view->wikiCaption = $this->lmsg( 'wikiButtonCaption' );
    $this->view->clientUsername = $client->getLogin();

  }

}
