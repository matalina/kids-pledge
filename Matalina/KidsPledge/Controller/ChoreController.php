<?php

use Matalina\KidsPledge\Interfaces\ChoreInterface;

class ChoreController extends \BaseController {
protected $chore;

    public function __construct(ChoreInterface $chore)
    {
        $this->chore = $chore;
    }
	/**
	 * Display a listing of the resource.
	 *
	 *@return Response
	 */
	public function index()
	{
		$chore = $this->chore->getAll();
		View::share('chore',$chore);
		return View::make('chore.list');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('chore.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$check = $this->chore->create();
		if($check) {
			Session::flash('success','Chore created!');
			return Redirect::action('ChoreController@index');
		}
		else {
			return Redirect::action('ChoreController@create')->withErrors($this->chore->getErrors())->withInput();
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
		$chore = $this->chore->getByID((int) $id);
		View::share('chore',$chore);
		return View::make('chore.show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$chore = $this->chore->getByID((int) $id);
		View::share('chore',$chore);
		return View::make('chore.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$check = $this->chore->edit((int) $id);
		if($check) {
			Session::flash('success','Chore updated!');
			return Redirect::action('ChoreController@index');
		}
		else {
			return Redirect::action('ChoreController@edit')->withErrors($this->chore->getErrors())->withInput();
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
		$check = $this->chore->delete((int) $id);
		if($check) {
			Session::flash('success','Chore deleted!');
			return Redirect::action('ChoreController@index');
		}
		else {
			return Redirect::action('ChoreController@index')->withErrors($this->chore->getErrors());
		}
	}

}
