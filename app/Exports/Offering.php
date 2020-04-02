<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Offering implements FromCollection
{
    protected $offering;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($offering)
    {
        $this->offering = $offering;
    }

    public function collection()
    {
       $offering = $this->offering->getOffering()->get();
       $collections = [];
        foreach ($offering as $key => $offer) {
            $collections[] = (object) [
                'cell_name' => !empty($offer->homechurch) ? $offer->homechurch['name'] : $offer->groupchat['name'],
                'cash' => $offer->cash,
                'cheque' => $offer->cheque,
                'pos' => $offer->pos,
                'total' => $offer->amount,
                'date' => date('D d M Y',strtotime($offer->date)),
                'week' => date('W',strtotime($offering->date))
            ];
        }

        return collect($collections);
    }



    public function headings(): array
    {
        return ["Cell Name","Cash","Cheque", "Pos","Total","Date","Week"];
    }
}
