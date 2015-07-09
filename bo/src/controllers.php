<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Doctrine\DBAL\Configuration;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage')
;

$app->get('/list', function(Request $request) use ($app) {
    $req = 'SELECT a.no, a.sigle, s.nostand AS ref, a.nostand, s.lat, s.lng FROM ref_stand s LEFT JOIN ref_assos a ON s.nostand = a.nostand';
    $res = $app['db']->fetchAll($req);
    return $app->json($res);
});


$app->get('/get', function(Request $request) use ($app) {
    $req = 'SELECT a.*, s.* FROM ref_assos a LEFT JOIN ref_stand s ON s.nostand = a.nostand WHERE a.no = ?';
    $stmt = $app['db']->executeQuery($req, array($request->get('no')));
    $res = $stmt->fetch();
    return $app->json($res);
});

$app->get('/delete', function(Request $request) use ($app) {
    $res = $app['db']->delete('ref_stand', array('nostand' => $request->get('ref')));
    return $app->json($res);
});

$app->get('/search', function(Request $request) use ($app) {

    $s = $request->get('s');

    $stmt = $app['db']->prepare('
      SELECT a.no, a.sigle, s.nostand AS ref, a.nostand, s.lat, s.lng, a.clairecie, a.clairrub1
      FROM ref_assos a LEFT JOIN ref_stand s ON s.nostand = a.nostand
      WHERE a.sigle LIKE ? OR a.objet LIKE ?');

    $stmt->bindValue(1,'%'.$s.'%');
    $stmt->bindValue(2,'%'.$s.'%');

    $stmt->execute();
    $res = $stmt->fetchAll();
    return $app->json($res);
});

$app->get('/save', function(Request $request) use ($app) {

    $sql = "SELECT * FROM ref_stand WHERE nostand = ?";
    $s = $app['db']->fetchAssoc($sql, array($request->get('nostand')));

    //
    if(!$s)
    {
        $s = $app['db']->insert('ref_stand', array(
          'nostand' => $request->get('nostand'),
          'lat' => $request->get('lat'),
          'lng' => $request->get('lng')
        ));
    }
    else
    {
        $s = $app['db']->update('ref_stand', array(
            'lat' => $request->get('lat'),
            'lng' => $request->get('lng')
        ),array('nostand' => $request->get('nostand'))
        );
    }

    $sql = "SELECT  a.*, s.*, s.nostand AS ref FROM ref_stand s LEFT JOIN ref_assos a ON s.nostand = a.nostand WHERE s.nostand = ?";
    $s = $app['db']->fetchAssoc($sql, array($request->get('nostand')));

    return $app->json($s);
});

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
