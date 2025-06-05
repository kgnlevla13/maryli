<?php

$id = post("event_id");

if ($data = form_control('yt_link')) {

  $data['event_id'] = $id;

  if (isset($data['yt_link'])) {
    $data['event_image_1'] = null;
  }

  $query = $db->update("events")
  ->where("event_id",intval($id))
  ->set($data);

  if ($query) {
    $json["success"] = "Update Successful! You are being redirected...";
  }
  else{
    $json["error"] = "There is a problem. Try again!";
  }
}
else{
  $json["error"] = "Please fill in all fields.";
}