<?php
return [
   
    [
        'label'=>'Nhân viên',
        'route'=>'nhanvien.index',
        'icon'=>'fa-user',
        'items'=>[
            [
                'label'=>'Tất cả nhân viên',
                'route'=>'nhanvien.index',
            ],
            [
                'label'=>'Thêm nhân viên',
                'route'=>'nhanvien.create',
            ]
        ]
            ],
        [
            'label'=>'Phòng ban',
            'route'=>'phongban.index',
            'icon'=>'fa-building',
            'items'=>
            [
                [
                    'label'=>'Tất cả phòng ban',
                    'route'=>'phongban.index',
                ],
                [
                    'label'=>'Thêm Phòng ban',
                    'route'=>'phongban.create',
                ]
            ]
         ]
    
]

?>