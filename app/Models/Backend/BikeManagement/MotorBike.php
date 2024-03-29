<?php

namespace App\Models\Backend\BikeManagement;

use App\Models\Backend\AdditionalFeatures\Testimonial;
use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MotorBike extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'bike_brand_id',
        'bike_motor_type_id',
        'bike_engine_size_id',
        'bike_year_version_id',
        'model_name',
        'size',
        'image',
        'variant',
        'sku',
        'slug',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'motor_bikes';

    protected static $motorBikes;

    public static function saveOrUpdateMotorBike($request, $id = null)
    {
        MotorBike::updateOrCreate(['id' => $id], [
            'bike_brand_id'        => $request->bike_brand_id,
            'bike_motor_type_id'   => $request->bike_motor_type_id,
            'bike_engine_size_id'  => $request->bike_engine_size_id,
            'bike_year_version_id' => $request->bike_year_version_id,
            'model_name'           => $request->model_name,
            'size'                 => $request->size,
            'image'                => fileUpload($request->file('image'), 'bike-management/motor-bike', isset($id) ? static::find($id)->image : ''),
            'variant'              => $request->variant,
            'sku'                  => $request->sku,
            'slug'                 => str_replace(' ', '-', $request->model_name),
            'status'               => $request->status == 'on' ? 1 : 0,
        ]);
    }

     public function testimonials()
     {
         return $this->hasMany(Testimonial::class, 'parent_model_id');
     }

    public function bikeBrand()
    {
        return $this->belongsTo(BikeBrand::class);
    }

    public function bikeMotorType()
    {
        return $this->belongsTo(BikeMotorType::class);
    }

    public function bikeEngineSize()
    {
        return $this->belongsTo(BikeEngineSize::class);
    }

    public function bikeYearVersion()
    {
        return $this->belongsTo(BikeYearVersion::class);
    }

    // public function partsProducts()
    // {
    //     return $this->belongsToMany(PartsProduct::class);
    // }
}
