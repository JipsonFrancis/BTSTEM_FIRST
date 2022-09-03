<?php

class UIController extends Controller{
    
    public function loggin($user_name , $user_loggin_status){
        $result = $this->getLogginfo($user_name, $user_loggin_status);
        return $result;
    }
    public function showEvents($event_timestamp){
        $result = $this->getEvents($event_timestamp);
        return $result;
    }
    public function showMessages($message_time){
        $result = $this->getMessages($message_time);
        return $result;
    }
    public function showJobs($job_timestamp){
        $result = $this->getJobs($job_timestamp);
        return $result;
    }
    public function showProfile($user_id){
        $result = $this->getProfile($user_id);
        return $result;
    }

}

