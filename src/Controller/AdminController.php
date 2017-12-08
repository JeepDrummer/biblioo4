<?php
/**
 * Created by PhpStorm.
 * User: crespeau
 * Date: 08/12/2017
 * Time: 10:49
 */

namespace Controller;


use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;

class AdminController implements ControllerProviderInterface
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
        // TODO: Implement connect() method.
        $indexController = &app[''];
        $indexController->get("/", array($this, 'index'))->bind('admin_index');
        //$indexController->get("/createadmin", array($this, ''))->bind('');
        //$indexController->get("/createressource", array($this, ''))->bind('');
        //$indexController->get("/createtraining", array($this, ''))->bind('');
        //$indexController->get("/showressource", array($this, ''))->bind('');
        return $indexController;
    }

    /**
     * List all entities
     *
     */
    public function index(Application $app) {

        //$em = $app['db.orm.em'];
        //$entities = $em->getRepository('Entity\Reservation')->findAll();

        return $app['twig']->render('Acme/admin.html.twig', array(
            //'entities' => $entities
        ));
    }
}