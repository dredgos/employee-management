<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IRepository\EmployeeRepositoryInterface;
use App\Contracts\UserRepositoryInterface;

class EmployeeController extends Controller
{
    private $employee;

    public function __construct(UserRepositoryInterface $employee)
    {
        $this->employee = $employee;
    }
    
    public function index()
    {
        
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function update()
    {
        # code...
    }

    public function destroy()
    {

    }

}
