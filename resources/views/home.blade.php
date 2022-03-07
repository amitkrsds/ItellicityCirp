@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form action="{{url('upload-files')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            Select image to upload:
                            <input type="file" name="fileToUpload[]" id="fileToUpload" multiple>
                            <input type="submit" value="Upload Image" name="submit">
                        </form>

                        <body>

                        <h2>HTML Table</h2>

                        <table>
                            <tr>
                                <th>id</th>
                                <th>file</th>
                            </tr>
                            @foreach($files as $file)
                            <tr>
                                <td>{{$file->id}}</td>
                                <td>{{$file->name}}</td>
                            </tr>
                            @endforeach
                        </table>

                        </body>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
@endsection
