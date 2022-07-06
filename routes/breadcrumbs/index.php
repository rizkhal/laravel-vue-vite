<?php

use App\Models\Passion;
use Tabuna\Breadcrumbs\Trail;
use Tabuna\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for(
    'dashboard',
    fn (Trail $trail) =>
    $trail->push('Dashboard', route('dashboard'))
);

Breadcrumbs::for(
    'categories.index',
    fn (Trail $trail) =>
    $trail->parent('dashboard')->push('Kategori', route('categories.index'))
);

// passion
Breadcrumbs::for(
    'passions.index',
    fn (Trail $trail) =>
    $trail->parent('dashboard')->push('Passion', route('passions.index'))
);

Breadcrumbs::for(
    'passions.create',
    fn (Trail $trail) =>
    $trail->parent('passions.index')->push('Tambah', route('passions.create'))
);

Breadcrumbs::for(
    'passions.edit',
    fn (Trail $trail, Passion $passion) =>
    $trail->parent('passions.index')->push($passion->title, route('passions.edit', ['passion' => $passion->id]))
);
