<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class adminpages extends Controller
{
    //

    public function admin1()
    {
      return view('adminpage.admin');
    }

    public function admin2()
    {
      return view('adminpage.addusers');
    }

    public function admin4(Request $request)
    {
      $user=$request->username;
      $pass=$request->password;
      if($user==='mushfique'||$pass==='01704817049')
      {
        return redirect()->route('admin');
      }
      else {

        return redirect()->route('adminlogin');
      }

    }

    public function adminusersstore(Request $request)
    {
     $user= new User;
     $user->first_name=$request->first_name;
      $user->last_name=$request->last_name;
      $user->username=$request->username;
      $user->Tax_id=$request->Tax_id;
      $user->phone_no=$request->phone_no;
      $user->email=$request->email;
      $user->password=$request->password;

      $user->save();

      return redirect()->route('admin');

    }

    public function adminupdateinfo(Request $request,$Tax_id)
    {
     $user= User::find($Tax_id);
      $user->first_name=$request->first_name;
      $user->last_name=$request->last_name;
      $user->username=$request->username;
      $user->Tax_id=$request->Tax_id;
      $user->phone_no=$request->phone_no;
      $user->email=$request->email;
      $user->password=$request->password;

      $user->save();

      return redirect()->route('admin.manage');

    }

    public function adminseeusers()
    {
      $user=User::orderBy('Tax_id','desc')->get();
      return view('adminpage.seeusers')->with('user',$user);
    }

    public function adminmanage()
    {
        $user=User::orderBy('Tax_id','desc')->get();
      return view('adminpage.manage_system')->with('user',$user);
    }
    public function adminupdate($Tax_id)
    {
        $user=User::find($Tax_id);
      return view('adminpage.update_system')->with('user',$user);
    }
    public function admindelate($Tax_id)
    {
        $user=User::find($Tax_id);
        if(!is_null($user))
        {
          $user->delete();
        }
      return view('adminpage.manage');
    }


}
