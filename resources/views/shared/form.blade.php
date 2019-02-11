<div class="form-group">
    <label for="input" class="col-lg-4 control-label">Input</label>
    <div class="col-lg-8">
        {!! Form::text('input', null, array('class' => 'form-control', 'autofocus' => 'true', 'style' => 'width: 50%;')) !!}
        <div class="text-danger" style="display: block; text-align: left;">{!! $errors->first('input') !!}</div>
    </div>
    <div class="clear"></div>
</div>

<div class="form-group">
    <label for="counts" class="col-lg-4 control-label">Counts</label>
    <div class="col-lg-8">
        {!! Form::text('counts', null, array('class' => 'form-control', 'autofocus' => 'true', 'style' => 'width: 50%;')) !!}
        <div class="text-danger" style="display: block; text-align: left;">{!! $errors->first('counts') !!}</div>
    </div>
    <div class="clear"></div>
</div>

<div class="form-group">
    <label for="radio" class="col-lg-4 control-label">Save to Db</label>
    <div class="col-lg-4">
        <label class="radio-inline">
            <input type="radio" name="optradio" value="yes" checked>Yes
        </label>
        <label class="radio-inline">
            <input type="radio" name="optradio" value="no">No
        </label>
        <div class="text-danger">{!! $errors->first('radio') !!}</div>
    </div>
    <div class="clear"></div>
</div>

<div class="form-group">
    <div class="col-lg-12">
        <button type="submit" class="btn btn-raised btn-primary">Go</button>
    </div>
    <div class="clear"></div>
</div>