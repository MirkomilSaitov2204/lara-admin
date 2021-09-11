<?php

namespace App\DataTables;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Services\DataTable;
use \App\Domain\Permission\Entities\Permission;

class PermissionDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable()
    {
        return datatables()
            ->eloquent($this->query())
            ->editColumn('name', function ($row) {
                return $row->name;
            })
            ->editColumn('description', function ($row) {
                return $row->description;
            })
            ->editColumn('parent_id', function ($row) {
                return  $row->parent ? $row->parent->name : "";
            })
            ->editColumn('created_at', function ($row){
                return $row->created_at ? date_format($row->created_at, 'Y-m-d') : "";
            })
            ->addIndexColumn()
            ->rawColumns(['name']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Permission $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $model = Permission::query();
        return $model;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('permission-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            '#' => ['data' => 'id', 'name' => 'id', 'visible' => true],
            __('name') => ['data' => 'name', 'name' => 'name'],
            __('parent permission') => ['data' => 'parent_id', 'name' => 'parent.name'],
            __('description') => ['data' => 'description', 'name' => 'description'],
            __('created_at') => ['data' => 'created_at', 'name' => 'created_at'],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Permission_' . date('YmdHis');
    }
}
