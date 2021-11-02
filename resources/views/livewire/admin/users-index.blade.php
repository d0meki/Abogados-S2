<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th width="200px"> <a href="{{ route('users.edit', $user) }}"
                                class="btn btn-primary btn-sm">Asignar Permiso</a> </th>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
