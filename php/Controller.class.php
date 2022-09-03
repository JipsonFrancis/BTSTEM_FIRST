<?php

class Controller extends DBconfig{

// uicontroller utilities
  protected function getLogginfo($user_name , $user_loggin_status ){
    $sql = 'SELECT * FROM `user` WHERE (`user_name` = ? AND user_loggin_status = ?)';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_name, $user_loggin_status]);

    $result = $stmt->fetchAll();
    return $result;
  }

  protected function getEvents($event_timestamp){
    $sql = 'SELECT * FROM `event` WHERE (event_timestamp => ? )';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$event_timestamp]);

    $result = $stmt->fetchAll();
    return $result;
  }

  protected function getJobs($job_timestamp){
    $sql = 'SELECT * FROM `job` WHERE (event_timestamp => ? )';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$job_timestamp]);

    $result = $stmt->fetchAll();
    return $result;
  }

  protected function getMessages($message_time){

    $sql = 'SELECT * FROM `message` WHERE (message_time => ?) ';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$message_time]);
    $result = $stmt->fetchAll();
    return $result;
  }

  protected function getProfile($user_id){
    $sql = 'SELECT * FROM `profile` WHERE (`user_id` = ?) ';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_id]);
    $result = $stmt->fetchAll();
    return $result;
  }

// datacontroller utilities
  protected function setAcc($user_name , $user_password){
    $sql = 'INSERT INTO `user` (`user_name`, user_surname, user_password, user_role) VALUES (?, ?, ?, ?)';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_name, $user_password]);

    if( $stmt ){
      return true;
    }else 
    return false;
  }

  protected function setMessage($message_text, $user_id){
    $sql = 'INSERT INTO `message` (message_text, `user_id`) VALUES (?, ?)';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$message_text, $user_id]); 

    if( $stmt ){
      return true;
    }else 
    return false;
  }

  protected function setEvent($event_url, $event_name, $event_venue, $event_description, $event_location, $event_time){
    $sql = 'INSERT INTO `event` (event_url, event_name, event_venue, event_description, event_location, event_time) VALUES (?, ?, ?, ?, ?, ?)';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$event_url, $event_name, $event_venue, $event_description, $event_location, $event_time]); 

    if( $stmt ){
      return true;
    }else 
    return false;
  }

  protected function setJob($job_url,$job_description, $job_deadline){
    $sql = 'INSERT INTO `event` (event_url, event_name, event_venue, event_description, event_location, event_time) VALUES (?, ?, ?)';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$job_url,$job_description, $job_deadline]); 

    if( $stmt ){
      return true;
    }else 
    return false;
  }

  protected function setProfile($user_id, $profile_url , $profile_description, $profile_email ){
    $sql = 'INSERT INTO `profile` (`user_id`, profile_url, profile_description, profile_email) VALUES (?,?,?,?) ';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_id, $profile_url , $profile_description, $profile_email]);

    if($stmt){
      return true;
    }else
    return false;
  }

  protected function editProfile( $profile_url , $profile_description, $profile_email, $user_id ){
    $sql = 'UPDATE `profile` SET `user_id` = ?, profile_url = ?, profile_description = ?, profile_email = ? WHERE (`user_id` = ? ) ';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_id, $profile_url , $profile_description, $profile_email, $user_id]); 

    if($stmt){
      return true;
    }else
    return false;
  }
}