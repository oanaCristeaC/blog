<x-layout>
    <div class="container">
        <form method="POST" action="/register">
            @csrf

            <h3> Register </h3>

            <div class="form-group">
                <label for="name"><b>Name</b></label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="username"><b>Username</b></label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" id="username">
            </div>

            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>
