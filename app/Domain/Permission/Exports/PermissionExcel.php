<?php


namespace App\Domain\Permission\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class PermissionExcel implements FromCollection, ShouldAutoSize, WithHeadings, WithMapping, WithEvents, WithColumnWidths
{
    protected $permissions;

    public function __construct($query)
    {
        $this->permissions = $query;
    }

    public function collection()
    {
        return $this->permissions;
    }

    /**
     * @param $permission
     * @return array
     */
    public function map($permission): array
    {


        return [
            $permission->id,
            $permission->name,
            $permission->parent ? $permission->parent->name : '',
            $permission->description,
            $permission->created_at->format('d.m.Y'),
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Parent',
            'Description',
            'Created At'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {

                $event->sheet->getDelegate()->getStyle('A1:E225')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A1:E225')->getAlignment()->setWrapText(true)->setHorizontal(Alignment::HORIZONTAL_CENTER);

                /**
                 * Borders
                 */
                $event->sheet->getStyle('A1:E1')->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => [
                                'rgb' => '#211ED6'
                            ]
                        ]
                    ],
                ]);
            }
        ];
    }

    public function columnWidths(): array
    {

        return [
            'A' => 10,   'B' => 20,   'C' => 20,  'D' => 50, 'E' => 20
        ];
    }





}
