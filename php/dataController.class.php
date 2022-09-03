<?php

class dataController extends Controller{

    public function takeAcc( $user_name , $user_password ){
        $result = $this->setAcc($user_name , $user_password);
        return $result;
    }
    public function takeMessage( $message_text, $user_id ){
        $result = $this->setMessage($user_name , $user_password);
        return $result;
    }
    public function takeEvent( $event_url, $event_name, $event_venue, $event_description, $event_location, $event_time ){
        $result = $this->setEvent( $event_url, $event_name, $event_venue, $event_description, $event_location, $event_time );
        return $result;
    }
    public function takeJob( $job_url,$job_description, $job_deadline ){
        $result = $this->setJob( $job_url,$job_description, $job_deadline );
        return $result;
    }
    public function takeProfile( $user_id, $profile_url , $profile_description, $profile_email ){
        $result = $this->setProfile($user_id, $profile_url , $profile_description, $profile_email);
        return $result;
    }
    public function takeProfiledit( $profile_url , $profile_description, $profile_email, $user_id ){
        $result = $this->editProfile( $profile_url , $profile_description, $profile_email, $user_id );
        return $result;
    }
}