<x-layout>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" class="py-5" novalidate>
            @csrf
            <div class="mb-3 row justify-content-center">
                <label for="name" class="col-sm-3 col-md-2 col-form-label">Name</label>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="email" class="col-sm-3 col-md-2 col-form-label">Email</label>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <label for="message" class="col-sm-3 col-md-2 col-form-label">Message</label>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <textarea id="message" name="message" class="form-control">{{ old('message') }}</textarea>
                </div>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
        <h2 class="text-center">List of messages</h2>
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->text }}</td>
                        <td>{{ $message->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</x-layout>
