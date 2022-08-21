<div class="btn-group btn-group-sm">
    @can('hrms-update')
        <a href="{{ route('admin.hrms.edit', $id) }}" class="btn btn-success">
            <i class="fas fa-edit"></i>
        </a>
    @endcan

    @can('hrms-delete')
        <a href="{{ route('admin.hrms.destroy', $id) }}" class="btn btn-danger confirm-delete">
            <i class="fas fa-trash"></i>
        </a>
    @endcan
</div>
