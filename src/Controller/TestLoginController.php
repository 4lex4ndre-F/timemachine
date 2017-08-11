<?php


namespace Controller;

/**
 * J'ai créé cette classe pour tester une fonctionnalité Login
 * Faut juste que j'arrive à appeler cette classe quand on clique sur enregistrer
 *
 * @author FRACTAL
 */
class TestLoginController {
    
    public function loginAction ()
    {
        echo '<pre>'; var_dump($_POST); echo '</pre>';
    }
    
}
