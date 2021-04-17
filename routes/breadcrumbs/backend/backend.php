<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.projects.index', function ($trail) {
    $trail->push('Projects', route('admin.projects.index'));
});

Breadcrumbs::for('admin.project.create', function ($trail) {
    $trail->push('Projects Create', route('admin.project.create'));
});

Breadcrumbs::for('admin.projects.edit', function ($trail) {
    $trail->push('Projects Edit', route('admin.projects.edit',1));
});

Breadcrumbs::for('admin.file_manager.index', function ($trail) {
    $trail->push('File Manager', route('admin.file_manager.index'));
});

Breadcrumbs::for('admin.gallery.index', function ($trail) {
    $trail->push('Gallery', route('admin.gallery.index'));
});
Breadcrumbs::for('admin.awards.index', function ($trail) {
    $trail->push('Awards', route('admin.awards.index'));
});
Breadcrumbs::for('admin.awards.create', function ($trail) {
    $trail->push('Awards', route('admin.awards.create'));
});
Breadcrumbs::for('admin.awards.edit', function ($trail) {
    $trail->push('Awards', route('admin.awards.edit',1));
});

Breadcrumbs::for('admin.news.index', function ($trail) {
    $trail->push('News', route('admin.news.index'));
});

Breadcrumbs::for('admin.banners.index', function ($trail) {
    $trail->push('Banners', route('admin.banners.index'));
});

Breadcrumbs::for('admin.banners.edit', function ($trail) {
    $trail->push('Banners Edit', route('admin.banners.edit',1));
});

Breadcrumbs::for('admin.news.edit', function ($trail) {
    $trail->push('News Edit', route('admin.news.edit',1));
});

Breadcrumbs::for('admin.news.create', function ($trail) {
    $trail->push('News Creator', route('admin.news.create'));
});


require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
