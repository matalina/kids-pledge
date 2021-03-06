<?php namespace Matalina\KidsPledge\Interfaces;

interface ChecklistInterface
{
    public function getAll();
    public function create();
    public function getById($id);
    public function edit($id);
    public function delete($id);
    public function getErrors();
}