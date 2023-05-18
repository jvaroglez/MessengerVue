@extends('layouts.app')

@section('content')
<b-container fluid>
    <b-row>
        <b-col cols="4">
            <b-form class="my-3 mx-2">
                <b-form-input class="text-center" type="text" placeholder="Buscar contacto...">
                </b-form-input>
            </b-form>

            <b-list-group>
                <b-list-group-item variant="dark">
                    <b-row class="p-2" align-h="center">
                        <b-col cols="12" md="3" class="text-center">
                            <b-img rounded="circle" alt="img" blank width="50" height="50" blank-color="#000" class="m-1"></b-img>
                        </b-col>
                        <b-col cols="6" align-self="center" class="d-none d-md-block">
                            <p class="mb-1">Shrek</p>
                            <p class="text-muted small mb-1">You: webos con capsu</p>
                        </b-col>
                        <b-col cols="3" class="d-none d-md-block">
                            <p class="text-muted small">17:50</p>
                        </b-col>
                    </b-row>
                </b-list-group-item>
                <b-list-group-item>
                    <b-row class="p-2" align-h="center">
                        <b-col cols="12" md="3" class="text-center">
                            <b-img rounded="circle" alt="img" blank width="50" height="50" blank-color="#000" class="m-1"></b-img>
                        </b-col>
                        <b-col cols="6" align-self="center" class="d-none d-md-block">
                            <p class="mb-1">Cornifer</p>
                            <p class="text-muted small mb-1">You: salu2</p>
                        </b-col>
                        <b-col cols="3" class="d-none d-md-block">
                            <p class="text-muted small">11:40</p>
                        </b-col>
                    </b-row>
                </b-list-group-item>
                <b-list-group-item variant="secondary">
                    <b-row class="p-2" align-h="center">
                        <b-col cols="12" md="3" class="text-center">
                            <b-img rounded="circle" alt="img" blank width="50" height="50" blank-color="#000" class="m-1"></b-img>
                        </b-col>
                        <b-col cols="6" align-self="center" class="d-none d-md-block">
                            <p class="mb-1">Zote</p>
                            <p class="text-muted small mb-1">You: biejo pto</p>
                        </b-col>
                        <b-col cols="3" class="d-none d-md-block">
                            <p class="text-muted small">13:15</p>
                        </b-col>
                    </b-row>
                </b-list-group-item>
            </b-list-group>
        </b-col>

        <b-col cols="8">
            <b-row>
                <b-col cols="8">

                </b-col>
                <b-col cols="4">
                    <b-img rounded="circle" alt="img" blank width="30" height="30" blank-color="#000" class="m-1"></b-img>
                    <p>Usuario seleccionado</p>
                    <hr>
                    <b-form-checkbox>
                        Desactivar notificaciones
                    </b-form-checkbox>
                </b-col>
            </b-row>
        </b-col>
    </b-row>
</b-container>
@endsection
