<div class="panel-footer">
    <div class="row d-flex justify-content-between">
        <div class="col col-sm-6 col-xs-6">Общее количество
            <b>{{ number_format($permissions->total(), 0, '.', ' ') }}</b></div>
        <div class="d-flex justify-content-end col-sm-6 col-xs-6">
            <ul class="pagination hidden-xs pull-right">
                {{ $permissions->links() }}
            </ul>
        </div>
    </div>
</div>
