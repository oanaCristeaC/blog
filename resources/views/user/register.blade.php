<x-layout>
    <section class="d-flex justify-content-center mt-5 bg-light border-grey p-5">
        <div class="container w-50">
            <form method="POST" action="/register">
                @csrf

                <h3> Register </h3>

                <div class="form-group mb-3">
                    <label class="form-label" for="name"><b>Name</b></label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="{{ old('name') }}">
                </div>
                @error('name')
                <p class="text-danger fs-6">{{ $message }}</p>
                @enderror

                <div class="form-group mb-3">
                    <label class="form-label" for="username"><b>Username</b></label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username" id="username" value="{{ old('username') }}">
                </div>
                @error('username')
                <p class="text-danger fs-6">{{ $message }}</p>
                @enderror

                <div class="form-group mb-3">
                    <label class="form-label" for="email"><b>Email</b></label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" value="{{ old('email') }}">
                </div>
                @error('email')
                <p class="text-danger fs-6">{{ $message }}</p>
                @enderror

                <div class="form-group mb-3">
                    <label class="form-label" for="password"><b>Password</b></label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
                </div>
                @error('password')
                <p class="text-danger fs-6">{{ $message }}</p>
                @enderror

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</x-layout>
