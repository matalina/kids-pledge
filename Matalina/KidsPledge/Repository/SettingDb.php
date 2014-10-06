<?php namespace Matalina\KidsPledge\Repository;

use Matalina\KidsPledge\Interfaces\SettingInterface;
use Matalina\KidsPledge\Model\Setting;

class SettingDb implements SettingInterface
{
    protected $errors;
    
    public function create()
    {
        $setting = new Setting();
        $setting->save();
        
        if($setting->errors()->count() > 0) {
            $this->errors = $setting->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function getAll() 
    {
        return Setting::paginate(\Config::get('kidspledge.items-per-page'));
    }
    
    public function getById($id)
    {
        return Setting::where('id','=', (int) $id)->first();
    }
    
    public function edit($id)
    {
        $setting = Setting::where('id','=',(int) $id)->first();
        $setting->save();
        
        if($setting->errors()->count() > 0) {
            $this->errors = $setting->errors();
            return false;
        }
        else {
            return true;
        }
    }
    
    public function delete($id)
    {
        $setting = Setting::where('id','=',(int) $id)->first();
        $setting->delete();
        
        return true;
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
}