<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 06/12/2017
 * Time: 10:55
 */

namespace Controller;


use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;

class BookController implements ControllerProviderInterface
{

    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {

        $indexController = $app['controllers_factory'];
        $indexController->get("/", array($this, 'index'))->bind('book_index');
        $indexController->get("/show/{id}", array($this, 'show'))->bind('book_show');
        $indexController->match("/create", array($this, 'create'))->bind('book_create');
        $indexController->match("/update/{id}", array($this, 'update'))->bind('book_update');
        $indexController->get("/delete/{id}", array($this, 'delete'))->bind('book_delete');
        return $indexController;
    }
}