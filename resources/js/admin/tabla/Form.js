import AppForm from '../app-components/Form/AppForm';

Vue.component('tabla-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Nomrbe:  '' ,
                Direccion:  '' ,
                
            }
        }
    }

});