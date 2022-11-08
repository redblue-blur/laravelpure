<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" class="form-control border border-primary" name="{{$name}}">
    <span class="text-danger">
        <!-- @error('name')
            {{$message}}
        @enderror -->
    </span>
    <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
</div>