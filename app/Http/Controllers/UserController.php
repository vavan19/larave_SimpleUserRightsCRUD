<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Services\RightsService;

class UserController extends Controller
{
    protected $userRepository;

    protected $rightsService;

    function __construct(UserRepository $userRepository, RightsService $rightsService)
    {
        $this->userRepository = $userRepository;
        $this->rightsService = $rightsService;
    }

    public function index()
    {
        $data = $this->rightsService->index();

        return View('excel_parser.index', compact('data'));
    }
}
