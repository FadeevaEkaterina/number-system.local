<div class="form-row">
    <div class="col-sm mt-1">
            <input type="text" name="number" value="{{ $number ?? old('number', '')}}" placeholder="Девятиричное число" class="form-control">
    </div>
</div>
<div class="form-row mt-3">
    <div class="col-sm mt-1">
        <button type="submit" name="operation" value="convert9to10"
            id="convert9to10" class="btn btn-outline-secondary btn-block">
            Преобразовать
        </button>
    </div>
</div>
