<table class="table table-hover text-nowrap">
    <thead>
    <tr>
        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                               aria-label="Select all invoices"></th>
        <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24"
                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                 stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="6 15 12 9 18 15"/>
            </svg>
        </th>
        <th>Permission Name</th>
        <th>Permission Parent</th>
        <th>Permission Description</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($permissions as $key=>$permission)
        <tr style="background: {{!$permission->parent ? '#89DEFD' : ''}}">
            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
            <td>{{ ++$key}}</td>
            <td>{{ $permission->name }}</td>
            <td>{{ $permission->parent ? $permission->parent->name : 0}}</td>
            <td>{{ $permission->description }}</td>
            <td>{{ $permission->created_at ? date('d-m-Y', strtotime($permission->created_at )) : 'NULL' }}</td>
            <td>{{ $permission->updated_at ? date('d-m-Y', strtotime($permission->updated_at )) : 'NULL'}}</td>
            <td>
                <div class="d-flex">
                    @if(Auth::user()->hasPermissionTo('permissions_show'))
                        <a class="btn  btn-outline-warning"
                           href="{{route('permissions.show', $permission)}}">
                            <i class="fas fa-eye"></i>
                        </a>
                    @endif
                    @if(Auth::user()->hasPermissionTo('permissions_update'))
                        <a class="btn btn-md btn-outline-info" style="margin-left: 10px"
                           href="{{route('permissions.edit', $permission)}}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    @endif

                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
