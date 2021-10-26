
@extends('layouts.admin_layout')

@section('view-set')

<h6>UPLOAD MOVIE</h6>

<div class="applicationusers-container">
    <form action="/admin/movie/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <input placeholder="Movie Name" type="text" name="movieName">
                     <select name="category">
                         <option value="none" >-- Select --</option>
                         @foreach ($genres as $genre)
                             <option value="{{ $genre->name }}">{{ $genre->name }}</option>
                         @endforeach
                        
                    </select>
                    
                    <input placeholder="Description" type="text" name="description">
                
                    <br><br>

                    <label>Upload Cover image</label>
                    <br>

                    <div class="custom-file" style="width:100px">
                        <input type="file" name="coverImage" class="custom-file-input" id="customFileCImage">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    {{-- <input type="file" name="coverImage"> --}}

                    <br><br>

                    <label>upload Trailer </label>
                    <br>
                     <div class="custom-file" style="width:100px">
                        <input type="file" name="trailer" class="custom-file-input" id="customFileTrailer">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    {{-- <input type="file" name="trailer"> --}}

                    <br><br>

                    <label>upload movie</label>
                    <br>
                    <div class="custom-file" style="width:100px">
                        <input type="file" name="movie" class="custom-file-input" id="customFileMovie">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    {{-- <input type="file" name="movie"> --}}
                    
                    
                </div>

                <div class="col-md-4 pl-5 text-center">
                    <label>Trailer</label>
                    <video id="vdTrailer" controls src="" style="width: 350px">
                    </video>
                    <br><br>
                    <label>Movie</label>
                    <video id="vdMovie" controls src="" style="width: 350px">
                    </video>
                   
                </div>

                <div class="col-md-4 pl-5 text-center">
                     <label>Cover image</label><br><br>
                    <img id="cvrImg" src="/images/holder.png" style="height: 300px" alt="">
                    <br><br><br><br><br><br>
                    <button type="submit" style="position: absolute;bottom:0;left:60px;width:350px;" class="btnSave">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>

            </div>


       
    </form>
</div>

@endsection


