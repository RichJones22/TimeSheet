<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CustomersController extends Controller {


    /**
     * Create a new Customers controller instance
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all Customers.
     * @return string
     */
    public function index()
    {
        return 'all Customers';
    }

    /**
     * Show a page to create a new Customer.
     * @return \Response
     */
    public function create()
    {
        // get list of existing time sheets?

        // load a view to create a new time sheet
        return view('customers.create');

    }


}
