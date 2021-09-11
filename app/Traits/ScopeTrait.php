<?php


namespace App\Traits;


trait ScopeTrait
{
    /**
     * @param $query
     * @return mixed
     */
    public function scopeSort($query){
        return $query->orderBy(request()->get('column', 'id'), request()->get('order', 'asc'));
    }

    /**
     * @param $query
     * @param $string
     * @return mixed
     */
    public function scopeSearch($query, $string){
        return $query->where(function ($query) use($string, $this->search_columns) {
            foreach ($this->search_columns as $column){
                $query->orwhere($column, 'ilike',  '%' . $string .'%');
            }
        });
    }

}
