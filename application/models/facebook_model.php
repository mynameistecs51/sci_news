<?php if (! defined('BASEPATH')) exit("No direct script access allowed");

class Facebook_model extends CI_model{

	public function __construct() {
        parent::__construct();
        $config = array(
            'appId'  => '1540389822873045',
            'secret' => 'fe8c38bfe393ef20f96605da4ebd5024',
            'status' => true,
            'xfbml ' => true,
            'version' => 'v2.0',
            'fileUpload' => true, // Indicates if the CURL based @ syntax for file uploads is enabled.
            );

        $this->load->library('facebook/facebook', $config);

        $user = $this->facebook->getUser();

        // We may or may not have this data based on whether the user is logged in.
        //
        // If we have a $user id here, it means we know the user is logged into
        // Facebook, but we don't know if the access token is valid. An access
        // token is invalid if the user logged out of Facebook.
        $profile = null;
        if($user)
        {
            try {
                // Proceed knowing you have a logged in user who's authenticated.
                $profile = $this->facebook->api('/me?fields=id,name,link,email,first_name,last_name,gender');
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
            }
        }

        $fb_data = array(
            'me' => $profile,
            'uid' => $user,
            'loginUrl' => $this->facebook->getLoginUrl(
                array(
                                'scope' => 'public_profile,email', // app permissions
                                'redirect_uri' => '' // URL where you want to redirect your users after a successful login
                                )
                ),
            'logoutUrl' => $this->facebook->getLogoutUrl(),
            );

        $this->session->set_userdata('fb_data', $fb_data);
    }


    public function id_check($fb_data){
    $query_faceboo_id = $this->db->query("SELECT * FROM users WHERE user_facebook_id =".$fb_data['me']['id'])->num_rows();
    return $query_faceboo_id;
  } 
}
?>