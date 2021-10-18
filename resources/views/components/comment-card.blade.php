@props(['authorId'])

<div class="card p-3 my-3">
    <div class="row">
        <div class="col-2 d-flex justify-content-center">
            <img class="rounded" src="https://i.pravatar.cc?u={{ $authorId }}/" height="100px" width="100px">
        </div>
        <div class="col-10">
           {{ $slot }}
        </div>
    </div>
</div>
