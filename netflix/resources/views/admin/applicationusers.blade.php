
@extends('layouts.admin_layout')

@section('view-set')

<h6>APPLICATION USERS</h6>

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
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <table class="tbl-Data">
                       <thead>
                           <tr>
                               <th></th>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Email</th>
                               <th>Contact</th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                            <tr>
                                <td>
                                    <img src="/images/pimg11.png" style="width: 40px;height: 40px; border-radius: 50%" alt="">
                                </td>
                                <td>
                                    Jhon
                                </td>
                                <td>
                                    Bairstow
                                </td>
                                <td>
                                    jhonbaristow@gmail.com
                                </td>
                                <td>
                                    0312-7894563
                                </td>
                                <td>
                                    <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/images/pimg11.png" style="width: 40px;height: 40px; border-radius: 50%" alt="">
                                </td>
                                <td>
                                    Jhon
                                </td>
                                <td>
                                    Bairstow
                                </td>
                                <td>
                                    jhonbaristow@gmail.com
                                </td>
                                <td>
                                    0312-7894563
                                </td>
                                <td>
                                    <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/images/pimg11.png" style="width: 40px;height: 40px; border-radius: 50%" alt="">
                                </td>
                                <td>
                                    Jhon
                                </td>
                                <td>
                                    Bairstow
                                </td>
                                <td>
                                    jhonbaristow@gmail.com
                                </td>
                                <td>
                                    0312-7894563
                                </td>
                                <td>
                                    <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

