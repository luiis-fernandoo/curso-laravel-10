@csrf()

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" name="subject" placeholder="Digite o assunto.." value="{{$support->subject ?? old('subject')}}">
    </div>
    <div class="col-sm-6">
        <textarea name="body" class="form-control form-control-user" id="" cols="30" rows="5" placeholder="Digite a descrição">{{$support->subject ?? old('body') }}</textarea>
    </div>

        <button class="btn btn-primary btn-user btn-block my-4" type="submit">Cadastrar</button>
</div>