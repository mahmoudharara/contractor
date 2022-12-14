<?php


 namespace contractor\Base\Repositories\Api;


use App\LocationData;
use App\Locations;
use Illuminate\Database\Eloquent\Model;
use contractor\Base\Traits\HasFilters;
use contractor\Base\Traits\RepositoryModel;


class GeneralRepository
{
    /**
     * it contains all filter's
     * operations
     * @author WeSSaM
     */
    use RepositoryModel, HasFilters;
    /**
     * repo.'s  model
     * @author WeSSaM
     * @var Model
     */
    public $model;

    /**
     * BaseRepository constructor.
     * @param Model $model
     * @author WeSSaM
     */
    public function __construct($model = null)
    {
//        if (!$model && class_exists($this->model))
//            $model = new $this->model;
//        $this->model = $model;
    }


}
