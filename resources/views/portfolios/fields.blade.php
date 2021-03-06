<div class="card-body">
    <div class="form-group row">
        {!! Form::label(
        'header',
        'Product/Service Name<span class="required-marker">*</span>',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::text('header', null, ['class' => 'form-control ' . ($errors->has('header') ? 'is-invalid' : '')])
            !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label(
        'subheader',
        'Description<span class="required-marker">*</span>',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::text('subheader', null, ['class' => 'form-control ' . ($errors->has('subheader') ? 'is-invalid' :
            '')]) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label(
        'price',
        'Product Price',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::text('price', null, ['class' => 'form-control ' . ($errors->has('price') ? 'is-invalid' : '')])
            !!}
        </div>
    </div>


     <div class="form-group row">
        {!! Form::label(
        'type_id',
        'Product Type',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::select('type_id', $types, null, ['class' => 'form-control ' . ($errors->has('type_id') ? 'is-invalid' : '')])
            !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label(
        'featured',
        'Featured on front page',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::select('featured', [0 => 'No', 1 => 'Yes'], null, ['class' => 'form-control ' . ($errors->has('featured') ? 'is-invalid' : '')])
            !!}
        </div>
    </div>



    <div class="form-group row">
        {!! Form::label(
        'image',
        'Display Image<span class="required-marker">*</span>',
        [
        'class' => 'col-sm-2
        col-form-label',
        ],
        false,
        ) !!}
        <div class="col-sm-10">
            {!! Form::file('image', null, [
            'class' => "custom-file-input
            {{ $errors->has('image') ? 'is-invalid' : '' }}",
            ]) !!}
            @error('image')
                <div class="error text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
