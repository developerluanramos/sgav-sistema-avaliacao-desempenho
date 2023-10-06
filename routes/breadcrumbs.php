<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('servidor', function (BreadcrumbTrail $trail) {
    $trail->push('Servidores', route('servidor.index'));
});

Breadcrumbs::for('servidor.create', function ($trail) {
    $trail->parent('servidor');
    $trail->push('Novo Servidor', route('servidor.create'));
});

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('fornecedor', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
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
