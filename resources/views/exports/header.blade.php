@if($format === 'pdf')
    <style>
        @page {
            margin-top: 60px;
        }

        .header {
            top: -30px;
        }
    </style>
@endif

<div class="page-content header">
    <div style="text-align: right;">
        <small>
            {{ $entity->name }}
            @if($format === 'pdf')
                | <span class="page-number"></span>
            @endif
        </small>
    </div>
</div>