<?php
namespace App\Repositories;

use App\Group;

class GroupRepository implements BaseRepositoryInterface
{
    protected $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    public function all(array $related = null){
        return $this->group->all();
    }

    public function get($id, array $related = null){
        $result  = $this->group->get($id);
        if(!$related){
            return $result;
        } else {
            // there we can add sole related data from other sources
            return $result;
        }
            
    }

    public function create(array $data){
        return $this->group->create($data);
    }

    public function update(array $data){
        return $this->group->update($data);
    }

    public function delete($id){
        return $this->group->delete($id);
    }
}
