<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function show(int $id)
    {
        
    }

    public function create(Request $request)
    {

    }

    public function update(Request $request)
    {
        # code...
    }

    public function destroy(int $id)
    {
        
    }

}
