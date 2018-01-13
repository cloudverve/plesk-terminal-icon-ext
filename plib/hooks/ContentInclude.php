<?php
class Modules_TerminalIcon_ContentInclude extends pm_Hook_ContentInclude
{

  public function getJsConfig()
  {
    return [
      'baseUrl' => pm_Context::getBaseUrl()
    ];
  }

  public function getJsOnReadyContent()
  {
    return 'PleskExt.TerminalIcon.init();';
  }

}
