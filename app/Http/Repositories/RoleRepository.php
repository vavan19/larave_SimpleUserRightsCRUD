<?php
namespace App\Repositories;

use App\Role;

class RoleRepository implements BaseRepositoryInterface
{
    protected $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function all(array $related = null){
        return $this->role->all();
    }

    public function get($id, array $related = null){
        $result  = $this->role->get($id);
        if(!$related){
            return $result;
        } else {
            // there we can add sole related data from other sources
            return $result;
        }
            
    }

    public function create(array $data){
        return $this->role->create($data);
    }

    public function update(array $data){
        return $this->role->update($data);
    }

    public function delete($id){
        return $this->role->delete($id);
    }
}
