<?php
/**
 * Created by PhpStorm.
 * User: dunglinh
 * Date: 6/4/19
 * Time: 20:49
 */

namespace Modules\Contact\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Modules\Contact\Models\PartnerMembers;

class NotificationToCustomer extends Mailable
{
    use Queueable, SerializesModels;
    public $partner_members;

    public function __construct(PartnerMembers $partner_members)
    {
        $this->partner_members = $partner_members;
    }

    public function build()
    {
        return view('Contact::emails.notification_partner');
    }
}
