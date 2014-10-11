<?php

use Matalina\KidsPledge\Interfaces\EventInterface;

class EventController extends \BaseController {
    protected $event;

    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }
    /**
     * Display a listing of the resource.
     *
     *@return Response
     */
    public function index()
    {
        $event = $this->event->getAll();
        View::share('event',$event);
        return View::make('event.list');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('event.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $check = $this->event->create();
        if($check) {
            Session::flash('success','Event created!');
            return Redirect::action('EventController@index');
        }
        else {
            return Redirect::action('EventController@create')->withErrors($this->event->getErrors())->withInput();
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
        $event = $this->event->getByID((int) $id);
        View::share('event',$event);
        return View::make('event.show');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $event = $this->event->getByID((int) $id);
        View::share('event',$event);
        return View::make('event.edit');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $check = $this->event->edit((int) $id);
        if($check) {
            Session::flash('success','Event updated!');
            return Redirect::action('EventController@index');
        }
        else {
            return Redirect::action('EventController@edit')->withErrors($this->event->getErrors())->withInput();
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
        $check = $this->event->delete((int) $id);
        if($check) {
            Session::flash('success','Event deleted!');
            return Redirect::action('EventController@index');
        }
        else {
            return Redirect::action('EventController@index')->withErrors($this->event->getErrors());
        }
    }

}
