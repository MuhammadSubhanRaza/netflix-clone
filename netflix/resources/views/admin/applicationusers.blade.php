
@extends('layouts.admin_layout')

@section('view-set')

{{-- <h2>APPLICATION USERS</h2>

<div class="applicationusers-container">
    <form action="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" placeholder="First Name" name="fName">
                </div>
                <div class="col-md-3">
                    <input type="text" placeholder="Last Name" name="lName">
                </div>
                <div class="col-md-3">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="col-md-3">
                    <input type="text" placeholder="Contact" name="contact">
                </div>
                <div class="col-md-3">
                    <select name="gender">
                        <option value="none">-- Select --</option>
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="file" name="image" id="">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btnSave"><i class="fa fa-save"></i> Save</button>
                </div>
            </div> --}}

            <br>

            <div class="row">
                <div class="col-md-12">
                    <table class="tbl-Data">
                       <thead>
                           
                           <tr>
                               <th>First Name</th>
                               <th>Email</th>
                               <th>Password</th>
                               <th>Options</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td>
                                    {{$user->password}}
                                </td>
                                <td>
                                    <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

