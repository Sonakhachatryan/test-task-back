<div id="widget_{{ $config['widget_id'] }}">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-success" role="alert">{{ Session::get('error') }}</div>
    @endif

    <form action="{{ url('send-message') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control {{ $errors->has('name') ? "is-invalid" : "" }}" name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('name') }}</small>
            @endif
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control {{ $errors->has('email') ? "is-invalid" : "" }}" name="email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
            @endif
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control {{ $errors->has('message') ? "is-invalid" : "" }}"> {{ old('message') }}</textarea>
            @if($errors->has('message'))
                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('message') }}</small>
            @endif
        </div>

        <input name="widget_id" type="hidden" value="{{ $config['widget_id'] }}">
        <button type="submit" class="btn btn-primary">Send</button>
    </form>

    @if($messages->count())
    <div class="mt-5">
        <table class="table" >
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
            </tr>
            </thead>
            <tbody>
            @php $i = 1; @endphp
            @foreach($messages as $message)
                <tr>
                    <th scope="row">{{ ($messages->currentPage() - 1) * $messages->perPage() + $i}}</th>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                </tr>

                @php $i++; @endphp
            @endforeach
            </tbody>
        </table>
        {{ $messages->links() }}
    </div>
    @endif
</div>


