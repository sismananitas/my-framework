<?php

/**
 * CARGA UNA VISTA EN SMARTY
 * 
 * @param string $view
 * @param array $variables
 * @return string $template
 */
function view($view, $variables = []) {

    $smarty = new Smarty(); // Se crea un objeto smarty para las vistas

    Utils::getConstantSmarty($smarty, $view);
    
    // Carga las variables en la vista
    if (count($variables) > 0) {

        foreach($variables as $name => $value) {
            $smarty->assign($name, $value);
        }
    }

    $view = str_replace('.', '/', $view); // Reemplaza los puntos de la cadena por slashes
    
    // Revisa la vista solicitada
    if (is_file(views_path . $view . '.html')) {
        $template = views_path . $view . '.html';
        
    } else {
        die('<h1>No se encontró la vista.</h1>');
    }
    header('Content-type: text/html');
    return $smarty->display($template); // Devuelve la vista
}

/**
 * REDIRECCIONA A UN SITIO ESPECÍFICO
 * 
 * @param string $request
 * @return void
 */
function route($request) {
    header('location: ' . $request);
    exit;
}

/**
 * CIFRA UNA CONTRASEÑA
 * 
 * @param string $password
 * @return string
 */
function encrypt($password) {
    return sha1($password);
}

function json_response($message = null, $code = 200)
{
    // clear the old headers
    header_remove();
    // set the actual code
    http_response_code($code);
    // set the header to make sure cache is forced
    header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
    // treat this as json
    header('Content-Type: application/json');
    $status = array(
        200 => '200 OK',
        400 => '400 Bad Request',
        422 => 'Unprocessable Entity',
        500 => '500 Internal Server Error'
        );
    // ok, validation error, or failure
    header('Status: '.$status[$code]);
    // return the encoded json
    return json_encode($message);
}