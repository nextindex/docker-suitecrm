<?php
  if(null !== $installer_defaults) {
    $installer_defaults['setup_db_host_name']            = '';
    $installer_defaults['setup_db_database_name']        = '';
    $installer_defaults['setup_db_admin_user_name']      = '';
    $installer_defaults['setup_db_admin_password']       = '';
    $installer_defaults['db_type']                       = 'mysql';
  }

  if(null !== $sugar_config) {
    $sugar_config['dbconfig']['db_port'] = '';
    $sugar_config['dbconfig']['db_manager'] = 'MysqlManager';
    $sugar_config['dbconfig']['db_host_name'] = '';
    $sugar_config['dbconfig']['db_user_name'] = '';
    $sugar_config['dbconfig']['db_password'] = '';
  }
?>
