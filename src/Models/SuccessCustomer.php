<?php

declare(strict_types=1);

namespace Liberu\CRM\CustomerSuccess\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $customer_key @property string $lifecycle @property int $health_score */
final class SuccessCustomer extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_success_customers';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['health_score' => 'integer', 'onboarding' => 'array', 'success_plan' => 'array', 'objectives' => 'array'];
    }
}
