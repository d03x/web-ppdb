<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $title = null;

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    public function getTitle(): string
    {
        return $this->title ? sprintf("%s - %s", $this->title, config("app.name")) : config('app.name');
    }
    public function view($view = null, $data = [], $mergeData = [])
    {
        $data['title'] = $this->getTitle();
        return view($view, $data, $mergeData);
    }
}
