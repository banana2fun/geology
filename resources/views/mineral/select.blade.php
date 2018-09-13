<label for="select_{{$name}}">{{$label}}</label>
<select id="select_{{$name}}" class="form-control form-control-sm" name="{{$fieldName}}">
    @if ($filter)
        <option value="">Все</option>
    @else
        <option value="">Выберите класс</option>
    @endif
    @foreach($items as $item)
        <option value="{{$item->id}}" {{$value == $item->id ? 'selected' : ''}}>{{($item->{$name})}}</option>
    @endforeach
</select>
