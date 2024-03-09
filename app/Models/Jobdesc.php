<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobdesc extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company_id', 'jobtype_id', 'job_location', 'vacant_qty', 'user_id', 'required_edication','min_experiences_yr','salary_range','benefits','age_limit','additional_requirement','responsibilities','employement_status','last_date','no_off_applicant'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function jobtype()
    {
        return $this->belongsTo(Jobtype::class);
    }

    // id`, `user_id`, `title`, `company_id`, `jobtype_id`, `job_location`, `vacant_qty`, `required_edication`, `min_experiences_yr`, `salary_range`, `benefits`, `age_limit`, `additional_requirement`, `responsibilities`, `employement_status`, `last_date`, `no_off_applicant`, `created_at`, `updated_at`
}
