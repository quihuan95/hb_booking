<?php
namespace Modules\Vendor\Models;

use App\BaseModel;
use App\User;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\Models\SEO;
use Spatie\Permission\Models\Role;

class VendorRequests extends BaseModel
{
    //use SoftDeletes;
    protected $table = 'vendor_request';
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'request'
    ];

}
