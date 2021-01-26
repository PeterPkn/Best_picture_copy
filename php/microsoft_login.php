<?php
    /*
     * Links:
     * https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=e0815f2b-43c6-4f43-a71e-537fa2a93e60&scope=user.read&prompt=select_account&response_type=code
     * https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps/ApplicationMenuBlade/Overview/quickStartType//sourceType/Microsoft_AAD_IAM/appId/e0815f2b-43c6-4f43-a71e-537fa2a93e60/objectId/03b56ad2-81a8-4341-9e11-87031235fe3c/isMSAApp//defaultBlade/Overview/appSignInAudience/AzureADMyOrg/servicePrincipalCreated/true
     */

    $client_id = "e0815f2b-43c6-4f43-a71e-537fa2a93e60";
    $redirect_uri = urlencode("http://localhost/Schule/4AI_2021/ITP/BestPicture/php/authtest/");
    $url = "https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=$client_id&scope=user.read&prompt=select_account&response_type=code&redirect_uri=$redirect_uri";

    /*
     * Liefert die URL zu der Microsoft Login Seite
     */
    function get_login_url() {
        $client_id = "e0815f2b-43c6-4f43-a71e-537fa2a93e60";
        $redirect_uri = urlencode("https://bestpictureproject.ml/php/authtest/");
        $url = "https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=$client_id&scope=user.read&prompt=select_account&response_type=code&redirect_uri=$redirect_uri";
        return $url;
    }

    /*
     * Liefert den Token von einem User, welcher sich auf der Microsoft Login Seite angemeldet hat
     * $code: Rückgabewert von der Microsoft OAuth
     */
    function get_token($code) {
        $client_id = "e0815f2b-43c6-4f43-a71e-537fa2a93e60";
        $client_secret = urlencode(getenv("MS_OAUTH_SECRET"));
        $redirect_uri = urlencode("https://bestpictureproject.ml/php/authtest/"); // todo auf serverurl setzen
        $url = "https://login.microsoftonline.com/common/oauth2/v2.0/token";

        $query = "client_id=$client_id&scope=user.read&code=$code&grant_type=authorization_code&redirect_uri=$redirect_uri&client_secret=$client_secret";

        $options = array(
            'http' => array(
                'method'  => 'POST',
                'header'=>  "Content-type: application/x-www-form-urlencoded\n" . "Accept: application/json\n",
                'content'=> $query
            )
        );

        $context  = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        if ($result == false)
            return null;
        $response = json_decode($result, true);
        return $response["access_token"];
    }

    /*
     * Liefert Benutzerinfos des Tokens
     */
    function get_userinfo($token) {
        $url = "https://graph.microsoft.com/v1.0/me";

        $options = array(
            'http' => array(
                'method'  => 'GET',
                'header'=>  "Authorization: Bearer $token\nAccept: application/json\n",
            )
        );

        $context  = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        if ($result == false)
            return null;
        $response = json_decode($result, true);

        return $response;
    }