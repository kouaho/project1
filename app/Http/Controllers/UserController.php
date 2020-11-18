<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Domain;
use App\DomainUser;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        
         $users = User::orderBy('created_at', 'DESC')->latest()->paginate();
        return view('backend.user.index')
            ->with(['users' =>$users]);////
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $roles = Role::all();
         $domains = Domain::all();
         $superadmin =  "superadmin";

         //if ((Auth::user()->role->libelle) !== $superadmin){
               //  return redirect()->route('users.index')
               //         ->with('success','Sauf les Super administrateur peuvent ajouter des administrateurs');
                //  }
         
        return view('backend.user.create')->with([
            'roles'=>$roles,
            'domains'=>$domains, 
        ]);//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
          
       $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'prenom' => 'required',
            'password' => 'required',
            'roles_id' => 'required',
            'img' => 'required',
            //'domains_id' => 'required',
        ]); 

       $img = $request->file('img') ;
       $new_name = rand().'.'.$img->getClientOriginalExtension();
       $img->move(public_path('img/user'),$new_name);
            
           $users =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'img' => $new_name ,
            'username' => $request['username'],
            'prenom' => $request['prenom'],
            'password' => Hash::make($request['password']),
            'roles_id' => $request['roles_id'],
            //'domains_id' => $request['domains_id'],
            ]);
           
          $users->domain()->attach($request->get('domains'));
          // dump($users);die();
          
        return redirect()->route('users.index')
                        ->with('success','User created successfully.'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {   
        $roles = Role::all();
         $domains = Domain::all();
        return view('backend.user.show',compact('user'))->with(['roles'=>$roles,'domains'=>$domains, 
        ]);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {    
        $roles = Role::all();
         $domains = Domain::all();
       return view('backend.user.edit',compact('user'))
             ->with(['roles'=>$roles,'domains'=>$domains, 
        ]); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User ) $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            //'email' => 'required',
            'prenom' => 'required',
            //'password' => 'required'|'max:8',
            'role' => 'required',
            //'img' => '',
        ]);
         $img = $request->file('img') ;
       $new_name = rand().'.'.$img->getClientOriginalExtension();
       $img->move(public_path('img/user'),$new_name);

 
        $users = User::update($request->all());

        $users->domain()->detach('');

        return redirect()->route('users.index')
                        ->with('success','User updated successfully.'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
       

        return redirect()->route('users.index')
                        ->with('success','domains deleted successfully'); //
        $user->domain()->detach($user->get('domains'));
    }
}
