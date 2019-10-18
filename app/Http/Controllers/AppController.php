<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    
    public function getAuthorPage()
    {
        return view('author');
    }

    public function getBACPage()
    {
        return view('bac');
    }

    public function getBudgetPage()
    {
        return view('budget');
    }

    public function getAccountingPage()
    {
        return view('accounting');
    }

    public function getTreasurerPage()
    {
        return view('treasurer');
    }

    public function getPGOPage()
    {
        return view('pgo');
    }

    public function getPGSOPage()
    {
        return view('pgso');
    }

    public function getProvAdminPage()
    {
        return view('provadmin');
    }

    public function getAdminPage()
    {
        $users = User::all();
        //return view('admin', ['users' => $users]);
        return view('admin', ['users' => $users]);

    }

    public function getGenerateArticle()
    {
        return response('Article generated!', 200);
    }
    
    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();

        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }

        if ($request['role_author']) {
            $user->roles()->attach(Role::where('name', 'Author')->first());
        }

        if ($request['role_budget']) {
            $user->roles()->attach(Role::where('name', 'Budget')->first());
        }

        if ($request['role_acc']) {
            $user->roles()->attach(Role::where('name', 'Accounting')->first());
        }

        if ($request['role_treas']) {
            $user->roles()->attach(Role::where('name', 'Treasurer')->first());
        }

        if ($request['role_bac']) {
            $user->roles()->attach(Role::where('name', 'BAC')->first());
        }

        if ($request['role_pgo']) {
            $user->roles()->attach(Role::where('name', 'PGO')->first());
        }

        if ($request['role_pgso']) {
            $user->roles()->attach(Role::where('name', 'PGSO')->first());
        }

        if ($request['role_provadmin']) {
            $user->roles()->attach(Role::where('name', 'ProvincialAdministrator')->first());
        }

        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
}