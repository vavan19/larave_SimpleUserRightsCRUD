<?php
namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function all(array $related = null);

    public function get($id, array $related = null);

    public function create(array $data);

    public function update(array $data);

    public function delete($id);
}