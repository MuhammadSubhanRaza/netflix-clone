
@extends('layouts.admin_layout')

@section('view-set')

<h6>ALL MOVIES</h6>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-right">
            <span><i class="fa fa-search" style="font-size: 1.3rem"></i></span>
            <input type="text" class="txtSearch" name="search" placeholder="Search">
            <br><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="tbl-Data">
                <thead>
                    <tr>
                        <th></th>
                        <th>Movie Name</th>
                        <th>Category</th>
                        <th>Desciption</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="/images/moviecover.jpg" style="height: 90px" alt="">
                        </td>
                        <td>
                            Londnon has fallen
                        </td>
                        <td>
                            Action
                        </td>
                        <td>
                            WB Production movie
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

@endsection
