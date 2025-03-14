<?php
namespace Modules\Contact\Models;

use App;
use App\BaseModel;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerMembers extends BaseModel
{
    use SoftDeletes;
    protected $table = 'bravo_partner_members';
    protected $fillable = [
        'email',
        'fullname',
        'phone',
        'password',
        'token',
        'status'
    ];

//    protected $cleanFields = ['message'];
}