<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('admin.dashboard', function($trail){
    $trail->push('Beranda',route('admin.dashboard'));
});

Breadcrumbs::for('admin.author.index', function($trail){
    $trail->push('Beranda',route('admin.dashboard'));
    $trail->push('Penulis',route('admin.author.index'));
});

Breadcrumbs::for('admin.author.create', function($trail){
    $trail->push('Beranda',route('admin.dashboard'));
    $trail->push('Penulis',route('admin.author.index'));
    $trail->push('Tambah Penulis',route('admin.author.create'));
});

Breadcrumbs::for('admin.author.edit', function($trail,$author){
    $trail->push('Beranda',route('admin.dashboard'));
    $trail->push('Penulis',route('admin.author.index'));
    $trail->push('Edit Penulis',route('admin.author.edit',$author));
});


Breadcrumbs::for('admin.book.index', function($trail){
    $trail->push('Beranda',route('admin.dashboard'));
    $trail->push('Buku',route('admin.book.index'));
});

Breadcrumbs::for('admin.book.create', function($trail){
    $trail->push('Beranda',route('admin.dashboard'));
    $trail->push('Buku',route('admin.book.index'));
    $trail->push('Tambah Buku',route('admin.book.create'));
});

Breadcrumbs::for('admin.book.edit', function($trail,$book){
    $trail->push('Beranda',route('admin.dashboard'));
    $trail->push('Buku',route('admin.book.index'));
    $trail->push('Edit Buku',route('admin.book.edit',$book));
});


