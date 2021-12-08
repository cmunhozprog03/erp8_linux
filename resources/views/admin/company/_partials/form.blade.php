@csrf
<div class="form-group mx-2 mt-1">
    <input type="text" name="social_name" class="form-control" placeholder="Razão Social"
        value="{{ $company->social_name ?? old('social_name') }}">

    @error('social_name')
        <small class="text-danger">{{ message }}</small>
    @enderror
</div>

<div class="form-group mx-2">
    <input type="text" name="fantasy_name" class="form-control" placeholder="Nome Fantasia"
        value="{{ $company->fantasy_name ?? old('fantasy_name') }}">

    @error('fantasy_name')
        <small class="text-danger">{{ message }}</small>
    @enderror
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group ml-2">
            <input type="text" name="cnpj" class="form-control" placeholder="CNPJ"
                value="{{ $company->cnpj ?? old('cnpj') }}">

            @error('cnpj')
                <small class="text-danger">{{ message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            <input type="text" name="ie" class="form-control ml-2" placeholder="Inscrição Estadual"
                value="{{ $company->ie ?? old('ie') }}">

            @error('ie')
                <small class="text-danger">{{ message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-3">
        <div class="form-group mr-2">
            <input type="text" name="im" class="form-control" placeholder="Inscrição Municipal"
                value="{{ $company->im ?? old('im') }}">

            @error('im')
                <small class="text-danger">{{ message }}</small>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group ml-2">
            <input type="text" name="site" class="form-control" placeholder="Site"
                value="{{ $company->site ?? old('site') }}">

            @error('site')
                <small class="text-danger">{{ message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="form-group mr-2">
            <input type="email" name="email" class="form-control" placeholder="E-mail"
                value="{{ $company->email ?? old('email') }}">

            @error('email')
                <small class="text-danger">{{ message }}</small>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <div class="form-group ml-2">
            <input type="text" name="phone1" class="form-control" placeholder="Telefone"
                value="{{ $company->phone1 ?? old('phone1') }}">

            @error('phone1')
                <small class="text-danger">{{ message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <input type="text" name="phone2" class="form-control" placeholder="Telefone"
                value="{{ $company->phone2 ?? old('phone2') }}">

            @error('phone1')
                <small class="text-danger">{{ message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-4">
        <div class="form-group mr-2">
            <input type="text" name="mobile" class="form-control" placeholder="Celular"
                value="{{ $company->mobile ?? old('mobile') }}">

            @error('phone1')
                <small class="text-danger">{{ message }}</small>
            @enderror
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-8">
        <div class="form-group ml-2">
            <input type="file" name="logo" class="form-control" placeholder="Logo"
                value="{{ $company->logo ?? old('logo') }}">

            @error('logo')
                <small class="text-danger">{{ message }}</small>
            @enderror
        </div>
    </div>
</div>
