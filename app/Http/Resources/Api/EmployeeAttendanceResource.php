<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeAttendanceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'year' => $this->year,
            'month' => $this->month,
            'attendance' => $this->attendance,
            'ot' => $this->ot,
            'basic_salary' => $this->basic_salary,
            'allowances' => $this->allowances,
            'deductions' => $this->deductions,
            'epf' => $this->epf,
            'etf' => $this->etf,
            'total' => $this->total,

        ];
    }
}
