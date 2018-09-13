<?php

use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;
use App\Mineral;

Breadcrumbs::for('mineral.index', function (BreadcrumbsGenerator $trail) {
    $trail->parent('welcome');
    $trail->push('Список минералов', route('mineral.index'));
});

Breadcrumbs::for('mineral.create', function (BreadcrumbsGenerator $trail) {
    $trail->parent('mineral.index');
    $trail->push('Создать минерал', route('mineral.create'));
});

Breadcrumbs::for('mineral.edit', function (BreadcrumbsGenerator $trail, Mineral $mineral) {
    $trail->parent('mineral.index');
    $trail->push($mineral->ru_name, route('mineral.show', $mineral));
});

Breadcrumbs::for('mineral.show', function (BreadcrumbsGenerator $trail, Mineral $mineral) {
    $trail->parent('mineral.index');
    $trail->push($mineral->ru_name, route('mineral.show', $mineral));
});

Breadcrumbs::for('welcome', function (BreadcrumbsGenerator $trail) {
    $trail->push('Поиск', route('home'));
});

Breadcrumbs::for('chemical.number', function (BreadcrumbsGenerator $trail) {
    $trail->parent('welcome');
    $trail->push('Поиск по элементам', route('chemical.number'));
});