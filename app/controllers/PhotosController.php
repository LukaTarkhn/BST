<?php


namespace app\controllers;


class PhotosController extends AppController
{
    public function  indexAction() {
        $lang = \ibuild\App::$app->getProperty('language');
        $media = \R::find('media');

        $this->setMeta(
            'black sea towers media',
            'utf-8',
            'black sea towers media, photos',
            'BST, black sea towers',
            'lukatarkhnishvili.com'
        );
    
        $this->set(compact('media'));

    }
}