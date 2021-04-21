@foreach($roles as $role)
    <p class="lead">
        {{ $role->name }}
        {{ $role->description }}

    </p>
@endforeach
