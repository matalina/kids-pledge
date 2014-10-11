<?php

use Matalina\KidsPledge\Interfaces\SettingInterface;

class SettingController extends \BaseController {
    protected $setting;

    public function __construct(SettingInterface $setting)
    {
        $this->setting = $setting;
    }
    /**
     * Display a listing of the resource.
     *
     *@return Response
     */
    public function index()
    {
        $setting = $this->setting->getAll();
        View::share('setting',$setting);
        return View::make('setting.list');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('setting.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $check = $this->setting->create();
        if($check) {
            Session::flash('success','Setting created!');
            return Redirect::action('SettingController@index');
        }
        else {
            return Redirect::action('SettingController@create')->withErrors($this->setting->getErrors())->withInput();
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
        $setting = $this->setting->getByID((int) $id);
        View::share('setting',$setting);
        return View::make('setting.show');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $setting = $this->setting->getByID((int) $id);
        View::share('setting',$setting);
        return View::make('setting.edit');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $check = $this->setting->edit((int) $id);
        if($check) {
            Session::flash('success','Setting updated!');
            return Redirect::action('SettingController@index');
        }
        else {
            return Redirect::action('SettingController@edit')->withErrors($this->setting->getErrors())->withInput();
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
        $check = $this->setting->delete((int) $id);
        if($check) {
            Session::flash('success','Setting deleted!');
            return Redirect::action('SettingController@index');
        }
        else {
            return Redirect::action('SettingController@index')->withErrors($this->setting->getErrors());
        }
    }

}
