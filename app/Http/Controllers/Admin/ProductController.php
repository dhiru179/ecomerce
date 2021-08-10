<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($id=null)
    {
        try {
            if(isset($id))
            {
                // Db:table('')
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function addProduct(Request $request,$id=null)
    {
        try {
            if(isset($id))
            {
                // Db:table('')
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
