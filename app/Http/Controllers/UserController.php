<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Rooms;
use App\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
  public function index()
  {

        $user = User::all();
      return view('admindisplay.index', compact('user'));
  }

  public function index2()
  {
        $reserve = Reservation::all();

       return view('adminbooking.index2', compact('reserve'));
  }
  public function userdetails()
  {
    $userbook = Reservation:: where('email',Auth::user()->email)->get();
    return view('userbooking',compact('userbook'));
  } 
  
  public function delete($reserve_id)
  {
    DB::delete("delete from reservations where reserve_id = ? ",[$reserve_id]);
    return redirect('/booking-details')->with('success','Reservation has been canceled successfully');
  }

  public function book()
  {

        $user = User::all();
        $rooms = Rooms::all();
      return view('booking', compact('user','rooms'));
  }
  public function reserve1(Request $r)
  {
      Reservation::create(['name'=>$r->name ,'email'=>$r->email,'phonenumber'=>$r->phonenumber,'room_numbers'=>$r->room_numbers,'room_type'=>$r->room_type,'check_in_date'=>$r->check_in_date,'check_out_date'=>$r->check_out_date]);
        
      return redirect("/home");
  }


 


  public function show(User $user)
  {
      return view('admindisplay.show',compact('user'));
  }


    public function edit() {
    if (Auth::user()) {
     $user = User::find(Auth::user()->id);
     if($user){
         return view('auth.edituser')->withUser($user);
     }
     else {return redirect()->back();}
        
     
    }
    else {return redirect()->back();}
       
     }    

    
    public function update(Request $request){
        $user = User::find(Auth::user()->id);
        if($user){
            $validate = null;
            if(Auth::user()->email==$request['email']){
           $validate = $request->validate([
             'name'  => 'required|max:255',
             'email'  => 'required|email|max:255',
             'phonenumber'  => 'required|min:11',
             'address'  => 'required|max:255',
             'creditcard_id'  => 'required|min:12'
           ]);
            }
            else{
                $validate = $request->validate([
                    'name'  => 'required|max:255',
                    'email'  => 'required|email|unique:users|max:255',
                    'phonenumber'  => 'required|min:11',
                    'address'  => 'required|max:255',
                    'creditcard_id'  => 'required|min:12'
                  ]);
            }
           if($validate){
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phonenumber = $request['phonenumber'];
            $user->address = $request['address'];
            $user->creditcard_id = $request['creditcard_id'];
            $user->save();
            $request->session()->flash('success','Your details have been updated!');

            return redirect()->back();
           }
           else {return redirect()->back();}

        }
        else {return redirect()->back();}
        
    }
          public function passwordEdit(){
            if (Auth::user()) {
                 return view('auth.password');
              }
               else{return redirect()->back();}
                    }

          public function passwordUpdate(Request $request){
            $validate = $request->validate([
                
                'oldpassword' => 'required',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required|same:password|min:8'
                
              ]);
              

            $user = User::find(Auth::user()->id);
            if($user ){

                if(Hash::check($request['oldpassword'],$user->password) && $validate){
                 $user->password = Hash::make($request['password']);
                 
                 $user->save();
                 $request->session()->flash('success','Your password has been updated !');

                 return redirect()->back();
            }
            else {
            $request->session()->flash('error','The entered password does not match your current password !');

            return redirect()->route('password');
            }
          }

        }



}
