<div class="flash-stack">
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
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = session('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = session('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = session('warning'))
        <div class="alert alert-warning alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = session('info'))
        <div class="alert alert-info alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = session('danger'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
</div>
