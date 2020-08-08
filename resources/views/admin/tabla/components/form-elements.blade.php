<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nomrbe'), 'has-success': fields.Nomrbe && fields.Nomrbe.valid }">
    <label for="Nomrbe" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.tabla.columns.Nomrbe') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nomrbe" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nomrbe'), 'form-control-success': fields.Nomrbe && fields.Nomrbe.valid}" id="Nomrbe" name="Nomrbe" placeholder="{{ trans('admin.tabla.columns.Nomrbe') }}">
        <div v-if="errors.has('Nomrbe')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nomrbe') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Direccion'), 'has-success': fields.Direccion && fields.Direccion.valid }">
    <label for="Direccion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.tabla.columns.Direccion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Direccion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Direccion'), 'form-control-success': fields.Direccion && fields.Direccion.valid}" id="Direccion" name="Direccion" placeholder="{{ trans('admin.tabla.columns.Direccion') }}">
        <div v-if="errors.has('Direccion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Direccion') }}</div>
    </div>
</div>


