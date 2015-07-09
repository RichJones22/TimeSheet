<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TimeSheetsController extends Controller {

    /**
     * Create a new timesheets controller instance
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all timesheets.
     * @return string
     */
    public function index()
    {
        return 'all time sheets';
    }

    /**
     * Show a page to create a new timesheet.
     * @return \Response
     */
    public function create()
    {
        // get list of existing time sheets?

        // load a view to create a new time sheet
        return view('timesheets.create');

    }

}
