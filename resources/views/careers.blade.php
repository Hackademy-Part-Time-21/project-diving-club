<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
            Lavora con noi
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum qui quibusdam voluptate neque aliquid 
                beatae, deserunt distinctio itaque vitae vero quaerat praesentium
                et laborum provident aliquam nam optio? Rem, nobis.</p>

                <h2>Lavora come revisore</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum qui quibusdam voluptate neque aliquid 
                beatae, deserunt distinctio itaque vitae vero quaerat praesentium
                et laborum provident aliquam nam optio? Rem, nobis.</p>

                <h2>Lavora come redattore</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum qui quibusdam voluptate neque aliquid 
                beatae, deserunt distinctio itaque vitae vero quaerat praesentium
                et laborum provident aliquam nam optio? Rem, nobis.</p>

            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($arrors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif 

                <form action="{{ route('careers.submit') }}" method="post" class="p-5">
                    @csrf
                    <div class="mb-3" >
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="from-label">Email</label>
                        <input type="email" name="email" class="from-control" id="email" value="{{ old('email') ??
                        Auth::user()->email }}">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="from-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="from-control">{{ old('message')}}</textarea>
                    </div>
                    <div class="mt-2" >
                        <button class="btn btn-info text-white">Invia la tua candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>    