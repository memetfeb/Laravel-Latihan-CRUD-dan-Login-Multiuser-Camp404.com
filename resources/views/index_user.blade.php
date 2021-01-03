@extends('layouts.app')

@section('content')  
    
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Manajemen User</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr class="">
                        <th>Nama</th>
                        <th class="">Role</th>
                        <th class="">Email</th>
                        <th class="">AKSI</th>
                    </tr>
                    @foreach($user as $u)
                    <tr class="">
                        <td class="">{{$u->name}}</td>
                        <td class="">{{$u->role}}</td>
                        <td class="">{{$u->email}}</td>
                        <td class="">
                            <ul class="nav">
                                <a href="{{route ('user.edit', $u->id)}}" class="btn btn-primary mr-2">Edit</a>
                                <form action="{{route ('user.destroy', $u->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                </form>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div> 
    </div>

@endsection