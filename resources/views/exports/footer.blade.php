@if($format === 'pdf')
    <style>
        @page {
            margin-bottom: 60px;
        }

        .footer {
            bottom: -30px;
        }
    </style>
@endif

<div class="page-content footer">
    <div style="text-align: right;">
        <small>&copy;{{ date('Y') }} {{ setting('app-name') }}</small>
    </div>
</div>