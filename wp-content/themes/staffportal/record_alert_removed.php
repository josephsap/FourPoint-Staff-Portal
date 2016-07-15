<?php
require_once("../../../wp-load.php");
if( $_POST['alert_id'] && $_POST['user_id'] ) {
  /* track alerts removed */
  $removed_alert_ids = get_field('removed_alert_ids', $_POST['user_id']);
  $removed_alerts = explode(",",$removed_alert_ids);
  array_push( $removed_alerts,$_POST['alert_id']  );
  $removed_alert_ids = implode( ",", array_unique($removed_alerts) );
  echo("removed alert ids".$removed_alert_ids);
  update_field('removed_alert_ids', $removed_alert_ids, $_POST['user_id']);
}