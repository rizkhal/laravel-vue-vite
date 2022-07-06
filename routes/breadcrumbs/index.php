<?php

use Tabuna\Breadcrumbs\Trail;
use Tabuna\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for(
    'dashboard',
    fn (Trail $trail) =>
    $trail->push('Dashboard', route('dashboard'))
);
