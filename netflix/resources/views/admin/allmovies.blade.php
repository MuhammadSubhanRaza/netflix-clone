
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
                        <th style="width: 40%">Desciption</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allMovies as $movie)
                        <tr>
                            <td>
                                <img src="/storage/{{ $movie->coverImage }}" style="height: 90px" alt="">
                            </td>
                            <td>
                                {{ $movie->name }}
                            </td>
                            <td>
                                {{ $movie->category }}
                            </td>
                            <td>
                                {{ $movie->description }}
                            </td>
                            <td>
                                <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                <a href="/admin/movie/delete/{{ $movie->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
