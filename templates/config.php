
<?php
$AUTOCONFIG = array(
  "dbtype"        => "mysql",
  "dbname"        => "{{ owncloud_db_name }}",
  "dbuser"        => "{{ owncloud_db_username }}",
  "dbpass"        => "{{ owncloud_db_password }}",
  "dbhost"        => "localhost",
  "dbtableprefix" => "",
  "adminlogin"    => "admin",
  "adminpass"     => "admin123",
  "directory"     => "/var/www/owncloud",
);