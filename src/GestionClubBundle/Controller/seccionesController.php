<?php

namespace GestionClubBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * secciones controller.
 *
 */
class seccionesController extends Controller
{
    /**
     * Lists all secciones entities.
     *
     */
    public function indexAction()
    {
        
        return $this->render('secciones/index.html.twig');
    }

    /**
     * Creates a nosotros page.
     *
     */
    public function nosotrosAction()
    {
        
        return $this->render('secciones/nosotros.html.twig');
    }

     /**
     * Creates a nosotros page.
     *
     */
    public function serviciosAction()
    {
        
        return $this->render('secciones/servicios.html.twig');
    }
    
     /**
     * Creates a nosotros page.
     *
     */
    public function contactoAction()
    {
        
        return $this->render('secciones/contacto.html.twig');
    }
    
   
}
