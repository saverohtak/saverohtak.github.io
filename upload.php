<?php
session_start();
require_once __DIR__ . '/src/Facebook/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '1555480191431000',
    'app_secret' => '7650b67fc086afcec9da4310c34b9ff8',
    'default_graph_version' => 'v2.4',
]);
$helper = $fb->getCanvasHelper();
$permissions = ['email', 'publish_actions']; // optional
try {
    if (isset($_SESSION['facebook_access_token'])) {
        $accessToken = $_SESSION['facebook_access_token'];
    } else {
        $accessToken = $helper->getAccessToken();
    }
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
if (isset($accessToken)) {
    if (isset($_SESSION['facebook_access_token'])) {
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    } else {
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        // OAuth 2.0 client handler
        $oAuth2Client = $fb->getOAuth2Client();
        // Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }

    // validating the access token
    try {
        $request = $fb->get('/me');
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        if ($e->getCode() == 190) {
            unset($_SESSION['facebook_access_token']);
            $helper = $fb->getRedirectLoginHelper();
            $loginUrl = $helper->getLoginUrl('https://apps.facebook.com/APP_NAMESPACE/', $permissions);
            echo "<script>window.top.location.href='".$loginUrl."'</script>";
            exit;
        }
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    try {
        // message must come from the user-end
        $data = ['source' => $fb->fileToUpload(__DIR__.'/img/pray_for_rohtak.jpg'), 'message' => 'my photo'];
        $request = $fb->post('/me/photos', $data);
        $response = $request->getGraphNode()->asArray();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    echo $response['id'];

    // Now you can redirect to another page and use the
    // access token from $_SESSION['facebook_access_token']
} else {
    $helper = $fb->getRedirectLoginHelper();
    $loginUrl = $helper->getLoginUrl('https://apps.facebook.com/APP_NAMESPACE/', $permissions);
    echo "<script>window.top.location.href='".$loginUrl."'</script>";
}