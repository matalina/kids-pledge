<?php

use Matalina\KidsPledge\Interfaces\AllowanceInterface;

class AllowanceController extends \BaseController
{
    protected $allowance;

    public function __construct(AllowanceInterface $allowance)
    {
        $this->allowance = $allowance;
    }
	/**
	 * Display a listing of the resource.
	 *
	 *@return Response
	 */
	public function index()
	{
		$allowance = $this->allowance->getAll();
		View::share('allowance',$allowance);
		return View::make('allowance.list');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('allowance.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$check = $this->allowance->create();
		if($check) {
			Session::flash('success','Allowance created!');
			return Redirect::action('AllowanceController@index');
		}
		else {
			return Redirect::action('AllowanceController@create')->withErrors($this->allowance->getErrors())->withInput();
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$allowance = $this->allowance->getByID((int) $id);
		View::share('allowance',$allowance);
		return View::make('allowance.show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$allowance = $this->allowance->getByID((int) $id);
		View::share('allowance',$allowance);
		return View::make('allowance.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$check = $this->allowance->edit((int) $id);
		if($check) {
			Session::flash('success','Allowance updated!');
			return Redirect::action('AllowanceController@index');
		}
		else {
			return Redirect::action('AllowanceController@edit')->withErrors($this->allowance->getErrors())->withInput();
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$check = $this->allowance->delete((int) $id);
		if($check) {
			Session::flash('success','Allowance deleted!');
			return Redirect::action('AllowanceController@index');
		}
		else {
			return Redirect::action('AllowanceController@index')->withErrors($this->allowance->getErrors());
		}
	}


}
