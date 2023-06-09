<?php


class UserModel {
    private $apiUrl;

    public function __construct($apiUrl) {
        $this->apiUrl = $apiUrl;
    }

    public function fetchAllUsers() {
        $url = $this->apiUrl . '/users';
        $response = $this->makeRequest($url);
        return json_decode($response, true);
    }

    public function fetchUserById($id) {
        $url = $this->apiUrl . '/users/' . $id;
        $response = $this->makeRequest($url);
        return json_decode($response, true);
    }

    private function makeRequest($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}
?>
