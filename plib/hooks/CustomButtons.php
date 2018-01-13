<?php
class Modules_TerminalIcon_CustomButtons extends pm_Hook_CustomButtons {

  public function getButtons()
  {

    if( !trim( pm_Settings::get( 'terminal_url' ) ) ) return;

    $button = [[
      'place' => pm_Settings::get( 'location_sidebar' ) ? self::PLACE_DOMAIN : self::PLACE_DOMAIN_PROPERTIES,
      'title' => pm_Locale::lmsg( 'clientPageTitle' ),
      'description' => pm_Locale::lmsg( 'terminalButtonDescription' ),
      'icon' => pm_Context::getBaseUrl() . 'assets/images/terminal-icon.svg',
      'link' => pm_Context::getActionUrl( 'index', 'terminal' )
    ]];

    return $button;

  }

}
