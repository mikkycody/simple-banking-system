<div class="container">
    @if (session('alert'))
        <div class="notice notice-success">
            <strong>Success! </strong>{{ session('alert') }}
        </div>
    @endif
    @if (session('status'))
        <div class="notice notice-success">
            <strong>Success! </strong> {{ session('status') }}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="notice notice-danger">
            <strong>Error!</strong>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif
</div>


<style type="text/css">
    .notice {
        padding: 15px;
        background-color: #fafafa;
        border-left: 6px solid #7f7f84;
        margin-bottom: 10px;
        -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
        -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
        box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
    }
    .notice-success {
        border-color: #80D651;
    }
    .notice-success>strong {
        color: #80D651;
    }
    .notice-danger {
        border-color: #d73814;
    }
    .notice-danger>strong {
        color: #d73814;
    }
</style>