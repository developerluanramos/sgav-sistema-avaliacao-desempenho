<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('usuario', function (BreadcrumbTrail $trail) {
    $trail->parent('Dashboard' , route('dashboard.index'));
    $trail->push('Usuarios', route('usuario.index'));
});

Breadcrumbs::for('usuario.create', function ($trail) {
    $trail->parent('usuario');
    $trail->push('Novo Usuario', route('usuario.create'));
});

Breadcrumbs::for('usuario.edit', function ($trail, $user) {
    $trail->parent('usuario');
    $trail->push('Edição de Usuario', route('usuario.edit', $user));
});


Breadcrumbs::for('servidor', function (BreadcrumbTrail $trail) {
    $trail->parent('Dashboard' , route('dashboard.index'));
    $trail->push('Servidores', route('servidor.index'));
});

Breadcrumbs::for('servidor.create', function ($trail) {
    $trail->parent('servidor');
    $trail->push('Novo Servidor', route('servidor.create'));
});

Breadcrumbs::for('servidor.edit', function ($trail, $servidor) {
    $trail->parent('servidor');
    $trail->push('Edição de Servidor', route('servidor.edit', $servidor));
});

Breadcrumbs::for('Dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

Breadcrumbs::for('fornecedor', function (BreadcrumbTrail $trail) {
    $trail->parent('Dashboard' , route('dashboard.index'));
    $trail->push('Fornecedores', route('fornecedor.index'));
});
Breadcrumbs::for('fornecedor.create', function (BreadcrumbTrail $trail) {
    $trail->parent('fornecedor');
    $trail->push('Novo Fornecedor', route('fornecedor.create'));
});
Breadcrumbs::for('fornecedor.edit', function (BreadcrumbTrail $trail, $fornecedor) {
    $trail->parent('fornecedor');
    $trail->push('Edição de Fornecedor', route('fornecedor.edit', $fornecedor));
});
Breadcrumbs::for('fornecedor.show', function (BreadcrumbTrail $trail) {
    $trail->parent('fornecedor');
    $trail->push('Fornecedor', route('fornecedor.show'));
});

Breadcrumbs::for('cargo', function (BreadcrumbTrail $trail) {
    $trail->parent('Dashboard' , route('dashboard.index'));
    $trail->push('Cargos', route('cargo.index'));
});
Breadcrumbs::for('cargo.create', function (BreadcrumbTrail $trail) {
    $trail->parent('cargo');
    $trail->push('Novo Cargo', route('cargo.create'));
});
Breadcrumbs::for('cargo.edit', function (BreadcrumbTrail $trail, $fornecedor) {
    $trail->parent('cargo');
    $trail->push('Edição de Cargo', route('cargo.edit', $fornecedor));
});
Breadcrumbs::for('cargo.show', function (BreadcrumbTrail $trail) {
    $trail->parent('cargo');
    $trail->push('Cargo', route('cargo.show'));
});
