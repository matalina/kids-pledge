<?php

use Matalina\KidsPledge\Interfaces\PunishmentInterface;

class PunishmentController extends \BaseController {
    protected $punishment;

    public function __construct(PunishmentInterface $punishment)
    {
        $this->punishment = $punishment;
    }
    /**
     * Display a listing of the resource.
     *
     *@return Response
     */
    public function index()
    {
        $punishment = $this->punishment->getAll();
        View::share('punishment',$punishment);
        return View::make('punishment.list');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('punishment.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $check = $this->punishment->create();
        if($check) {
            Session::flash('success','Punishment created!');
            return Redirect::action('PunishmentController@index');
        }
        else {
            return Redirect::action('PunishmentController@create')->withErrors($this->punishment->getErrors())->withInput();
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
        $punishment = $this->punishment->getByID((int) $id);
        View::share('punishment',$punishment);
        return View::make('punishment.show');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $punishment = $this->punishment->getByID((int) $id);
        View::share('punishment',$punishment);
        return View::make('punishment.edit');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $check = $this->punishment->edit((int) $id);
        if($check) {
            Session::flash('success','Punishment updated!');
            return Redirect::action('PunishmentController@index');
        }
        else {
            return Redirect::action('PunishmentController@edit')->withErrors($this->punishment->getErrors())->withInput();
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
        $check = $this->punishment->delete((int) $id);
        if($check) {
            Session::flash('success','Punishment deleted!');
            return Redirect::action('PunishmentController@index');
        }
        else {
            return Redirect::action('PunishmentController@index')->withErrors($this->punishment->getErrors());
        }
    }

}
