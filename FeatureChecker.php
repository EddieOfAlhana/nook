<?php

class FeatureChecker
{
    protected $features = array();

    public function hasFeature($feature) {
        if (!$this->setByGetRequest($feature)) {
            $this->setByCookie($feature);
        }
        return array_key_exists($feature, $this->features) && $this->features[$feature];
    }

    public function setByGetRequest($feature) {
        if (isset($_GET[$feature])) {
            $this->features[$feature] = $_GET[$feature];
            setcookie($feature, (bool)$_GET[$feature]);
        }
        return isset($_GET[$feature]);
    }

    public function setByCookie($feature) {
        $this->features[$feature] = (isset($_COOKIE[$feature]) && $_COOKIE[$feature]);
    }
}