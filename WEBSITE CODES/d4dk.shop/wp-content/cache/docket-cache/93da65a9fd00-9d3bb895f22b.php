<?php 
return array (
  'timestamp' => 1719915366,
  'site_id' => 1,
  'group' => 'options',
  'key' => 'cron',
  'type' => 'array',
  'timeout' => 1721124966,
  'data' => 
  array (
    1719915376 => 
    array (
      'action_scheduler_run_queue' => 
      array (
        '0d04ed39571b55704c122d726248bbac' => 
        array (
          'schedule' => 'every_minute',
          'args' => 
          array (
            0 => 'WP Cron',
          ),
          'interval' => 60,
        ),
      ),
    ),
    1719915488 => 
    array (
      'woocommerce_cancel_unpaid_orders' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => false,
          'args' => 
          array (
          ),
        ),
      ),
    ),
    1719915611 => 
    array (
      'docketcache_gc' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'docketcache_gc_schedule',
          'args' => 
          array (
          ),
          'interval' => 300,
        ),
      ),
    ),
    1719917332 => 
    array (
      'wp_privacy_delete_old_export_files' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'hourly',
          'args' => 
          array (
          ),
          'interval' => 3600,
        ),
      ),
    ),
    1719917387 => 
    array (
      'jetpack_clean_nonces' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'hourly',
          'args' => 
          array (
          ),
          'interval' => 3600,
        ),
      ),
      'wc_admin_process_orders_milestone' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'hourly',
          'args' => 
          array (
          ),
          'interval' => 3600,
        ),
      ),
    ),
    1719918375 => 
    array (
      'wc_admin_unsnooze_admin_notes' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'hourly',
          'args' => 
          array (
          ),
          'interval' => 3600,
        ),
      ),
    ),
    1719935332 => 
    array (
      'recovery_mode_clean_expired_keys' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
      'wp_version_check' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'twicedaily',
          'args' => 
          array (
          ),
          'interval' => 43200,
        ),
      ),
      'wp_update_plugins' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'twicedaily',
          'args' => 
          array (
          ),
          'interval' => 43200,
        ),
      ),
      'wp_update_themes' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'twicedaily',
          'args' => 
          array (
          ),
          'interval' => 43200,
        ),
      ),
    ),
    1719935386 => 
    array (
      'wc_admin_daily' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
    ),
    1719935387 => 
    array (
      'jetpack_v2_heartbeat' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
    ),
    1719935395 => 
    array (
      'woocommerce_cleanup_personal_data' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
    ),
    1719939572 => 
    array (
      'wp_update_user_counts' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'twicedaily',
          'args' => 
          array (
          ),
          'interval' => 43200,
        ),
      ),
    ),
    1719939965 => 
    array (
      'wp_scheduled_delete' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
      'delete_expired_transients' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
    ),
    1719940706 => 
    array (
      'wp_scheduled_auto_draft_delete' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
    ),
    1719946185 => 
    array (
      'woocommerce_cleanup_logs' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
      'woocommerce_cleanup_rate_limits' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
    ),
    1719956985 => 
    array (
      'woocommerce_cleanup_sessions' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'twicedaily',
          'args' => 
          array (
          ),
          'interval' => 43200,
        ),
      ),
    ),
    1719964800 => 
    array (
      'woocommerce_scheduled_sales' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'daily',
          'args' => 
          array (
          ),
          'interval' => 86400,
        ),
      ),
    ),
    1720280933 => 
    array (
      'wp_delete_temp_updater_backups' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'weekly',
          'args' => 
          array (
          ),
          'interval' => 604800,
        ),
      ),
    ),
    1720303480 => 
    array (
      'bookingpress_cleanup_transient_data_hook' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'weekly',
          'args' => 
          array (
          ),
          'interval' => 604800,
        ),
      ),
    ),
    1720304851 => 
    array (
      'astra_delete_docs_folder' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'weekly',
          'args' => 
          array (
          ),
          'interval' => 604800,
        ),
      ),
    ),
    1720340475 => 
    array (
      'bookingpress_send_anonymous_data' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'weekly',
          'args' => 
          array (
          ),
          'interval' => 604800,
        ),
      ),
    ),
    1720367332 => 
    array (
      'wp_site_health_scheduled_check' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'weekly',
          'args' => 
          array (
          ),
          'interval' => 604800,
        ),
      ),
    ),
    1720367445 => 
    array (
      'woocommerce_geoip_updater' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'fifteendays',
          'args' => 
          array (
          ),
          'interval' => 1296000,
        ),
      ),
    ),
    1720396377 => 
    array (
      'wpforms_weekly_entries_count_cron' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'wpforms_weekly_entries_count',
          'args' => 
          array (
          ),
          'interval' => 604559,
        ),
      ),
    ),
    1720444867 => 
    array (
      'wpforms_email_summaries_cron' => 
      array (
        '40cd750bba9870f18aada2478b24840a' => 
        array (
          'schedule' => 'wpforms_email_summaries_weekly',
          'args' => 
          array (
          ),
          'interval' => 602643,
        ),
      ),
    ),
    'version' => 2,
  ),
);
/*@DOCKET_CACHE_EOF*/