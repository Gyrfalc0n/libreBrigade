<?php

  # project: eBrigade
  # homepage: https://ebrigade.app
  # version: 5.3

  # Copyright (C) 2004, 2021 Nicolas MARCHE (eBrigade Technologies)
  # This program is free software; you can redistribute it and/or modify
  # it under the terms of the GNU General Public License as published by
  # the Free Software Foundation; either version 2 of the License, or
  # (at your option) any later version.
  #
  # This program is distributed in the hope that it will be useful,
  # but WITHOUT ANY WARRANTY; without even the implied warranty of
  # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  # GNU General Public License for more details.
  # You should have received a copy of the GNU General Public License
  # along with this program; if not, write to the Free Software
  # Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

include_once ("config.php");

// script to be used by cronjob in command line. Or for test purpose in a browser  
if(! defined('STDIN')) {
  // for test purpose only
  check_all(14);
}

@set_time_limit($mytimelimit);
cleanup_ics("$basedir");
cleanup_trombi();
database_cleanup();
database_optimize();
push_monitoring_info($force=true);
specific_maintenance();
set_old_members();
manage_suspensions();

?>
