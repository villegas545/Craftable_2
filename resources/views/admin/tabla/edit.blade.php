@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.tabla.actions.edit', ['name' => $tabla->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <tabla-form
                :action="'{{ $tabla->resource_url }}'"
                :data="{{ $tabla->toJson() }}"
                v-cloak
                inline-template>

                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.tabla.actions.edit', ['name' => $tabla->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.tabla.components.form-elements')
                        <div class="card">
                            @include('brackets/admin-ui::admin.includes.media-uploader', [
                                'mediaCollection' => app(App\Models\Tabla::class)->getMediaCollection('gallery'),
                                'label' => 'Gallery'
                            ])
                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>

                </form>

        </tabla-form>

        </div>

</div>

@endsection
