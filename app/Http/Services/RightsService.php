<?php
namespace App\Services;

use App\Repositories\UserRepository;
use App\Repositories\GroupRepository;
use App\Repositories\RoleRepository;

class RightsService{
    
    private $userRepository;

    private $groupRepository;

    private $roleRepository;

    function __construct(
        UserRepository $userRepository, 
        GroupRepository $groupRepository,
        RoleRepository $roleRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->groupRepository = $groupRepository;
        $this->roleRepository = $roleRepository;
    }



    public function index()
    {
        $users = $this->userRepository->all();
        $groups = $this->groupRepository->all();
        $roles = $this->roleRepository->all();
        
        $data = [
            'users' => $users,
            'groups' => $groups,
            'roles' => $roles
        ];

        return $data;
    }
}