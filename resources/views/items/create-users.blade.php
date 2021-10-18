<div class="modal fade" id="createUsersModal" tabindex="-1" role="dialog" aria-labelledby="createUsersModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header removehr">
            <h5 class="modal-title text-center" id="createUsersModalLabel"><i class="fal fa-user-plus"></i> Create User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::open(["route" => "admin.users", 'method' => 'post']) !!}
            @include('items._reg-user-form')

            <div class="mb-3 form-group @error('role') has-error @enderror">
                {!! Form::label('role','Role',[],false) !!}
                {{Form::select('role', [
                    2 => 'Normal',
                    1 => 'Administrator',
                ], null, ['class'=>'form-control', 'id'=>'role'])}}
                <span class="errspan" id="errspan">{{ $errors->first('role') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" id="actionBtn" onclick="btnload()">Create User</button>
            </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script type="text/javascript">
    @if (count($errors) > 0)
        var myModal = new bootstrap.Modal(document.getElementById("createUsersModal"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    @endif
</script>