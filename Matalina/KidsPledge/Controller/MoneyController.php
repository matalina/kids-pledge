<?php

use Matalina\KidsPledge\Interfaces\MoneyInterface;

class MoneyController extends \BaseController {
protected $money;

    public function __construct(MoneyInterface $money)
    {
        $this->money = $money;
    }
	/**
	 * Display a listing of the resource.
	 *
	 *@return Response
	 */
	public function index()
	{
		$money = $this->money->getAll();
		View::share('money',$money);
		return View::make('money.list');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('money.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$check = $this->money->create();
		if($check) {
			Session::flash('success','Money created!');
			return Redirect::action('MoneyController@index');
		}
		else {
			return Redirect::action('MoneyController@create')->withErrors($this->money->getErrors())->withInput();
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
		$money = $this->money->getByID((int) $id);
		View::share('money',$money);
		return View::make('money.show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$money = $this->money->getByID((int) $id);
		View::share('money',$money);
		return View::make('money.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$check = $this->money->edit((int) $id);
		if($check) {
			Session::flash('success','Money updated!');
			return Redirect::action('MoneyController@index');
		}
		else {
			return Redirect::action('MoneyController@edit')->withErrors($this->money->getErrors())->withInput();
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
		$check = $this->money->delete((int) $id);
		if($check) {
			Session::flash('success','Money deleted!');
			return Redirect::action('MoneyController@index');
		}
		else {
			return Redirect::action('MoneyController@index')->withErrors($this->money->getErrors());
		}
	}

}
