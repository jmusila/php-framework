<?php

/**
 * App core class
 * Created URL & loads core controller
 * URL FORMAT - /controller/method/params
 */
class Core
{
    protected $currentController = 'Posts';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        // echo $url;

        if (file_exists('../app/controllers' . ucwords($url[0]) . '.php')) {
            echo 'Gets here';
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/contollers' . $this->currentController . '.php';

        $this->currentController = new $this->currentController;
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
    }
}
