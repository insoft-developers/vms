<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
<link rel="stylesheet" href="{{ asset('css/backend-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/backend.css?v=1.0.1') }}">
<link rel="stylesheet" href="{{ asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/remixicon/fonts/remixicon.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


<link rel="stylesheet" href="{{ asset('vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">

<style>
    .side-menu-title {
        font-size: 14px;
    }

    .subtitle {
        font-size: 14px;
    }

    .list-subtitle {}

    #table-list {
        font-size: 14px;
        /* atau ukuran lain seperti 1rem, 12px, dll */
    }

    #table-list thead th {
        font-size: 14px;
        font-weight: bold;
    }

    #table-list tbody td {
        font-size: 14px;
        padding-top: 8px !important;
        padding-bottom: 8px !important;
    }

    #table-list tfoot th {
        font-size: 14px;
        font-style: italic;
    }

    /* .modal-content {
        background: #f3f3f3 !important;
    } */

    .form-control {
        border: 1px solid whitesmoke !important;
        background-color: whitesmoke !important;
    }

    .profile-image {
        height: 40px;
        width: 30px;
        border-radius: 4px;
    }

    .fa-tombol-view {
        color: white;
        background: green;
        padding: 6px 6px;
        font-size: 12px;
        border-radius: 15px;
    }

    .fa-tombol-edit {
        color: white;
        background: orange;
        padding: 6px 6px;
        font-size: 12px;
        border-radius: 15px;
    }

    .fa-tombol-delete {
        color: white;
        background: red;
        padding: 6px 7px;
        font-size: 12px;
        border-radius: 13px;
    }

    .table-view {
        width: 100%;
    }

    .table-view td {
        padding: 10px;
        border: 1px solid whitesmoke;
        border-collapse: collapse;
        font-size: 14px;
    }

    

    .img-view-profile {
        width: 80px;
        height: 100px;
        border-radius: 5px;
        border: 2px solid whitesmoke;
        object-fit: cover;
    }
</style>
