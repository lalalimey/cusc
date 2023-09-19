<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromArray, WithHeadings
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function array(): array
    {
        return $this->data;
    }

    public function headings(): array
    {
        // Define the column headings
        return [
            'Email',
            'First Name',
            'Last Name',
            'Nickname',
            'Register_status',
            'facebook',
            'line',
            'telephone',
            'first_round_date',
            'first_round_song',
            'first_round_link',
            'first_round_artist',
        ];
    }
}
