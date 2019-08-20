<?php
namespace App\Repositories;

use App\User;

class UserRepository implements BaseRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all(array $related = null){        
        return $this->user->all();
    }

    public function get($id, array $related = null){
        $result  = $this->user->get($id);
        if(!$related){
            return $result;
        } else {
            // there we can add sole related data from other sources
            return $result;
        }
            
    }

    public function create(array $data){
        return $this->user->create($data);
    }

    public function update(array $data){
        return $this->user->update($data);
    }

    public function delete($id){
        return $this->user->delete($id);
    }
}
