@if($model->count())
    <div class="pages">
        <a class="a1" href="javascript:;">{{ $model->total() }}条</a>
        <a href="{{ $model->perPage() }}" class="a1">上一页</a>
        @for ($i = 1, $length = min(10, $model->lastPage()); $i <= $length; $i++)
            @if($model->currentPage() === $i)
                <span>{{ $i }}</span>
            @else
                <a href="{{ $model->url($i) }}">{{ $i }}</a>
            @endif
        @endfor
        <a href="{{ $model->nextPageUrl() }}" class="a1">下一页</a>
    </div>
@endif
