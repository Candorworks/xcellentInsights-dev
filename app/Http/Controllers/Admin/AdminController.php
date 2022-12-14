<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:subadmin-list|subadmin-create|subadmin-edit|subadmin-delete', ['only' => ['index','store']]);
         $this->middleware('permission:subadmin-create', ['only' => ['create','store']]);
         $this->middleware('permission:subadmin-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:subadmin-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = User::whereNotIn('role_id',[4,5,6,7])->orderBy('id', 'desc')->get();
      
        return view('admin.subadmin.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::whereNotIn('id',[4,5,6,7])->pluck('name','name')->all();
        return view('admin.subadmin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            // 'mobile' => 'required|unique:users,mobile',
            'password' => 'required|confirmed',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['username'] = $input['name'];
        $input['password'] = Hash::make($input['password']);
        $input['role_id']=Role::where('name',$request->roles)->pluck('id');
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->route('subadmin.index')
            ->with('success', 'Sub Admin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::whereNotIn('id',[4,5,6])->get();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.subadmin.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            // 'mobile' => 'required|unique:users,mobile,'.$id,
            'password' => 'confirmed',
            'roles' => 'required'
        ]);

        $input = $request->all();

        if(!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $input['role_id']=Role::where('name',$request->roles)->first()->id;
        $user->update($input);

        DB::table('model_has_roles')
            ->where('model_id', $id)
            ->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('subadmin.index')
            ->with('success', 'Sub Admin updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('subadmin.index')
            ->with('success', 'Sub Admin deleted successfully.');
    }
}
