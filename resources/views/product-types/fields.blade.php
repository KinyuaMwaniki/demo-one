<div class="card-body">
    <div class="form-group row">
        {!! Form::label(
        'name',
        'Name<span class="required-marker">*</span>',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::text('name', null, ['required' => 'required', 'class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : '')])
            !!}
        </div>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
