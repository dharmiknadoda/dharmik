<?php

namespace App\Http\Controllers;

use App\Models\Feedback_Model;
use App\Models\Food_Model;
use App\Models\Order_Model;
use App\Models\User_Model;
use Illuminate\Http\Request;

class User_Controller extends Controller
{
    public function index(Request $res)
    {
        $data = Food_Model::all();
        
        if ($res->session()->has('email') && $res->session()->has('password')) 
        {
            $data = Food_Model::paginate(4);
            // return view("user/index", compact('data'));
            return view('user/index' , compact('data'));
        } else {
            return  redirect()->route('signin');
        } 
              
    }

    public function contact(Request $res)
    {
        return view('user/contact');
    }

    public function ditails($id)
    {
        $data = Food_Model::where('id', $id)->get();
        return view('user/ditails',compact('data'));
    }

    public function item(Request $res)
    {
        if(isset($res->filter))
        {
            $data = Food_Model::where('name', 'like', "%{$res->filter}%")->paginate(2);
            return view('user/item', compact('data'));
        }
        // else{
        //     $data = Food_Model::paginate(3);
        //     return view("user/item", compact('data'));
        // }

        $data = Food_Model::all();
        return view('user/item' , compact('data'));
    }
    
    function signup(Request $res)
    {
        $data = [];
        if(isset($res->name))
        {
            $data = User_Model::create([
            "name"=>$res->name,
            "email"=>$res->email,
            "password"=>$res->password,
            "date"=>$res->date,
            ]);
        }

        if($data)
        {
            session(['email' => $res->email]);
            session(['password' => $res->password]);
            return redirect()->route('signin');
        }else
        {
            return view('user/signup');
        }
    }
    
    
    function signin(Request $res)
    {
        $view = User_model::where('email', '=', $res->email)->where('password', '=', $res->password)->get();
        if(count($view) == 1)
        {
            session(['email' => $res->email]);
            session(['password' => $res->password]);
            return redirect()->route('index');
        }else
        {
            return view('user/signin');
        } 
    }
    

    public function readmore(Request $res)
    {
        return view('user/readmore');
    }
    
    public function feedback(Request $res)
    {
        $data = [];
        $data = Feedback_Model::all();
        if(isset($res->name))
        {
            Feedback_Model::create([
                "name"=>$res->name,
                "email"=>$res->email,
                "feedback"=>$res->feedback,
            ]);
        }
        return view('user/feedback' , compact('data'));
    }

    function logout(Request $res)
    {
        $res -> session()->flush();
        return  redirect()->route('signin');
    }

    function chake(Request $res)
    {
        if(isset($res->submit))
        {
            $name="";
            $price="";
            $data = Food_Model::where("id","=",$res->id)->get();
            foreach($data as $item)
            {
                $name = $item->name;
                $price = $item->price;
                
            }
            $qun = $res->quantity;
            $total = $price*$qun;
            Order_Model::create([
                "name"=>$name,
                "price"=>$price,
                "quantity"=>$qun,
                "address"=>$res->address,
                "total"=>$total
            ]);
        }
        return view('user/ditails' , compact('data'));
    }
}
