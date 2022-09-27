<?php

function drush_en_redis_purge_install() {

        exec('php /opt/drupal/vendor/drush/drush/drush.php en redis purge_drush purge_processor_lateruntime purge_queuer_coretags purge_processor_cron purge_tokens purge_ui purge purge_purger_http purge_purger_http_tagsheader;');

}

Drupal::moduleHandler() -> invokeAll('install');