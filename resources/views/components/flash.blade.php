@props(['messageKey'])

@if (session($messageKey))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
        <div class="alert alert-success">
            {{ session($messageKey) }}
        </div>
    </div>
@endif
