<?php

namespace app\controllers;

use ibuild\Cache;

class RuController extends AppController {
    public function indexAction() {
        $aboutus = \R::find('aboutus');
        $finishedProjects = \R::find('finished');
        $currentWorks = \R::find('current', 'ORDER BY id DESC LIMIT 8');
        $floors = \R::find('floors');
        $offers = \R::find('offers');
        $media = \R::find('media');
        $apartments = \R::findAll('apartments2');
        
        $this->setMeta(
            'Black Sea Towers – жилой комплекс в Батуми',
            'utf-8',
            'Black Sea Towers - новый высотный жилой комплекс премиум-класса в центре Батуми. В продаже недорогие квартиры и апартаменты от застройщика Real Palace',
            'black sea towers, black sea towers batumi,black sea tower,black sea towers батуми,апартаменты в black sea towers batumi,black sea towers,недвижимость батуми,real palace,новостройки батуми, батуми апартамент,батуми квартира купить,стадион в батуми, строительство, строитель, инвестиции, Грузия, отель, сакартвело, вила, вилла, коттедж, здания, здания, гостиницы, гостиницы, промышленные, индивидуальные, жилые, лидер, лидер отрасли, механизация, механизация, техника, строительная площадка, бетон, дизайн, качество, контроль качества, технологии, строительные материалы, Кавказ, постсоветский, постсоветский, постсоветский, Тбилиси, Батуми, многоквартирный магазин, многоквартирный дом, железобетон, каркас, монолит, монолитный, отделочный, фасад, транспорт, современный, REAL PALACE, realpalace.ge',
            'lukatarkhnishvili.com'
        );

        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks', 'floors', 'offers', 'apartments', 'media'));

        setcookie('languages', 'RU', time() + 3600 * 24, '/');
    }

    public function  photosAction() {
        $this->setMeta(
            'black sea towers media',
            'utf-8',
            'black sea towers media, photos',
            'BST, black sea towers',
            'lukatarkhnishvili.com'
        ); 
    }

}