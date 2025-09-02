/* ===============================
   File: tables_config.php
   Version: v1.0.0
   =============================== */

function get_dynamic_tables_config() {
    return [
        'wpagro_fields' => [
            'title' => 'Агро поля',
            'columns' => [
                'id'         => ['label' => 'ID', 'editable' => false, 'type' => 'int', 'default' => null, 'visible' => true],
                'sort_order' => ['label' => '№', 'editable' => true, 'type' => 'int', 'default' => 0, 'visible' => true],
                'field_name' => ['label' => 'Поле №', 'editable' => true, 'type' => 'text', 'default' => '', 'visible' => true],
                'area_ha'    => ['label' => 'S, га', 'editable' => true, 'type' => 'decimal', 'default' => 0, 'visible' => true],
                'bonitet'    => ['label' => 'Бонитет', 'editable' => true, 'type' => 'int', 'default' => 0, 'visible' => true],
                'gumus'      => ['label' => 'Гумус (%)', 'editable' => true, 'type' => 'decimal', 'default' => 0, 'visible' => true],
                'soil_type'  => [
                    'label' => 'Тип почвы', 'editable' => true, 'type' => 'select',
                    'options' => ['Бурая','Глинистая','Каштановая','Серая лесная','Суглинистая','Чернозём','Другое'],
                    'default' => 'Другое', 'visible' => true
                ],
                'n'          => ['label' => 'N', 'editable' => true, 'type' => 'int', 'default' => 0, 'visible' => true],
                'p'          => ['label' => 'P', 'editable' => true, 'type' => 'int', 'default' => 0, 'visible' => true],
                'k'          => ['label' => 'K', 'editable' => true, 'type' => 'int', 'default' => 0, 'visible' => true],
                'ph'         => ['label' => 'pH', 'editable' => true, 'type' => 'decimal', 'default' => 0, 'visible' => true],
                'department' => ['label' => 'Отделение', 'editable' => true, 'type' => 'text', 'default' => '', 'visible' => true],
                'region'     => ['label' => 'Область', 'editable' => true, 'type' => 'text', 'default' => '', 'visible' => true],
                'district'   => ['label' => 'Район', 'editable' => true, 'type' => 'text', 'default' => '', 'visible' => true],
                'sector'     => ['label' => 'Участок', 'editable' => true, 'type' => 'text', 'default' => '', 'visible' => true],
                'ownership'  => [
                    'label' => 'Форма собственности', 'editable' => true, 'type' => 'select',
                    'options' => ['Государство','Фермер','Холдинг','Другое'],
                    'default' => 'Другое', 'visible' => true
                ],
                'sowing_date'=> ['label' => 'Дата посева', 'editable' => true, 'type' => 'date', 'default' => null, 'visible' => true],
            ]
        ],

        'wp_clients' => [
            'title' => 'Клиенты',
            'columns' => [
                'id'         => ['label' => 'ID', 'editable' => false, 'type' => 'int', 'default' => null, 'visible' => true],
                'sort_order' => ['label' => '№', 'editable' => true, 'type' => 'int', 'default' => 0, 'visible' => true],
                'name'       => ['label' => 'Имя', 'editable' => true, 'type' => 'text', 'default' => '', 'visible' => true],
                'email'      => ['label' => 'Email', 'editable' => true, 'type' => 'text', 'default' => '', 'visible' => true],
                'status'     => [
                    'label' => 'Статус','editable' => true,'type' => 'select',
                    'options' => ['active','inactive'],
                    'default' => 'active', 'visible' => true
                ],
                'city'       => [
                    'label' => 'Город','editable' => true,'type' => 'select',
                    'options' => ['Днепр','Киев','Лондон','Простоквашино','Херсон'],
                    'default' => '', 'visible' => true
                ],
                'created_at' => ['label' => 'Дата регистрации', 'editable' => true, 'type' => 'date', 'default' => null, 'visible' => true],
            ]
        ],
    ];
}
