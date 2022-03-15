@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = session('status'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = session('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">&check;</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = session('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = session('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = session('info'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = session('danger'))
    <div class="alert alert-danger alert-block" style="color:red;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
