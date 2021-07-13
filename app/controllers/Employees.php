<?php


class Employees extends Controller
{
    /*
     * renders all employees
     */
    public function index()
    {
        $this->view('employees/index');
    }

    public function getEmployees()   {
        $employees = $this->model('Employee')->employeesList();
        header('Content-Type: application/json');
        echo json_encode($employees);
    }


    /*
     * renders create new employee page
     */
    public function createEmployee()
    {
        $this->view('employees/create');
    }

    /*
     * creates new employee
     */
    public function createEmployeeSave()
    {
        $data = array();
        $data['name'] = $_POST['name'];
        $data['address'] = $_POST['address'];
        $this->model('Employee')->createEmployee($data);
        header("Location: " . URL . "public/employees/index");
    }



}