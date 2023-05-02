@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label for="statut" class="col-md-4 col-form-label text-md-end">{{ __('Statut') }}</label>

                            <div class="col-md-6">
                            <select id="role" name="role">
                                <option value="1">Enseignant</option>
                                <option value="2">Doctorant</option>
                                <option value="3">Partenaire</option>
                            </select>
                                @error('statut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="doctorant_only" style="display:none;"  >
                            <div class="row mb-3">
                                <label for="encadrant" class="col-md-4 col-form-label text-md-end">{{ __('Encadrant') }}</label>

                                <div class="col-md-6" >
                                <select  name="encadrant">
                                    <option></option>
                                     @foreach($profs as $prof)
                                        <option value='{{$prof->id}}'>{{$prof->name .' '.$prof->prenom}}</option>
                                    @endforeach  
                                    
                                </select> 
                            
                                    @error('encadrant')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="partenaire_only" style="display:none;">
                        <div class="row mb-3">
                                <label for="adresse" class="col-md-4 col-form-label text-md-end">{{ __('Adresse') }}</label>
                                <div class="col-md-6">
                                <input type="text" name="adresse">
                                </div>
                                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>
                                <div class="col-md-6">
                                <input type="text" name="description">
                                </div>
                                <label for="domain" class="col-md-4 col-form-label text-md-end">{{ __('domain_activite') }}</label>
                                <div class="col-md-6">
                                <input type="text" name="domain">
                                </div>
                        </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Add a picture') }}</label>

                            <div class="col-md-6">
                                <input type="file" id="img" name="img">
                            </div>
                        </div>
                        <script>
                                  $(document).on('change','#role',function() {
                                    if($(role).val()=='2'){
                                        $("#doctorant_only").show();
                                    }
                                    else{
                                        $("#doctorant_only").hide();
                                    }
                                    });
                                    $(document).on('change','#role',function() {
                                    if($(role).val()=='3'){
                                        $("#partenaire_only").show();
                                    }
                                    else{
                                        $("#patenaire_only").hide();
                                    }
                                    });


                        </script>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
