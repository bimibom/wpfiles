/* ===============================
   File: loader.php
   Version: v1.0.0
 =============================== */
add_action('wp_enqueue_scripts', function () {
    // === 1. CSS ===
    wp_enqueue_style('datatables-css', 'https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css', [], null);
    wp_enqueue_style('datatables-responsive-css', 'https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css', [], null);
    wp_enqueue_style('datatables-colresize-css', 'https://cdn.datatables.net/colresize/1.5.1/css/colResize.dataTables.min.css', [], null);
	

    // === 2. JS (jQuery и DataTables) ===
    wp_enqueue_script('jquery');
    wp_enqueue_script('datatables-js', 'https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js', ['jquery'], null, true);
    wp_enqueue_script('datatables-responsive-js', 'https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js', ['datatables-js'], null, true);
    wp_enqueue_script('datatables-colresize-js', 'https://cdn.datatables.net/colresize/1.5.1/js/dataTables.colResize.min.js', ['datatables-js'], null, true);
    wp_enqueue_script('xlsx-js', 'https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js', [], null, true);
	
	// === 3. Календарь
	// CSS для календаря
wp_enqueue_style('flatpickr-css', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css', [], null);
// JS для календаря
wp_enqueue_script('flatpickr-js', 'https://cdn.jsdelivr.net/npm/flatpickr', ['jquery'], null, true);
// Локализация на русский
wp_enqueue_script('flatpickr-locale-ru', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ru.js', ['flatpickr-js'], null, true);		
	
    // === 4. Глобальные переменные для AJAX (раньше всех остальных сниппетов)
    // window.AgroGlobals используется в table_crud.js
$globals_js = 'window.AgroGlobals = window.AgroGlobals || {};
window.AgroGlobals.ajaxurl = "' . esc_url_raw(admin_url('admin-ajax.php')) . '";';
    // Вставим сразу после jQuery (в шапке), чтобы все скрипты в подвале уже видели переменные
    wp_add_inline_script('jquery', $globals_js, 'after');

});
