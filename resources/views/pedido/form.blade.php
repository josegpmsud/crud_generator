<div class="row padding-1 p-1">
    <div class="col-md-12">
        {{--
        <div class="form-group mb-2 mb20">
            <label for="cliente_id" class="form-label">{{ __('Cliente Id') }}</label>
            <input type="text" name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" value="{{ old('cliente_id', $pedido?->cliente_id) }}" id="cliente_id" placeholder="Cliente Id">
            {!! $errors->first('cliente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        --}}
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="cliente_id" class="form-label">{{ __('Cliente Id') }}</label>
        
              <select id='select'  class="form-control" name="cliente_id">
                <option selected disabled readonly value="{{ old('cliente_id', $pedido?->cliente_id) }}" >--Selecciona el cliente--</option>
                @foreach($clientes as $cliente)
                    <option value="{{$cliente['id']}}">{{$cliente['name']}}</option>
               @endforeach
              </select>
            </div>
          </div>
        
        <div class="form-group mb-2 mb20">  
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $pedido?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>