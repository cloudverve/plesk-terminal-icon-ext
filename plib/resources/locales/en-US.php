<?php
$messages = [
  'settingsPageTitle' => 'Terminal Icon',
  'clientPageTitle' => 'Terminal (SSH)',
  'clientIntroText' => 'Use your account username (%s) and password to connect via SSH.',
  'settingsIntroText' => sprintf( 'Please provide the URL to your Shell in a Box instance. For more information, see the <a href="%s" target="_blank">wiki</a>.', 'https://github.com/cloudverve/plesk-terminal-icon-ext/wiki' ),
  'terminalUrlLabel' => 'Shell in a Box URL',
  'terminalUrlDescription' => sprintf( 'The URL to your Shell in a Box instance. Example: http://%s/siab', parse_url( $_SERVER['HTTP_HOST'], PHP_URL_HOST ) ),
  'terminalIconLocationLabel' => 'Move Icon to Sidebar',
  'terminalIconLocationDescription' => 'If checked, link appears in sidebar rather than domain\'s settings page body.',
  'terminalButtonDescription' => 'Connect to server via SSH',
  'settingsDataSaved' => 'Settings saved successfully.',
  'wikiButtonCaption' => 'Shell in a Box Docker container for Plesk'
];
