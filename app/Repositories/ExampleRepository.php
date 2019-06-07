<?php

namespace App\Repositories;

/**
 * repository bertujuan untuk memisahkan bisnis logic
 * yang biasanya ada dicontroller dipindahkan ke repository
 * function function yang harus ada ketika membuat repository
 * @all, @create, @update, @delete, @show
 * karena implement dari RepositoryInterface
 */
class ExampleRepository extends Repository {
    
    /*
    public function all() {}

    public function create($data) {}

    public function update($data,$id) {}

    public function delete($id) {}

    public function show($id) {}
    */
}