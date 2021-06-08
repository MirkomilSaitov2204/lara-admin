<table class="table" id="table_modal">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Parent Name</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($permissions as $key => $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td style="color: {{!$permission->parent ? 'red' : ''}}">{{ $permission->name }}</td>
                <td>{{ $permission->parent ? $permission->parent->name : '' }}</td>
                <td>{{ $permission->description }}</td>
                <td>{{ $permission->created_at->format('Y-m-d') }}</td>
                <td>
                    <ul class="action-list">
                        <li><a href="#" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                        <li><a href="#" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
