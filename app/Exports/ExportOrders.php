<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportOrders implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function collection()
    {
        $data = $this->data;
        return collect($data);
    }
    public function headings(): array
    {
        return ["S.No", "User Name", "BILL NAME", "ORDER ID", "PHONE", "PAYMENT MODE", "DELEVERY ADDRESS", "PINCODE", "TOTAL PAYMENT", "ORDER STATUS", "CREATE AT"];
    }
}
