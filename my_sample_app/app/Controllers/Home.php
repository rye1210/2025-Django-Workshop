<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $sample="ISPSC";
        /*$data=
        [
            "title"=>$sample
        ];*/
        $data =array('title'=>$sample);
        return view('hello_world',$data);
    }

    public function displays()
    {
        return view('display');
    }
}
