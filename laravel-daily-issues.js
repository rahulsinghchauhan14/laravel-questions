# Get current page name in blade file
@if (\Request::is('admin/login'))
    Companies menu
@endif

---same sa 
{{ \Request::is('admin/login') || \Request::is('admin') ? 'bg-primary-admin' : 'app' }}



#How to Set Variables in a Laravel Blade Template
@php
$Variables =''; or write anything you want to write in php format
@endphp

#