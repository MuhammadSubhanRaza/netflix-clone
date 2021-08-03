

@extends('layouts.admin_layout')

@section('view-set')

@if (session('success'))
    <div class="notification-success" id="notificationBlock">
    <table>
        <tr>
            <td>
                <p><i class="fa fa-info-circle"></i> <strong>Congratulations! </strong>operation successful</p>
            </td>
            <td>
                <button onclick="onNotificationClose()">X</button>
            </td>
        </tr>
    </table>
        
    </div>
@endif

<h6>ADD GENRE</h6>


<div class="container-fluid applicationusers-container">
    <form action="/admin/genre/add" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="@error('name') is-invalid @enderror" placeholder="Genre" name="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="col-md-6">
                <input type="text" class="@error('description') is-invalid @enderror" placeholder="Description" name="description">
                 @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-3">
                <button type="submit" class="btnSave"><i class="fa fa-save"></i> Save</button>
            </div>
        </div>
    </form>

        <br><br>
        <div class="row">
                <div class="col-md-12">
                    <table class="tbl-Data">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Genre Name</th>
                               <th>Description</th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                           
                            @foreach ($all_genres as $genre)
                            <tr>
                                <td>
                                    {{ $genre->id }}
                                </td>
                                <td>
                                    {{ $genre->name }}
                                </td>
                                <td style="width: 50%">
                                    {{ $genre->description }}
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="/genre/delete/{{ $genre->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                       </tbody>
                    </table>
                </div>
            </div>


    
</div>

@endsection

