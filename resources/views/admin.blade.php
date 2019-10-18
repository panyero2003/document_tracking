@extends('layouts.top_admin')

@section('content')

    <!-- <div class="container"> -->
    
    <h3>Manage Users</h3>
       
    <table class="table">
        <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-Mail</th>
        <th>User</th>
        <th>Author</th>
        <th>BAC</th>
        <th>Budget</th>
        <th>Accounting</th>
        <th>Treasurer</th>
        <th>PGO</th>
        <th>PGSO</th>
        <th>Prov. Admin.</th>
        <th>Admin</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <form action="{{ route('admin.assign') }}" method="post">
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>

                    <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>

                    <td><input type="checkbox" {{ $user->hasRole('Author') ? 'checked' : '' }} name="role_author"></td>

                    <td><input type="checkbox" {{ $user->hasRole('BAC') ? 'checked' : '' }} name="role_bac"></td>
                    
                    
                    <td><input type="checkbox" {{ $user->hasRole('Budget') ? 'checked' : '' }} name="role_budget"></td>
                   

                    <td><input type="checkbox" {{ $user->hasRole('Accounting') ? 'checked' : '' }} name="role_acc"></td>
                    


                    <td><input type="checkbox" {{ $user->hasRole('Treasurer') ? 'checked' : '' }} name="role_treas"></td>
                   
                     <td><input type="checkbox" {{ $user->hasRole('PGO') ? 'checked' : '' }} name="role_pgo"></td>
                     

                      <td><input type="checkbox" {{ $user->hasRole('PGSO') ? 'checked' : '' }} name="role_pgso"></td>

                      <td><input type="checkbox" {{ $user->hasRole('ProvAdmin') ? 'checked' : '' }} name="role_provadmin"></td>
                     

                    <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                     {{ csrf_field() }}
                    <td><button type="submit" class="btn btn-success">Assign Roles</button></td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection