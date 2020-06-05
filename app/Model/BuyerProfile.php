<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BuyerProfile extends Model
{
    protected $table ="buyer_profiles";
    protected $fillable = [
    'contact_name','short_name','contact_person','designation',
    'exporters_ref','email','http_link','address1','address2',
    'address3','address4','country','party_type','tag_company',
    'link_to_supplier','credit_limit_days','credit_limit_unit',
    'discount_method','security_deducted','vat_to_be_deducted',
    'ait_to_be_deducted','remark','marketing_team',
    'sewing_effi_mkt_percentage','sewing_effi_planning_percentage','deffd_lc_cost_percentage','cut_off_used',
    'control_delivery','delivery_buffer_days',
    'min_quoted_profit_percentage',
    'min_budgeted_profit_percentage','status','commercial_invoice','tag_sample','image'
    ];
    protected $hidden=['created_at','updated_at'];
}
