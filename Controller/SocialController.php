<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nisanth
 * Date: 15/8/12
 * Time: 8:27 AM
 * To change this template use File | Settings | File Templates.
 * @property mixed params
 */
App::import('Vendor', 'OAuthClient');

class SocialController extends AppController{

    var $name="Social";
    var $component = array('twitter_post');
    var $helpers=array('Html','Form');

    //public $data;
    //public $Social;

    public function index() {
        //if(!empty($this->data)) {
        //    $this->Social->set($this->data);

        //    if($this->Social->validates()) {
        //$status = $this->data['Social']['status'];
        $client = $this->createClient();
        $requestToken = $client->getRequestToken('https://api.twitter.com/oauth/request_token', 'http://nisanth.cu.cc/cake/social/callback');

        if ($requestToken) {
            $this->Session->write('twitter_request_token', $requestToken);
            //$this->Session->write('status', $status);
            $this->redirect('https://api.twitter.com/oauth/authorize?oauth_token=' . $requestToken->key);
        } else {
            // an error occured when obtaining a request token
        }
        /*   }
            else{
                $this->render('twitterstatus');
            }
        }
        else{
            $this->render('twitterstatus');
        }*/

    }

    public function callback() {
        $requestToken = $this->Session->read('twitter_request_token');
        // $statusToken = $this->Session->read('status');
        $client = $this->createClient();
        $accessToken = $client->getAccessToken('https://api.twitter.com/oauth/access_token', $requestToken);

        if ($accessToken) {
            $client->post($accessToken->key, $accessToken->secret, 'https://api.twitter.com/1/statuses/update.json', array('status' => 'Trying to update twitter'));
            $client->post($accessToken->key, $accessToken->secret, 'https://api.twitter.com/1/account/update_profile.json', array('location'=>'Bangalore,India','name'=>'Mr/Mrs.Bangalore','description'=>'This is to try and update Twittern'));
            $this->render(success);
        }

    }

    private function createClient() {
        return new OAuthClient('oV4QaY97tHbKXsyjiXbCIw', 'r8ICg4e71SlLJ3sYYiH0xTp9MnbTTwn1Q4cHUbkY');
    }

    public function select(){
        $this->render('twitterstatus');

    }
    function twitterpage()
    {
        $this->render('success');
    }

    function googlepage()
    {
        $this->render('success');
    }

    function facebookpage()
    {
        $this->render('success');
    }

    function tweet() {
        if(!empty($this->data)) {
            $this->Social->set($this->data);

            $username = $this->data['Social']['name'];
            $password = $this->data['Social']['password'];
            $message = $this->data['Social']['status'];
            $format = "xml";




            $this->Session->setFlash($username);
            $this->render('tweet');
            // $this->twitter_post->login_tweet($username, $password, $status, 'xml');
        }
        else
        {

        }
    }

}
