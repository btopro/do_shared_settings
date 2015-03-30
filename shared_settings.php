<?php
# APC cache backend
$conf['cache_backends'][] = 'sites/all/modules/apc/drupal_apc_cache.inc';
# APC as default container, others are targetted per bin
#$conf['cache_default_class'] = 'DrupalAPCCache';
# APC as default, so these can be commented out
$conf['cache_class_cache'] = 'DrupalAPCCache';
$conf['cache_class_cache_admin_menu'] = 'DrupalAPCCache';
$conf['cache_class_cache_block'] = 'DrupalAPCCache';
$conf['cache_class_cache_bootstrap'] = 'DrupalAPCCache';
$conf['cache_class_cache_entity_file'] = 'DrupalAPCCache';
$conf['cache_class_cache_entity_og_membership'] = 'DrupalAPCCache';
$conf['cache_class_cache_entity_og_membership_type'] = 'DrupalAPCCache';
$conf['cache_class_cache_field'] = 'DrupalAPCCache';
$conf['cache_class_cache_menu'] = 'DrupalAPCCache';
$conf['cache_class_cache_libraries'] = 'DrupalAPCCache';
$conf['cache_class_cache_token'] = 'DrupalAPCCache';
$conf['cache_class_cache_views'] = 'DrupalAPCCache';
$conf['cache_class_cache_path_breadcrumbs'] = 'DrupalAPCCache';
$conf['cache_class_cache_path'] = 'DrupalAPCCache';

# Filecache for ones that are big and don't change much
# Comment this back in for filecache support, not all systems support this

$conf['cache_backends'][] = 'sites/all/modules/filecache/filecache.inc';
$conf['cache_backends'][] = 'sites/all/modules/authcache/authcache.cache.inc';
$conf['cache_backends'][] = 'sites/all/modules/authcache/modules/authcache_builtin/authcache_builtin.cache.inc';

# use this for file systems that don't have shared memory
# hit file system in the shared memory portion for faster access
$conf['filecache_directory'] = '/dev/shm/drupal_filecache/' . $conf['cache_prefix'];
#$conf['cache_default_class'] = 'DrupalFileCache';
$conf['cache_class_cache_entity_user'] = 'DrupalFileCache';
$conf['cache_class_cache_advagg_aggregates'] = 'DrupalFileCache';
$conf['cache_class_cache_advagg_info'] = 'DrupalFileCache';
$conf['cache_class_cache_update'] = 'DrupalFileCache';
$conf['cache_class_cache_views_data'] = 'DrupalFileCache';
$conf['cache_class_cache_page'] = 'DrupalFileCache';
$conf['cache_class_cache_display_cache'] = 'DrupalFileCache';
$conf['cache_class_cache_entity_node'] = 'DrupalFileCache';

# Default DB for the ones that change too frequently and are small
$conf['cache_default_class']    = 'DrupalDatabaseCache';
# THIS MUST BE SERVED FROM DB FOR STABILITY
$conf['cache_class_cache_cis_connector'] = 'DrupalDatabaseCache';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';

// this is assuming all databases using this file operate off of default
$databases['default']['default']['init_commands'] = array(
  'isolation' => "SET SESSION tx_isolation='READ-COMMITTED'"
);
