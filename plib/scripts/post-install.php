<?php
// Get current IP address & hostname
$externalContent = file_get_contents( 'http://checkip.dyndns.com/' );
preg_match( '/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $match );
$externalIp = $match[1];
$hostname = gethostbyaddr( $externalIp );

// Set default settings
pm_Settings::set( 'location_sidebar', true );
pm_Settings::set( 'history', 'install' );

echo "Installation completed.\n";
exit(0);
